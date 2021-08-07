<?php 
   session_start();
   
   require './global/dotGlobal_config.inc.php';
?>
<!DOCTYPE html>
<html lang="en" class="DOT_APP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
    <title>Instructions | DOT APP v
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
                        <a class="dot_menu dot_white dot_option_active" href="./instructions.php">
                          Instructions
                        </a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./about.php">
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
                        INSTRUCTIONS DOT APP v
                        <?php getCurrentDotVersion();?>
                    </h3>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">Instructions</h2>
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
                            <?php pushDotMessageWarning("DOT is a very small & basic app with a mixture of challenges & learning path. Feel free to contribute & make it better!");?>    
                        </div>
                    </div>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">Installation</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank dot_mb_2">
                            <?php pushDotMessageInfo(" You will not have to edit any files to setup DOT. Everything has been done for you in a easy install format. Just complete the setup and your done."); ?>
                          
                        </div>
                        <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">The best way to install DOT is through <a class="dot_links" href="https://www.apachefriends.org/en/xampp.html" target="_blank">XAMPP</a>. XAMPP is available for Linux, Windows & MacOS X. The distribution absolutely includes everything so you don't
                            have to worry about anything.</h3>
                    </div>
                </div>
 
                <div class="dot_body_titles">
                    <h2 class="body_title font_monts dot_white">Database</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">Database config on the go. Just fill the form with the correct credentials as requested and you are all set! You don't have to edit any file/variable to setup the DB.</h3>
                        </div>
                        <div class="dot_blank dot_mt_2">
                            <?php pushDotMessageWarning("If you are still facing any errors make sure to run the setup again and fill in the correct credentials for the DB.")?>
                        </div>
                    </div>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">Config</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">Requires some variables to be set to avoid any errors.</h3>
                        </div>
                        <div class="dot_blank dot_mt_2">
                            <?php pushDotMessageError("safe_mode should be turned off.
                                    <br>
                                    If running PHP v5.2.6 or above make sure to add these lines in your .htaccess file.
                                    <br><br>
                                    magic_quotes_gpc = Off<br>
                                    allow_url_fopen = On<br>
                                    allow_url_include = On");?>
                        </div>
                    </div>
                </div>
                <div class="dot_blank">
				<?php 
					if(phpversion() > 6){
					   pushDotMessageError("Your PHP version is ".phpversion().", PHP version below 6 is recommended to continue.");
				   }
				?>
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