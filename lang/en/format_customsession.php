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
 * @package    format_customsession
 * @copyright  2025 Ingenium Digital Learning
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Custom Session';

$string['section0name'] = 'Inception Questionnaire';
$string['lastsectionname'] = 'Validation';
$string['newsection'] = 'New section';
$string['activities_offered'] = 'The activities offered';
$string['initial_section_text1'] = 'To begin, let\'s check your existing knowledge on this topic using a questionnaire.';
$string['initial_section_text2'] = 'Here we go!';
$string['initial_section_button'] = 'I start the questionnaire';
$string['training_text1'] = 'A little training before getting the badge?';
$string['training_text2'] = 'And the rest...';
$string['training_button'] = 'I access the training sessions';
$string['last_section_text1'] = 'Let\'s check the knowledge you learned during the training.';
$string['last_section_text2'] = 'Here we go!';
$string['last_section_button'] = 'I start the test';
$string['finished_title'] = 'And what follows...';
$string['finished_bloc1_text1'] = 'Congratulations';
$string['finished_bloc1_text2'] = 'Your badge is available on your dashboard.';
$string['finished_bloc2_text1'] = 'Would you like to learn more about jobs and training related to this topic?';
$string['finished_button'] = 'Links';

$string['addsections'] = 'Add section';
$string['newsection'] = 'New section';
$string['hidefromothers'] = 'Hide section';
$string['showfromothers'] = 'Show';
$string['currentsection'] = 'This section';
$string['markedthissection'] = 'This section is highlighted as the current section';
$string['markthissection'] = 'Highlight this section as the current section';

// Informations
$string['information'] = 'Information';
$string['informationsettings'] = 'Information settings';
$string['informationsettingsdesc'] = 'Custom Session format information';
$string['informationchanges'] = 'Changes';
$string['love'] = 'love';
$string['versioninfo'] = 'Release {$a->release}, version {$a->version} on Moodle {$a->moodle}.';
$string['versionalpha'] = 'Alpha version - Almost certainly contains bugs.  This is a development version for developers \'only\'!  Don\'t even think of installing on a production server!';
$string['versionbeta'] = 'Beta version - Likely to contain bugs.  Ready for testing by administrators on a test server only.';
$string['versionrc'] = 'Release candidate version - May contain bugs.  Check completely on a test server before considering on a production server.';
$string['versionstable'] = 'Stable version - Could contain bugs.  Check on a test server before installing on your production server.';

// Settings
$string['settings'] = 'Settings';
$string['settingssettings'] = 'Settings settings';
$string['settingssettingsdesc'] = 'Custom Session format settings';
$string['setting_training_button_url_name'] = 'Training button URL';
$string['setting_training_button_url_help'] = 'Training button URL';
$string['setting_training_button_url_help_help'] = 'Enter a URL, for example : https://mysite.com';
$string['setting_finished_button_url_name'] = 'URL of the "Learn More" button';
$string['setting_finished_button_url_help'] = 'URL of the "Learn More" button';
$string['setting_finished_button_url_help_help'] = 'Enter a URL, for example : https://mysite.com';

// Privacy.
$string['privacy:metadata'] = 'The Custom Session format stores lots of settings that pertain to its configuration.  None of the settings are related to a specific user.  It is your responsibilty to ensure that no user data is entered in any of the free text fields.  Setting a setting will result in that action being logged within the core Moodle logging system against the user whom changed it, this is outside of the formats control, please see the core logging system for privacy compliance for this.  When uploading images, you should avoid uploading images with embedded location data (EXIF GPS) included or other such personal data.  It would be possible to extract any location / personal data from the images.  Please examine the code carefully to be sure that it complies with your interpretation of your privacy laws.  I am not a lawyer and my analysis is based on my interpretation.  If you have any doubt then remove the format forthwith.';
