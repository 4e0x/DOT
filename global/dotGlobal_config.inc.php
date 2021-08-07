<?php  

/**
 * DOT Global Config File
 * 
 *  Includes functions and variables used throughout the App.
 * 	!!!! DO NOT EDIT THIS, EDITING THIS WILL BREAK THE APP !!!!
 *  
 */
################################ DANGER ZONE ################################

// Get the current DOT App version
function getCurrentDotVersion() {
	echo "1.0";
}

// Get the version and release
function getDOTVersionRelease(){
	echo "<a href='https://0x5a0x5a.github.io/DOT/' class='dot_white' target='_blank'>Dot Web App v1.0 <br> Release Date(2020-05-18)</a>";
}


// Functions to display appropriate messages
function pushDotMessageSuccess($string){
	echo "<div class='dot_mt_2 dot_info dot_info_success dot_white font_mono'><div>".$string."</div></div>";
}
function pushDotMessageError($string){
	echo "<div class='dot_mt_2 dot_info dot_info_error dot_white font_mono'><div>".$string."</div></div>";
}
function pushDotMessageWarning($string){
	echo "<div class='dot_mt_2 dot_info dot_info_warning dot_white font_mono'><div>".$string."</div></div>";
}
function pushDotMessageInfo($string){
	echo "<div class='dot_info dot_info_info dot_white font_mono'><div>".$string."</div></div>";
}

// Function to redirect
function dotDoRedirect($page){
	header("Location: $page");
}

// logout function
function dotLogoutDO(){
	session_destroy();
}

// request javascript files
function dotRequestScriptFile($path,$file){
	echo "<script type='text/javascript' src=".$path.$file."></script>";
}

// check for php version
function checkPHPVersion(){
	if(phpversion() > 6){
		pushDotMessageError("Your PHP version is ".phpversion().", a version below 6 is required to install DOT. Setup cannot continue");
	}
	else{
		pushDotMessageSuccess("Your PHP version is ".phpversion().". Everything looks good to me, fill the form below to complete your DB Setup.");
		echo "<div class=\"dot_blank dot_dbsetup_form dpanel_50 dot_mt_2\">
                    <form class=\"dot_panels no_style\" action=\"#\" method=\"POST\">
                        <div class=\"dot_formgroup\">
                            <label class=\"dot_formlabel font_mono dot_white\">DB Host</label>
                            <input type=\"text\" class=\"dot_formblock \" title=\"Enter your hostname eg:localhost\" required value=\"localhost\" name=\"dbhost\" id=\"dbhost\">
                        </div>
                        <div class=\"dot_formgroup\">
                            <label class=\"dot_formlabel font_mono dot_white\">DB Username</label>
                            <input type=\"text\" class=\"dot_formblock \" title=\"Enter your database username eg:root\" required name=\"dbuser\" id=\"dbuser\">
                        </div>
                        <div class=\"dot_formgroup\">
                            <label class=\"dot_formlabel font_mono dot_white\">DB Password</label>
                            <input type=\"text\" class=\"dot_formblock\" title=\"Enter your database password eg:admin/root\" name=\"dbpass\" id=\"dbpass\">
                        </div>   
                        <input type=\"hidden\" style=\"display:none!important;\"value=\"dot\" name=\"dbname\" id=\"dbname\">
                        <div class=\"dot_formgroup\">
                            <button class=\"dot_formbutton dotbtn_default dot_white font_mono dot_f15\" name=\"setupDB\" id=\"setupDB\">Create/Reset</button>
                        </div>
                    </form>
                </div>";
	}
}

// draw a Modal Window
function dotDrawModalWindow($id,$file){
		echo "<div id=".$id." class=\"dot_modalOverlay\" style=\"z-index:1200000\">
		<div id=parent_".$id." class=\"dot_modal\">
				<div id=\"dotmodal_".$id."_close\" class=\"tt_right\" style=\"padding:.5em;cursor:pointer\">
						<svg aria-hidden=\"true\" class=\"svg-icon iconClear\" width=\"20\" height=\"20\" viewBox=\"0 0 18 18\" style=\"fill: #fff;\">
								<path d=\"M15 4.41L13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9 15 4.41z\"></path>
						</svg>
				</div>
				<div id=\"".$id."dotmodal_content\" data-href=".$file.">

				</div>
				</div>
		</div>";
}


// Perform some preinstall checks just in case
function getPreInstallChecks(){

	// Required Setup Functions
	//Sessions check - not required
	$_SESSION['dot_sessions_suport']=1;
	$DOT_sessionSupport =  '<label class="' . ((empty($_SESSION['dot_sessions_suport'])) ? 'dot_badge dbadge_failed"> NO SUPPORT' : 'dot_badge dbadge_success"> SUPPORTED'). '</label>';
	// Safe mode is depricated as of 5.3
	$SafeMode_Status      = '<label class="' . ( ini_get( 'safe_mode' )  ? 'dot_badge dbadge_failed">Enabled' : 'dot_badge dbadge_success">Disabled' ) . '</label>';
	$Host_OS          = ( strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? 'Windows' : '*nix' );
	$DBMS = "MySQL";
	$Server_Name      = $_SERVER[ 'SERVER_NAME' ];
	$PHP_version = '<label class="' . ((phpversion() > 6) ? 'dot_badge dbadge_failed">'.phpversion() :  'dot_badge dbadge_success">'.phpversion()). '</label>';
	
	//	return back the HTML 
	echo "<div class=\"dot_panels dotsetup_check dpanel_50 dp_04\">
	<table class=\"dot_table dot_white\">
			<tbody>
					<tr>
							<td>Server</td>
							<td class=\"dot_bold\">
									$Server_Name
							</td>
					</tr>
					<tr>
							<td>Backend DB</td>
							<td class=\"dot_bold\">
									$DBMS
							</td>
					</tr>
					<tr>
							<td class=\"hr\">Host OS</td>
							<td class=\"dot_bold\">
									$Host_OS
							</td>
					</tr>
	</table>
	</div>
	<div class=\"dot_panels dotsetup_check dpanel_50\">
	<table class=\"dot_table dot_white\">
			<tbody>
					<tr>
							<td>Safe Mode</td>
							<td class=\"dot_bold\">
									$SafeMode_Status
							</td>
					</tr>
					<tr>
							<td class=\"hr\">PHP Version</td>
							<td class=\"dot_bold\">
								$PHP_version
							</td>
					</tr>
					<tr> 
							<td>Session Support</td>
							<td class=\"dot_bold\">
								$DOT_sessionSupport
							</td>
					</tr>
	</table>
	</div>";
}

?>