<?php
require('view/top.php');
?>

  
    <div class='CRUD'><a href="diary_create.php" id="create">Create</a>
    <!-- id가 있으면 update 나타남    -->
     <?php if(isset($_GET['id'])){ ?>
      <a href="diary_update.php?id=<?php echo  $_GET['id'] ?>" id="update">Update</a>
      <form action="diary_delete_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <input type="submit" value="Delete">
      </form>
      <?php } ?>
    </div>
    
    

  <!--본문-->
  <article>

      <?php
      if(!isset($_GET['id'])/*id가 없으면*/) {
        $list = scandir('./diaryLog');
          $i = 0;
          while($i < count($list) ){
            if($list[$i]!== '.'){
              if($list[$i] !== '..'){
                echo "<li><a href=\"diary.php?id=$list[$i]\">$list[$i]</a></li>\n";
                // echo file_get_contents("diaryLog/$list[$i]");
              }
            }
            $i=$i+1;
          };
          // id가 있으면
        } else { 
          echo 'title : '.$_GET['id'].'<br>';
          echo 'description : '.file_get_contents('diaryLog/'.$_GET['id']);
        }
            ?>
</article>

<?php
require('view/bottom.php');
?>