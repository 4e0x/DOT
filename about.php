<?php 
   session_start();
   
   require './global/dotGlobal_config.inc.php';
?>
<!DOCTYPE html>
<html lang="en" class="DOT_APP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
    <title>About | DOT APP v
        <?php getCurrentDotVersion();?>
    </title>
    <meta name="description" content="A very basic Vulnerable Web Application built on PHP/MySQL, to train beginners/to get started with basic Web App Attacks/Common misconfigurations.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="./assets/css/dot_appv1.css">
	<link rel="icon" type="image/ico" href="./favicon.ico">
</head>

<body class="dotsetup app-darkmode" id="setup-first">
    <div class="root_wrapper">
        <div class="dot_app_root font_mono">
            <aside class="dot_sidebar">
                <div class="dot_header_logo">
                    <a href="./">
                        <img src="./assets/images/logo.png" class="dot_logo">
                    </a>
                </div>
                <ul class="dot_options ul_nostyle">
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./setup.php">
                          Setup
                        </a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white " href="./instructions.php">
                          Instructions
                        </a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white dot_option_active" href="./about.php">
                          About
                        </a>
                    </li>
                </ul>
                <div class="dot_footer">
                    <p class="font_mono dot_sfooter_text tt_center">
                        <?php getDOTVersionRelease(); ?>
                    </p>
                </div>
            </aside>
            <div class="dot_main_body">
                <div class="dot_page_status">
                    <h3 class="dotpage_title font_mono dot_white">
                        <div class="logo_small_devices f_l">
                        <svg id="sidebar_trigger" viewBox="0 0 20 20" preserveAspectRatio="xMidYMid meet" focusable="false" style="position: relative;fill: #fff;top: -4px;width: 20px;height: 20px;display: inline-block;"><g><path d="M2 4h16v2H2zM2 9h16v2H2zM2 14h16v2H2z"></path></g></svg>
                         
                            <img src="./assets/images/logo.png" class="dotlogo_small_devices">
                        </div>
                        ABOUT DOT APP v
                        <?php getCurrentDotVersion();?>
                    </h3>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">About</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">DOT is a mini and very basic PHP/MySQL web application that is built to be vulnerable. This app was just built to give an insight/train beginners in the field of cyber sec to test thier skills, practice and learn how different attacks
                                work or to get you hyped on challenges. DOT app was built for beginners but can also be used by professionals (must be really easy!).</h3>
                            <br>
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">I was inspired by <a class="dot_links" href="http://www.dvwa.co.uk" target="_blank">DVWA</a> and i built a very similar but much basic and simpler app. Initial release of DOT comes with a mixture of basic,
                                medium & high challenges taken from various platform.</h3>
                        </div>
                        <div class="dot_blank dot_mt_2">
                            <?php pushDOTMessageWarning("DOT is an OpenSource project. All rights reserved 0x5a.");?>
                        </div>
                    </div>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">Links</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">Developer: <a href="https://0x5a0x5a.github.io/" class="dot_links">I'm right here</a></h3>
                        <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">DOT Home Page: <a href="https://0x5a0x5a.github.io/dot/" class="dot_links">Woop</a></h3>
                    </div>
                </div>

                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">License</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">
                                <pre>
                                <DOT - A Vuln Web App>
Copyright (C) 2020 - 0x5a

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <a class="dot_links" href="https://www.gnu.org/licenses/" target="_blank">here</a>.
                            </pre>
                            </h3>
                         </div>
                    </div>
                </div>  
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">Development</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">Contributions are welcome, feel free to make changes/add more levels to DOT. Pick an issue or submit a patch to get started. If you liked my mini project mail me <a href="mailto:lekidnextdoor@protonmail.ch" class="dot_links">here</a>.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
          dotRequestScriptFile("./assets/script/","jqueryVx=3.2.1.min.js");
          dotRequestScriptFile("./assets/script/","dot_appv1.js");
    ?>
</body>

</html>