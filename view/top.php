

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
  <div class="setting">
    <div id="currentTime">Today)
      <?php
      //현재 시간을 출력할수 있는 함수? 단, timezone을 세팅해주어야 한다
       date_default_timezone_set('Asia/Seoul');
       echo date("Y-m-d");
      ?>
      <span id="time"></span>
      <button id="nightDay">야간모드</button>
    </div>
  </div>

  <header>
    <h1><a href="index.php?">ManageMySelf</a></h1>
  </header>
<br>
<nav>
  <ul>
    <li><a href="diary.php?">일기장</a></li>
    <li><a href="index.php?id=TimeManage">시간관리</a></li>
  </ul>
</nav>



