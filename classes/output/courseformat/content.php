<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Custom Session Format.
 *
 * @package   format_customsession
 * @copyright  2025 Ingenium Digital Learning
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_customsession\output\courseformat;

use completion_info;
use context_course;
use core_courseformat\output\local\content as content_base;
use core\output\renderer_base;
use core\url;
use moodle_exception;
use stdClass;

/**
 * Base class to render a course content.
 *
 * @package   format_customsession
 * @copyright  2025 Ingenium Digital Learning
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class content extends content_base {

    /**
     * Get the template name.
     *
     * @param renderer_base $output typically, the renderer that's calling this method.
     * @return string Mustache template name.
     */
    public function get_template_name(renderer_base $renderer): string {
        return 'format_customsession/content';
    }

    /**
     * Export this data so it can be used as the context for a mustache template (core/inplace_editable).
     *
     * @param renderer_base $output typically, the renderer that's calling this method.
     * @return stdClass data context for a Mustache template.
     */
    public function export_for_template(renderer_base $output) {
        global $CFG, $PAGE, $COURSE, $USER;
        $format = $this->format;
        $editing = $PAGE->user_is_editing();

        $data = (object)[
            'title' => $format->page_title(),
            'format' => $format->get_format(),
            'sectionreturn' => null,
            'coursefinished' => 0,
            'novagrade' => null,
            'editing' => $editing,
        ];

        $singlesectionid = $this->format->get_sectionid();
        $sections = $this->export_sections($output);
        $initialsection = '';
        $coursesettings = $format->get_settings();
        //$course = $format->get_course();

        if (!empty($sections)) {
            // Is first entry section 0?
            if ($sections[0]->num === 0 && (!$editing)) {
                if (!$singlesectionid) {
                    // Most formats uses section 0 as a separate section so we remove from the list.
                    $initialsection = array_shift($sections);
                    $data->initialsection = $initialsection;
                }
            }
            if (($editing) || ($singlesectionid)) { // This triggers the display of the standard list of section(s).
                $data->sections = $sections;
            } else {
                $lastsection = array_pop($sections);
            }
        }

        if (!$editing) { // This triggers the display of the standard list of section(s).
            $data->hascustomsections = $sections;
            $data->haslastsection = $lastsection;
        }

        if ($this->hasaddsection) {
            $addsection = new $this->addsectionclass($format);
            $data->numsections = $addsection->export_for_template($output);
        }

        if ($format->show_editor()) {
            $bulkedittools = new $this->bulkedittoolsclass($format);
            $data->bulkedittools = $bulkedittools->export_for_template($output);
        }

        $courseprogresspercentage = \core_completion\progress::get_course_progress_percentage($COURSE, $USER->id);
        if($courseprogresspercentage == 100) {
            $data->coursefinished = 1;

            if (file_exists("{$CFG->dirroot}/blocks/novagrade/lib.php") && (!$editing)) {
                $renderable = new \block_novagrade\output\maincourse($COURSE);
                $renderer = $PAGE->get_renderer('block_novagrade');
                $data->novagrade = $renderer->render($renderable);
            }
        }

        $data->url_training = new \moodle_url($coursesettings['training_button_url']);
        $data->url_finished = new \moodle_url($coursesettings['finished_button_url']);

        return $data;
    }

}
