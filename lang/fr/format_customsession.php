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

$string['section0name'] = 'Questionnaire de départ';
$string['lastsectionname'] = 'Validation';
$string['newsection'] = 'Nouvelle section';
$string['activities_offered'] = 'Les activités proposées';
$string['initial_section_text1'] = 'Pour commencer, vérifions les connaissances que tu as déjà sur ce sujet à l\'aide d\'un questionnaire.';
$string['initial_section_text2'] = 'C\'est parti !';
$string['initial_section_button'] = 'Je commence le questionnaire';
$string['training_text1'] = 'Un petit entraînement avant de décrocher le badge ?';
$string['training_text2'] = 'Et la suite...';
$string['training_button'] = 'J\'accède aux entraînements';
$string['last_section_text1'] = 'Vérifions les connaissances que tu as apprises durant la formation.';
$string['last_section_text2'] = 'C\'est parti !';
$string['last_section_button'] = 'Je commence le test';
$string['finished_title'] = 'Et la suite...';
$string['finished_bloc1_text1'] = 'Bravo !';
$string['finished_bloc1_text2'] = 'Ton badge est disponible sur ton tableau de bord.';
$string['finished_bloc2_text1'] = 'Tu souhaites en savoir plus sur les métiers et formations en lien avec ce sujet ?';
$string['finished_button'] = 'Liens';

$string['addsections'] = 'Ajouter une section';
$string['newsection'] = 'Nouvelle section';
$string['hidefromothers'] = 'Cacher la section';
$string['showfromothers'] = 'Afficher';
$string['currentsection'] = 'Cette section';
$string['markedthissection'] = 'Cette section est mise en évidence comme étant la section actuelle';
$string['markthissection'] = 'Mettez cette section en surbrillance comme section actuelle';

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
$string['setting_training_button_url_name'] = 'URL du bouton d\'entrainement';
$string['setting_training_button_url_help'] = 'URL du bouton d\'entrainement';
$string['setting_training_button_url_help_help'] = 'Entrer une url, par exemple : https://mysite.com';
$string['setting_finished_button_url_name'] = 'URL du bouton en savoir plus';
$string['setting_finished_button_url_help'] = 'URL du bouton en savoir plus';
$string['setting_finished_button_url_help_help'] = 'Entrer une url, par exemple : https://mysite.com';

// Privacy.
$string['privacy:metadata'] = 'The Custom Session format stores lots of settings that pertain to its configuration.  None of the settings are related to a specific user.  It is your responsibilty to ensure that no user data is entered in any of the free text fields.  Setting a setting will result in that action being logged within the core Moodle logging system against the user whom changed it, this is outside of the formats control, please see the core logging system for privacy compliance for this.  When uploading images, you should avoid uploading images with embedded location data (EXIF GPS) included or other such personal data.  It would be possible to extract any location / personal data from the images.  Please examine the code carefully to be sure that it complies with your interpretation of your privacy laws.  I am not a lawyer and my analysis is based on my interpretation.  If you have any doubt then remove the format forthwith.';
