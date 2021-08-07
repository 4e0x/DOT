<?php 
   session_start();
   
   include '../../global/dotGlobal_config.inc.php';
   include '../../config/config.inc.php';

   if(!isset($_SESSION['dot-current-user'])){
    dotDoRedirect("../../login.php");
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
    <title>JavaScript Basic Challenge | DOT APP v
        <?php getCurrentDotVersion();?>
    </title>
    <meta name="description" content="A very basic Vulnerable Web Application built on PHP/MySQL, to train beginners/to get started with basic Web App Attacks/Common misconfigurations.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/dot_appv1.css">
	<link rel="icon" type="image/ico" href="../../favicon.ico">
  
</head>

<body class="dot_dashboard app-darkmode" id="dot_dashboard">
    <div class="root_wrapper">
        <div class="dot_app_root font_mono">
            <aside class="dot_sidebar">
                <div class="dot_header_logo">
                    <a href="./">
                        <img src="../../assets/images/logo.png" class="dot_logo">
                    </a>
                </div>
                <ul class="dot_options ul_nostyle">
                    <li class="dot_opt">
                        <a class="dot_menu dot_white " href="../../index.php">
						Dashboard
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="../../setup.php">
						Setup
					</a>
                    </li>
                </ul>
                <span class="dot_f14 font_mono pd_5_1 dot_color_default dot_mb_1">Challenges/Learning</span>
                <ul class="dot_options ul_nostyle">
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="../basic/">
						Very Basic
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white dot_option_active" href="./">
						JavaScript Basic
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="../paramt1/">
						Parameter Tampering 1
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="../paramt2/">
						Parameter Tampering 2
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="../brute/">
						Brute Force
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="../sqlinjection/">
						SQL Injection
					</a>
                    </li>
                    <li class="dot_opt" id="crypt">
                        <a class="dot_menu dot_white">
						Cryptography
					</a>
                    <ul id="crypt_levels" class="dot_options dot_submenu">
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="../crypto/basic1/">
                                Basic 1
                                </a>
                            </li>
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="../crypto/basic2/">
                                Basic 2
                                </a>
                            </li>
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="../crypto/basic3/">
                                Basic 3
                                </a>
                            </li>
                            <li class="dot_opt">
                                <a class="dot_menu dot_white" href="../crypto/basic4/">
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
                                <a class="dot_menu dot_white" href="../stego/basic1/">
                                Basic 1
                                </a>
                            </li>
                            <li class="dot_opt">
                                <a class="dot_menu dot_white " href="../stego/basic2/">
                                Basic 2
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="dot_sidebar_footer">
                    <p class="font_mono dot_sfooter_text tt_center"><?php getDOTVersionRelease(); ?></p>
                </div>
            </aside>
            <div class="dot_main_body" style="height:100vh;overflow:scroll;">
                <div class="dot_page_status">
                    <h3 class="dotpage_title font_mono dot_white">
                        <div class="logo_small_devices f_l">
                        <svg id="sidebar_trigger" viewBox="0 0 20 20" preserveAspectRatio="xMidYMid meet" focusable="false" style="position: relative;fill: #fff;top: -4px;width: 20px;height: 20px;display: inline-block;"><g><path d="M2 4h16v2H2zM2 9h16v2H2zM2 14h16v2H2z"></path></g></svg>
                         
                            <img src="../../assets/images/logo.png" class="dotlogo_small_devices">
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
                                    <a class="dot_formbutton dotbtn_default dot_white font_mono dot_f15 " href="../../logout.php">
                                        LOGOUT
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </h3>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts">JavaScript Basic Challenge</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">This challenge is used to test code readability i.e your ability to read and understand the code.</h3>
                            <br>
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">PS: Lot of internal sites uses this kind of auth sometimes router logins too.</h3>
                        </div>
                        <div class="dot_mt_2"><?php pushDotMessageInfo("This challenge requires no hint")?></div>
                        <div class="dot_blank dot_mt_2 dot_mb_2">
                           <h2 class="body_title_sub dot_white font_monts has_icon">What's the password?</h2>
                        </div>
                    </div>
                </div>
                <div class="dot_blank">
                    <div class="dot_blank dot_dbsetup_form dpanel_50">
                        <div class="dot_panels no_style">
                           <div class="dot_formgroup">
                                <label class="dot_formlabel font_mono dot_white">Password</label>
                                <input type="password" class="dot_formblock " title="Enter password" name="lpass" id="lpass" required>
                            </div>   
                            <div class="dot_formgroup">
                                <button type="button" class="dot_formbutton dotbtn_default dot_white font_mono dot_f15" name="checkAuth" id="checkAuth" onclick="javascript:_0xCGj17(document.getElementById('lpass').value)">Login</button>
                            </div>
                        </div>
                        <div id="res_check">

                        </div>
                    </div>
                    
                    <script type="text/javascript">
                        // Source Hackthissite [https://www.hackthissite.org/missions/javascript/6/]
                        // Mod by 0x5a (DOT)

                        var _0x42f8 ="0x5a",
                        _0x369c = "auth",
                        _0x327f = "check",
                        _0x44Rs = document.getElementById('res_check');

                        function _0xCGj17(_0xPCS37)
                        {
                          if(_0xPCS37 == _0x42f8+" "+_0x327f)
                          {
                            _0x44Rs.innerHTML = "<?php pushDotMessageSuccess("Woaah, good one mate much more to go!<br> It's highly valuable to go through the website's source sometimes.");?>";
                            _0xPCS37.value = "";
                          } 
                          else 
                          {
                            _0x44Rs.innerHTML = "<?php pushDotMessageError("Naah. Are you sure about the script?");?>";  
                            _0xPCS37.value = "";   
                          }
                        }
                      </script>
                    <div id="dot_mt_2">
                        <?php 
                          pushDotMessageSuccess("Source: Hackthissite JS Mission 6 <a class='dot_links' href='https://www.hackthissite.org/missions/javascript/6/' target='_blank'>Right Here</a><br>Mod by 0x5a.")
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <?php 
          dotRequestScriptFile("../../assets/script/","jqueryVx=3.2.1.min.js");
          dotRequestScriptFile("../../assets/script/","dot_appv1.js");
    ?>
</body>

</html>