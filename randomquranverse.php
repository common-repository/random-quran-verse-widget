<?php
/*
Plugin Name: Random Quran Verse Widget
Plugin URI:
Description: Displays a random Quranic Verse on your widgetized sidebar from a text file.
Version: 1.0
Author: Munawar Rangoonwala
Author URI:
*/
/*
Unzip to /plugins. Activate the plugin in your admin interface. Add it to your sidebar using widgets.
*/
/*  This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
function random_quran_verse() {
	/* Config Part --------------------------------------------------------------------------------------------------------------*/
	$random = true;
	$directory = get_bloginfo('wpurl') . "/wp-content/plugins/randomquranverse/";    //Put the correct path//
	$quotefile = "randomquran.txt";	        //Add all quotes in this file in one line//
	$quotecountfile = "displayquran.txt";   //This counts quotes, could be optionable if random is set false//
	/* End of Config Part -------------------------------------------------------------------------------------------------------*/

	$quotes = file($directory.$quotefile);
	$number = count($quotes);

	if($random){
		$num = rand(0,$number-1);
	}
	else{
		$num = file($directory.$quotecountfile);
		$num = $num[0]+1;
		if($num>$number-1){ // If ran out of quotes, start again!
			$num=0;
		}
		if (file_exists($directory.$quotecountfile)) {
			$nu = fopen($directory.$quotecountfile, "w");
			fputs($nu,$num);
		}
		else {
			die("Cant Find $quotecountfile");
		}
	}

	// display the quote on the page

echo "$quotes[$num]";
}

function random_quran_verse_widget($args) {
  extract($args);
  echo $before_widget . $before_title . "Random Quran Verse" . $after_title;
  random_quran_verse();
  echo $after_widget;
}

function init_random_quran_verse() {
  register_sidebar_widget("Random Quran Verse", "random_quran_verse_widget");
}

add_action("plugins_loaded", "init_random_quran_verse");
?>