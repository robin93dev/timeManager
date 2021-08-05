<?php
rename('diaryLog/'.$_POST['oldTitle'], 'diaryLog/'.$_POST['newTitle']);
file_put_contents('diaryLog/'.$_POST['newTitle'],$_POST['description']);
header('Location: ./diary.php?id='.$_POST['newTitle']);
?>