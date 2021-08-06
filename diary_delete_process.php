<?php
unlink('diaryLog/'.$_POST['hello']);
header('Location: diary.php');
?>