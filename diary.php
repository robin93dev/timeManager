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
  <!-- 시계 -->
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

  
    <div class='CRUD'><a href="diary_create.php" id="create">Create</a>
    <!-- id가 있으면 update 나타남    -->
     <?php if(isset($_GET['id'])){ ?>
      <a href="diary_update.php?id=<?php echo  $_GET['id'] ?>" id="update">Update</a>
      <form action="diary_delete_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <input type="submit" value="Delete">
      </form>
      <?php } ?>
    </div>
    
    

  <!--본문-->
  <article>

      <?php
      if(!isset($_GET['id'])/*id가 없으면*/) {
        $list = scandir('./diaryLog');
          $i = 0;
          while($i < count($list) ){
            if($list[$i]!== '.'){
              if($list[$i] !== '..'){
                echo "<li><a href=\"diary.php?id=$list[$i]\">$list[$i]</a></li>\n";
                // echo file_get_contents("diaryLog/$list[$i]");
              }
            }
            $i=$i+1;
          };
          // id가 있으면
        } else { 
          echo 'title : '.$_GET['id'].'<br>';
          echo 'description : '.file_get_contents('diaryLog/'.$_GET['id']);
        }
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