<?php
$conn = mysqli_connect('localhost', 'root', 'foaldks102', 'timemanage');
$sql = "UPDATE topic SET title='{$_POST['title']}',description='{$_POST['description']}' WHERE id={$_POST['id']}";
$result = mysqli_query($conn, $sql);
header('Location: ./diary.php?id='.$_POST['id']);
?>  