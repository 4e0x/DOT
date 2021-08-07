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
    <title>Parameter Tampering 1 Challenge | DOT APP v
        <?php getCurrentDotVersion();?>
    </title>
    <meta name="description" content="A very basic Vulnerable Web Application built on PHP/MySQL, to train beginners/to get started with basic Web App Attacks/Common misconfigurations.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/dot_appv1.css">
	<link rel="icon" type="image/ico" href="../../favicon.ico">
   
</head>

<body class="dot_dashboard app-darkmode" id="dot_dashboard">
    <?php 
        dotDrawModalWindow("show_help","./help.php");
        dotDrawModalWindow("show_links","./links.php"); 
    ?>
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
                        <a class="dot_menu dot_white " href="../basic/">
						Very Basic
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="../javascript/">
						JavaScript Basic
					</a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white dot_option_active" href="./">
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
                    <h2 class="body_title dot_white font_monts">Parameter Tampering Challenge 1</h2>
                </div>
                <div class="dot_blank">
                    <div class="">
                        <div class="dot_blank">
                            <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">This is a bit basic challenge again. Please do look into it.
                            <br>
                            Most websites have such kind of vulnerability, some that don't give out sensitive information.
                            <br>
                            This challenge can be completed in many ways but exploit it here without any tools.</h3>
                        </div>
                       
                        <div class="dot_blank dot_mt_2 dot_mb_2">
                           <h2 class="body_title_sub dot_white font_monts has_icon">The total price should be ₹100 after checking out.</h2>
                        </div>
                    </div>
                </div>
                <div class="dot_blank">
                    <div class="dot_blank dot_dbsetup_form dpanel_50">
                        <form class="dot_panels no_style" action="#" method="POST">
                            <input type="hidden" id="checkoutprice" name="checkoutprice" value="1200">
                            <div class="dot_formgroup">
                            <table class="dot_table dot_white">
                                <tbody>
                                        <tr>
                                            <td>Item</td>
                                            <td>Price</td>
                                            <td>Quantity</td>
                                            <td>Total</td>
                                        </tr>
                                        <tr>
                                            <td class="dot_bold">
                                                Chair
                                            </td> 
                                            <td class="dot_bold">
                                            ₹1200
                                            </td> 
                                            <td class="dot_bold">
                                                1
                                            </td> 
                                            <td class="dot_bold">
                                            ₹1200
                                            </td>
                                        </tr>
                                       
                                </tbody>
                            </table>
                            </div>   
                            <div class="dot_formgroup">
                                <button class="dot_formbutton dotbtn_default dot_white font_mono dot_f15" name="checkout" id="checkout">Checkout</button>
                            </div>
                        </form>
                        <?php 
                             if(isset($_POST['checkout'])){
                                 
                                // Get the total price from the hidden field
                                $total_checkout_price = $_POST['checkoutprice'];

                                // Actual price after checkout
                                $actual_checkout_price = 100;
                            
                                if($total_checkout_price == $actual_checkout_price){
                                    pushDotMessageSuccess("Woop! Total Price after checkout was ₹100.<br>Click on related links to learn more about this vulnerability.");
                                }
                                else{    
                                    pushDotMessageError("Uh Oh! The Total Price after checkout was not ₹100, try again or<br>click on help to get an idea.");
                                }
                            }
                        
                        ?>
                    </div>
                    <div class="dot_mt_2 dot_help_options f_r">
                        <div class="dot_form_group">
                            <button id="modal_help" class="dot_formbutton dotbtn_helpers dot_white font_mono dot_f15">Help</button>
                            <button id="modal_links" class="dot_formbutton dotbtn_helpers dot_white font_mono dot_f15">Related Links</button>
                        </div>
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