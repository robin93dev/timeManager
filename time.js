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