<?php
require('view/top.php');
?>

<article>
  
    <div class="form">
      <form action="diary_create_process.php" method="POST">
            <p><input type="text" name="title" placeholder='Title'></p>
            <p><textarea name="description"  rows="10" cols="100" placeholder="description"></textarea></p>
            <p><input type="submit"></p>
            </form>
    </div>

 
     
</article>

<?php
require('view/bottom.php');
?>