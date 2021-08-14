<?php
require('view/top.php');
$conn = mysqli_connect('localhost', 'root', 'foaldks102', 'timemanage');
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  $list = $list."<li><a href=\"diary.php?id={$row['id']}\" > {$row['title']}</a></li>";
}

$update="";
$delete="";
$row['title']="";
$row['description']="";
$row['created']="";
?>

    
    <div class='CRUD'><a href="diary_create.php" id="create">Create</a>
    <!-- id가 있으면 update,delete 나타남    -->
     <?php if(isset($_GET['id'])){ 
        $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result); 
        $update = '<a href="diary_update.php?id='.$_GET['id'].'">update</a>';
        $delete = '<form action="diary_delete_process.php" method="post">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="delete">
        </form>';
        ?>
      <!-- update-->
     <?=$update?>
      <!-- delete-->
     <?=$delete?>
      <?php } ?>
    </div>
    
    

  <!--본문-->
  <article>
          <!-- list 출력 -->
      <?= $list?>

      
    <h1><?=$row['title']?></h1>
    <?=$row['description']?>
    <h6> <?=$row['created']?></h6>
    
     
      
   
</article>

<?php
require('view/bottom.php');
?>