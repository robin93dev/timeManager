<?php
$conn = mysqli_connect('localhost', 'root', 'foaldks102', 'timemanage');
$sql = "DELETE  FROM topic WHERE id={$_POST['id']}";
$result = mysqli_query($conn, $sql);
header('location:diary.php');
?>