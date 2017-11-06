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
 *  THEME EADUM - Le Mans Université
 *
 * @package    theme_eadumboostvaleo
 * @copyright  2017 Jonathan J. - Le Mans Université
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2017110600;
$plugin->requires  = 2017050500;
$plugin->release  = 'Thème EADUM Valéo v1.0.0';
$plugin->component = 'theme_eadumboostvaleo';

// This is a list of plugins, this plugin depends on (and their versions).
$plugin->dependencies = [
  'theme_boost' => '2017051500'
];
