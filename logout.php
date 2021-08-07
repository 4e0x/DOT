<?php 
    session_start();
   
    require './global/dotGlobal_config.inc.php';
    require './config/config.inc.php';
    dotLogoutDO();
    dotDoRedirect("./index.php");
?>