<?php 
   include '../../global/dotGlobal_config.inc.php';
?>
<body class="dot_dashboard app-darkmode" id="dot_dashboard">
  <div class="dot_mb_2">
    <h2 class="body_title_sub dot_white font_monts has_icon dot_mb_1">Related Links</h2>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("OWASP: <a class='dot_links' href='https://owasp.org/www-community/attacks/Web_Parameter_Tampering' target='_blank'>Web Paramter Tampering</a>");
      ?>
    </div>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("IMPERVA: <a class='dot_links' href='https://www.imperva.com/learn/application-security/parameter-tampering/' target='_blank'>Paramter Tampering</a>");
      ?>
    </div>
    <div class="dot_mb_2">
      <?php 
        pushDotMessageSuccess("FORTINET: <a class='dot_links' href='https://help.fortinet.com/fweb/582/Content/FortiWeb/fortiweb-admin/prevent_tampering.htm' target='_blank'>Preventing tampering with hidden inputs</a>");
      ?>
    </div>
  </div>
</body>