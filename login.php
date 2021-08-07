<?php 
   session_start();

   require './global/dotGlobal_config.inc.php';
   require './config/config.inc.php';
   
   // Check PHP Version -- imp
   if(phpversion() > 6){
    dotDoRedirect("./setup.php?php_version=".phpversion()."?failed");
   }
   
   $setup_error = "";

   if( !@mysql_connect($DOT_DBHOST, $DOT_DBUSER, $DOT_DBPASS)) {
        $setup_error = "dot_restrict";
		pushDotMessageError("Looks like you did not setup DOT. Please click <a class='dot_links' href='./setup.php?c=1'>here</a> to configure.");                
    }
    else{
        $setup_error = "dot_configured";
        $dot_connection = mysql_connect($DOT_DBHOST, $DOT_DBUSER, $DOT_DBPASS);
        $dot_database = mysql_select_db($DOT_DBNAME);
    }
   
?>
<!DOCTYPE html>
<html lang="en" class="DOT_APP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
    <title>Login | DOT APP v
        <?php getCurrentDotVersion();?>
    </title>
    <meta name="description" content="A very basic Vulnerable Web Application built on PHP/MySQL, to train beginners/to get started with basic Web App Attacks/Common misconfigurations.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="./assets/css/dot_appv1.css">
	<link rel="icon" type="image/ico" href="./favicon.ico">
</head>

<body class="dotauth  dot_app_root font_mono" id="login-auth">
    <div class="root_wrapper">
        <div class="dot_mt_6 form_wrapper">
            <div class="dot_blank dot_auth_form dpanel_50 dpanel_mar_auto"> 
            <form class="dot_panels no_style <?php echo $setup_error; ?>" action="" method="POST">
             <div class="tt_center dot_mb_2">
             <img src="./assets/images/logo.png" class="dot_logo">
                    </div>
                    <div class="dot_formgroup">
                        <label class="dot_formlabel font_mono dot_white">Username</label>
                        <input type="text" class="dot_formblock " title="Enter your username" required name="uname" id="uname">
                    </div>
                    <div class="dot_formgroup">
                        <label class="dot_formlabel font_mono dot_white">Password</label>
                        <input type="password" class="dot_formblock " title="Enter your password" required name="upass" id="upass">
                    </div>
                    <div class="dot_formgroup tt_center dot_mb_2">
                        <button class="dot_formbutton dotbtn_default dot_white font_mono dot_f15" name="login" id="login">Login</button>
                    </div>
            
               
                </form>
                <?php 
                    if(isset($_POST['login'])){

                        $dot_user = $_POST['uname'];
                        $dot_user = stripslashes($dot_user);
                        $dot_user = mysql_real_escape_string($dot_user);

                        $dot_pass = $_POST['upass'];
                        $dot_pass = stripslashes($dot_pass);
                        $dot_pass = mysql_real_escape_string($dot_pass);
                        $dot_pass = md5($dot_pass);
                        
                        // A very basic way of auth
                        $dot_login  = "SELECT * FROM `users` WHERE `username`='$dot_user' AND `password`='$dot_pass'";
                        $dot_login_status = @mysql_query($dot_login) or die('<div class="dot_mt_2 dot_info dot_info_error dot_white font_mono"><div>' . mysql_error() . '.<br />Try <a class="dot_links" href="./setup.php">installing again</a>.</div></div>' );
                        $dot_user_rows = mysql_fetch_array($dot_login_status);

                        if($dot_user_rows['username'] == $dot_user && $dot_user_rows['password'] == $dot_pass){
                            $_SESSION['dot-current-user'] = $dot_user_rows['username'];
                            dotDoRedirect("./index.php");
                        }
                        else{
                            pushDotMessageError("Login Failed. Check back credentials.");
                        }
                    }
                    
                ?>
                       
            </div>
        </div>
    </div>
    <div class="dot_footer">
        <p class="font_mono dot_white dot_sfooter_text tt_center"><?php getDOTVersionRelease();?>, an OpenSource project</p>
    </div>
</body>

</html>