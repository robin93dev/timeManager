<?php
require('view/top.php');
$conn = mysqli_connect('localhost', 'root', 'foaldks102', 'timemanage');
$sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result); 
?>


<article>
    <!-- update-->
    <div class="form">
      <form action="diary_update_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            <p><input type="text" name="title" placeholder='Title' value="<?=$row['title']?>"></p>
            <p><textarea name="description">  <?=$row['description']?></textarea></p>
            <p><input type="submit"></p>
            </form>
    </div>

  <!--본문-->
     
</article>

<?php
require('view/bottom.php');
?>