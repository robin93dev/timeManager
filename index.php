<?php
require('lib/print.php');
require('view/top.php');
?>







<article>
  <h2> <!--제목-->
    <?php
   print_title()
      ?></h2>
    

  <!--본문-->
      <?php
        echo 'main page';
            
        ?>
</article>

<?php
require('view/bottom.php');
?>