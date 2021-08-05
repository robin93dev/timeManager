<?php
unlink('diaryLog/'.$_POST['id']);
header('Location: diary.php');
?>