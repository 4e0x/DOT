<?php 
   include '../../global/dotGlobal_config.inc.php';
?>
<body class="dot_dashboard app-darkmode" id="dot_dashboard">
  <div class="dot_mb_2">
    <h2 class="body_title_sub dot_white font_monts has_icon dot_mb_1">Parameter Tampering Challenge</h2>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">The Web Parameter Tampering attack is based on the manipulation of parameters exchanged between client and server in order to modify application data,
    such as user credentials and permissions, price and quantity of products, etc. Usually, this information is stored in cookies, hidden form fields, or URL Query Strings, and is used to increase application functionality and control.</h3>
    <br>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">This particular challenge is based on the hidden form fields challenge.</h3>
  </div>
  <div class="">
    <h2 class="body_title_sub dot_white font_monts has_icon dot_mb_1">Objective</h2>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4 dot_mb_2">Cast 500 votes in one shot. <br> It's pretty easy just like the previous challenge, do not scroll down!</h3>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4 dot_mb_1">
      <?php 
          for($i=0;$i<8;$i++){
            echo "No Hint<br>";
          }
      ?>
    </h3>
    <?php 
          pushDotMessageInfo("Alright you scrolled down. <br> Something to do with the select box maybe?");
    ?>
    </div>
</body>