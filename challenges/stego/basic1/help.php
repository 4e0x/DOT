<?php 
   include '../../../global/dotGlobal_config.inc.php';
?>
<body class="dot_dashboard app-darkmode" id="dot_dashboard">
  <div class="dot_mb_2">
    <h2 class="body_title_sub dot_white font_monts has_icon dot_mb_1">What is Steganography</h2>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">Steganography (/ˌstɛɡəˈnɒɡrəfi/ STEG-ə-NOG-rə-fee) is the practice of concealing a file, message, image, or video within another file, message, image, or video. The word steganography comes from New Latin steganographia, which combines the Greek words steganós (στεγανός), meaning "covered or concealed", and -graphia (γραφή) meaning "writing". - wiki</h3>
  </div>
  <div class="">
    <h2 class="body_title_sub dot_white font_monts has_icon dot_mb_1">Objective</h2>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4 dot_mb_2">Find the hidden text</h3>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4 dot_mb_1">
      <?php 
          for($i=0;$i<12;$i++){
            echo "<em>Reading Data...</em><br>";
          }
      ?>
    </h3>
    <?php 
          pushDotMessageInfo("Amazing list of tools <a class='dot_links' href='https://0xrick.github.io/lists/stego/' target='_blank'>0XRICK</a>.");
    ?>
    </div>
</body>