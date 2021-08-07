<?php 
   include '../../../global/dotGlobal_config.inc.php';
?>
<body class="dot_dashboard app-darkmode" id="dot_dashboard">
  <div class="dot_mb_2">
    <h2 class="body_title_sub dot_white font_monts has_icon dot_mb_1">What is Cryptography</h2>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4">Cryptography, or cryptology (from Ancient Greek: κρυπτός, romanized: kryptós "hidden, secret"; and γράφειν graphein, "to write", or -λογία -logia, "study", respectively), is the practice and study of techniques for secure communication in the presence of third parties called adversaries. More generally, cryptography is about constructing and analyzing protocols that prevent third parties or the public from reading private messages; various aspects in information security such as data confidentiality, data integrity, authentication, and non-repudiation are central to modern cryptography. Modern cryptography exists at the intersection of the disciplines of mathematics, computer science, electrical engineering, communication science, and physics. Applications of cryptography include electronic commerce, chip-based payment cards, digital currencies, computer passwords, and military communications. - wiki</h3>
  </div>
  <div class="">
    <h2 class="body_title_sub dot_white font_monts has_icon dot_mb_1">Objective</h2>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4 dot_mb_2">Crack the word</h3>
    <h3 class="font_mono dot_no_white dot_f14 l_h_1_4 dot_mb_1">
      <?php 
          for($i=0;$i<12;$i++){
            echo "NO HINT, IM SORRY<br>";
          }
      ?>
    </h3>
    <?php 
          pushDotMessageInfo("    ");
    ?>
    </div>
</body>