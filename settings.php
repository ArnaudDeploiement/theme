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
 * Custom session Format.
 *
 * @package    format_customsession
 * @copyright  2025 Ingenium Digital Learning
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

use format_customsession\admin_setting_information;
use format_customsession\admin_setting_markdown;

$settings = null;
$ADMIN->add('formatsettings', new admin_category('format_customsession', get_string('pluginname', 'format_customsession')));

// Information.
$page = new admin_settingpage(
    'formatinformationcustomsession',
    get_string('information', 'format_customsession')
);

if ($ADMIN->fulltree) {
    $page->add(new admin_setting_heading(
        'format_customsession_information',
        '',
        format_text(get_string('informationsettingsdesc', 'format_customsession'), FORMAT_MARKDOWN)
    ));

    // Information.
    $page->add(new admin_setting_information('format_customsession/formatinformation', '', '', 405));

    // Support.md.
    $page->add(new admin_setting_markdown('format_customsession/formatsupport', '', '', 'Support.md'));

    // Changes.md.
    $page->add(new admin_setting_markdown(
        'format_customsession/formatchanges',
        get_string('informationchanges', 'format_customsession'),
        '',
        'Changes.md'
    ));
}
$ADMIN->add('format_customsession', $page);

// Settings.
$page = new admin_settingpage(
    'formatsettingcustomsession',
    get_string('settings', 'format_customsession')
);
if ($ADMIN->fulltree) {
    $page->add(new admin_setting_heading(
        'format_customsession_settings',
        '',
        format_text(get_string('settingssettingsdesc', 'format_customsession'), FORMAT_MARKDOWN)
    ));

    // Training button URL
    $page->add(new admin_setting_configtext('format_customsession/training_button_url',
        get_string('setting_training_button_url_name', 'format_customsession'),
        get_string('setting_training_button_url_help', 'format_customsession'),
        '')
    );

    // Finished button URL
    $page->add(new admin_setting_configtext('format_customsession/finished_button_url',
        get_string('setting_finished_button_url_name', 'format_customsession'),
        get_string('setting_finished_button_url_help', 'format_customsession'),
        '')
    );

}
$ADMIN->add('format_customsession', $page);
