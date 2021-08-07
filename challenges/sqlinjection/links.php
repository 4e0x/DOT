<?php 
   include '../../global/dotGlobal_config.inc.php';
?>
<body class="dot_dashboard app-darkmode" id="dot_dashboard">
  <div class="dot_mb_2">
    <h2 class="body_title_sub dot_white font_monts has_icon dot_mb_1">Related Links</h2>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("OWASP: <a class='dot_links' href='https://owasp.org/www-community/attacks/SQL_Injection' target='_blank'>SQL Injection</a>");
      ?>
    </div>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("IMPERVA: <a class='dot_links' hef='https://www.imperva.com/learn/application-security/sql-injection-sqli/' target='_blank'>What is SQL Injection</a>");
      ?>
    </div>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("PORTSWIGGER: <a class='dot_links' href='https://portswigger.net/web-security/sql-injection' target='_blank'>SQL Injection</a>");
      ?>
    </div>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("WIKI: <a class='dot_links' href='https://en.wikipedia.org/wiki/SQL_injection' target='_blank'>SQL Injection WIKI</a>");
      ?>
    </div>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("OWASP: <a class='dot_links' href='https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html' target='_blank'>SQL Injection Prevention Cheat Sheet</a>");
      ?>
    </div>
    <div class="dot_mb_2">
      <h3 class="font_mono dot_no_white dot_f14 l_h_1_4 dot_mb_1 dot_mt_2">
        <?php 
            for($i=0;$i<16;$i++){
              echo "CHEAT HERE<br>";
            }
        ?>
      </h3>
    </div>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("NETSPARKER: <a class='dot_links' href='https://www.netsparker.com/blog/web-security/sql-injection-cheat-sheet/' target='_blank'>SQL Injection Cheat Sheet</a>");
      ?>
    </div>
  </div>
</body>