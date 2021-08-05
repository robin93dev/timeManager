<?php
file_put_contents('diaryLog/'.$_POST['title'],$_POST['description']);
header('Location: ./diary.php?id='.$_POST['title']);
?>