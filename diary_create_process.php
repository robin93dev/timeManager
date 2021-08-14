<?php
$conn = mysqli_connect('localhost', 'root', 'foaldks102', 'timemanage');
$sql = "INSERT INTO topic (title, description, created) 
VALUES ('{$_POST['title']}','{$_POST['description']}', NOW())";
$result = mysqli_query($conn, $sql);
$sql = "SELECT * FROM topic where title = '{$_POST['title']}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
var_dump($row['id']);
header('location:diary.php?id='.$row['id'].'');

?>