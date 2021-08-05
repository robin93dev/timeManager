<?php
function print_title() {
  if(isset($_GET['id'])){
    echo $_GET['id'];}
    else {
      echo 'welcome';
    }
  
}
?>