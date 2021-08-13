<?php
require('view/top.php');
?>

  
    <div class='CRUD'><a href="diary_create.php" id="create">Create</a>
    <!-- id가 있으면 update,delete 나타남    -->
     <?php if(isset($_GET['id'])){ ?>
      <!-- update-->
      <a href="diary_update.php?id=<?php echo  $_GET['id'] ?>" id="update">Update</a>
      <!-- delete-->
      <form action="diary_delete_process.php" method="post">
        <input type="hidden" name="hello" value="<?php echo $_GET['id']?>">
        <input type="submit" value="Delete">
      </form>
      <?php } ?>
    </div>
    
    

  <!--본문-->
  <article>
          <!-- list 출력 -->
      <?php
      if(!isset($_GET['id'])/*id가 없으면*/) {
        $list = scandir('./diaryLog');
          $i = 0;
          while($i < count($list) ){
            $title = htmlspecialchars($list[$i]);
            if($title !== '.'){
              if($title !== '..'){
                echo "<li><a href=\"diary.php?id=$title\">$title</a></li>";
                // echo file_get_contents("diaryLog/$list[$i]");
              }
            }
            $i=$i+1;
          };
          // id가 있으면
        } else { 
          echo htmlspecialchars('title : '.$_GET['id']); //XSS 방지
          ?><br>
          <?php
          echo htmlspecialchars('description : '.file_get_contents('diaryLog/'.$_GET['id'])); //XSS방지
        }
            ?>
</article>

<?php
require('view/bottom.php');
?>