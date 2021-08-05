<?php
require('view/top.php');
?>


<article>
  
    <div class="form">
      <form action="diary_update_process.php" method="POST">
            <input type="hidden" name="oldTitle" value="<?php echo $_GET['id']?>">
            <p><input type="text" name="newTitle" placeholder='Title' value="<?php echo $_GET['id']?>"></p>
            <p><textarea name="description"> <?php echo file_get_contents('diaryLog/'.$_GET['id']) ?></textarea></p>
            <p><input type="submit"></p>
            </form>
    </div>

  <!--본문-->
     
</article>

<?php
require('view/bottom.php');
?>