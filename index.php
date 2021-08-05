<?php
function print_title() {
  if(isset($_GET['id'])){
    echo $_GET['id'];}
    else {
      echo 'welcome';
    }
  
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
 
</head>
<body>
  <div id="currentTime">Today)
    <?php
    //현재 시간을 출력할수 있는 함수? 단, timezone을 세팅해주어야 한다
     date_default_timezone_set('Asia/Seoul');
     echo date("Y-m-d");
    ?>
    <span id="time"></span>
  </div>

  <header>
    <h1><a href="index.php?">ManageMySelf</a></h1>
  </header>

<nav>
  <ul>
    <li><a href="diary.php?">일기장</a></li>
    <li><a href="index.php?id=TimeManage">시간관리</a></li>
  </ul>
</nav>

<article>
  <h2> <!--제목-->
    <?php
   print_title()
      ?></h2>
    

  <!--본문-->
      <?php
        echo 'main page';
            
        ?>
</article>

<footer>
  Reserved by robin
</footer>



<script>
  //시계를 표현해주는 함수
  var $time = document.getElementById('time');
 
  
  
  function time() {
    var d = new Date();
    var s = d.getSeconds();
    var m = d.getMinutes();
    var h = d.getHours();
    $time.textContent =
      ("0" + h).substr(-2) + "시" + ("0" + m).substr(-2) + "분" + ("0" + s).substr(-2)+"초";
     
  }
  
  setInterval(time, 1000);
</script>

</body>
</html>