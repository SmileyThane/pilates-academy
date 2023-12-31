<?php
// This file is part of the Zoom module for Moodle - http://moodle.org/
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
 * Zoom module capability definition
 *
 * @package    mod_zoom
 * @copyright  2018 Nick Stefanski <nmstefanski@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$addons = [
    "mod_zoom" => [
        "handlers" => [
            'zoommeetingdetails' => [
                'displaydata' => [
                'title' => 'pluginname',
                    'icon' => $CFG->wwwroot . '/mod/zoom/pix/icon.gif',
                    'class' => '',
                ],

                'delegate' => 'CoreCourseModuleDelegate',
                'method' => 'mobile_course_view', // Main function in \mod_zoom\output\mobile.
                'offlinefunctions' => [
                    'mobile_course_view' => [],
                ],
            ],
        ],
        'lang' => [
            ['pluginname', 'zoom'],
            ['join_meeting', 'zoom'],
            ['unavailable', 'zoom'],
            ['meeting_time', 'zoom'],
            ['duration', 'zoom'],
            ['passwordprotected', 'zoom'],
            ['password', 'zoom'],
            ['joinlink', 'zoom'],
            ['joinbeforehost', 'zoom'],
            ['starthostjoins', 'zoom'],
            ['startpartjoins', 'zoom'],
            ['option_audio', 'zoom'],
            ['status', 'zoom'],
            ['recurringmeetinglong', 'zoom'],
        ],
    ],
];
