<?php 
   session_start();
   
   require './global/dotGlobal_config.inc.php';
   require './config/config.inc.php';

   if(!isset($_SESSION['dot-current-user'])){
          dotDoRedirect("./login.php");
   }
   else{
    function getCurrentDotUser(){
        echo $_SESSION['dot-current-user'];
    }
    $dot_connection = mysql_connect($DOT_DBHOST, $DOT_DBUSER, $DOT_DBPASS);
    $dot_database = mysql_select_db($DOT_DBNAME);
    $dot_app_status = "dot_configured";
   }
?>
<!DOCTYPE html>
<html lang="en" class="DOT_APP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
    <title>Dashboard | DOT APP v
        <?php getCurrentDotVersion();?>
    </title>
    <meta name="description" content="A very basic Vulnerable Web Application built on PHP/MySQL, to train beginners/to get started with basic Web App Attacks/Common misconfigurations.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="./assets/css/dot_appv1.css">
	<link rel="icon" type="image/ico" href="./favicon.ico">
</head>

<body class="dot_dashboard app-darkmode" id="dot_dashboard">
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
                        <a class="dot_menu dot_white dot_option_active" href="./index.php">
						Dashboard
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./setup.php">
						Setup
					</a>
                    </li>
                </ul>
                <span class="dot_f14 font_mono pd_5_1 dot_color_default dot_mb_1">Challenges/Learning</span>
                <ul class="dot_options ul_nostyle">
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./challenges/basic/">
						Very Basic
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./challenges/javascript/">
						JavaScript Basic
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./challenges/paramt1/">
						Parameter Tampering 1
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./challenges/paramt2/">
						Parameter Tampering 2
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./challenges/brute/">
						Brute Force
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./challenges/sqlinjection/">
						SQL Injection
					</a>
                    </li>
                    <li class="dot_opt" id="crypt">
                        <a class="dot_menu dot_white">
						Cryptography
					</a>
                    <ul id="crypt_levels" class="dot_options dot_submenu">
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="./challenges/crypto/basic1/">
                                Basic 1
                                </a>
                            </li>
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="./challenges/crypto/basic2/">
                                Basic 2
                                </a>
                            </li>
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="./challenges/crypto/basic3/">
                                Basic 3
                                </a>
                            </li>
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="./challenges/crypto/basic4/">
                                Basic 4
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="dot_opt" id="stego">
                        <a class="dot_menu dot_white">
						Stegnography
					</a>
                    <ul id="stego_levels" class="dot_options dot_submenu">
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="./challenges/stego/basic1/">
                                Basic 1
                                </a>
                            </li>
                            <li class="dot_opt">
                                <a class="dot_menu dot_white " href="./challenges/stego/basic2/">
                                Basic 2
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                    </li>
                </ul>
                <div class="dot_sidebar_footer">
                    <p class="font_mono dot_sfooter_text tt_center"><?php getDOTVersionRelease(); ?></p>
                </div>
            </aside>
            <div class="dot_main_body">
                <div class="dot_page_status">
                    <h3 class="dotpage_title font_mono dot_white">
                        <div class="logo_small_devices f_l">
                        <svg id="sidebar_trigger" viewBox="0 0 20 20" preserveAspectRatio="xMidYMid meet" focusable="false" style="position: relative;fill: #fff;top: -4px;width: 20px;height: 20px;display: inline-block;"><g><path d="M2 4h16v2H2zM2 9h16v2H2zM2 14h16v2H2z"></path></g></svg>
                         
                            <img src="./assets/images/logo.png" class="dotlogo_small_devices">
                        </div>
                        <div class="dot_user f_r"> 
                                    <span class="dot_username dot_f16"><?php getCurrentDotUser(); ?></span>
                                        <span class="dot_user_circle">
                                            <span class="dotuser_circle_text font_mono dot_white">X</span>
                                    </span>
                            <ul class="dot_drops dot_f16 font_mono dot_white ">
                                <li class="dot_opts opts_p1 opts_bb">
                                    Logged in as: <span class="dot_username dot_f16"><?php getCurrentDotUser(); ?></span>
                                </li>
                                <li class="dot_opts tt_center opts_p1">
                                    <a class="dot_formbutton dotbtn_default dot_white font_mono dot_f15 " href="./logout.php">
                                        LOGOUT
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </h3>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">Welcome to DOT Web App</h2>
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
                            <?php pushDotMessageWarning(" DOT is a very small & basic app with a mixture of challenges & learning path. Feel free to contribute & make it better!"); ?>
                        </div>
                    </div>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">Challenges</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">Few challenges are very easy and some require you to think (ps: not breaking your head). There is no fixed way to complete the challenges it all depends on you and you only. If you are good at Cryptography go ahead and complete
                                that first. The only aim is to give you an insight on how different attacks work or just to get you hyped on challenges. </h3>
                            <div class="dot_blank dot_mt_2">
                                <?php pushDotMessageInfo("If you feel stuck do not despair. There is a help button and related links button to show you what's actually happening/how to prevent it."); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title font_monts dot_error">WARNING!!</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">DOT is damn vulnerable. Please do not expose it to the internet. It is recommended to host it internally if you are training/hosting a competition using DOT. If you are looking for a web server download <a href="https://www.apachefriends.org/index.html"
                                    target="_blank" class="dot_links">XAMPP</a>.</h3>
                        </div>
                    </div>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">Disclaimer</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">DOT challenges/learning paths are taken from various sources few challenges belong to DOT (made by me), few others are from other sources. Affiliated/Related links are given below each challenge/learning page.</h3>
                        </div>
                        <div class="dot_blank dot_mt_2">
                            <?php pushDotMessageError(" I do not take responsibility for any damage caused by DOT. This was built for a purpose and should adhere to the specific. If your public web server is compromised it is not my responsibility, it simply means you have skipped the <label class='dot_badge dbadge_failed'>WARNING</label> Part."); ?>
                        </div>
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
DOT - A Vuln Web App
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
            </div>
        </div>
    </div>
    <?php 
          dotRequestScriptFile("./assets/script/","jqueryVx=3.2.1.min.js");
          dotRequestScriptFile("./assets/script/","dot_appv1.js");
    ?>
</body>

</html>