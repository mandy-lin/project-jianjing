<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//$con=mysqli_connect("127.0.0.1","root","","gtest");//連結伺服器
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文 
include('connect.php');
if(!isset($_SESSION['username']) || ($_SESSION['username']=="")){

header("Location: index.php");

}


?>
<script language=javascript>
      //一段時間未執行,則系統登出
      //setTimeout(function(){ alert("Hello"); }, 9000);
      function Timeout(){
      window.open("logout.php","_top")
      }
      setTimeout('Timeout()', 10*60*60*1000);

</script>
