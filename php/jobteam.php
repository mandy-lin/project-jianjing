<?php
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
include('connect.php');

  $jt_no=$_POST['jt_no'];
  $data4=mysqli_query($con,"select * from job_team where jt_no=$jt_no");
  while($rs3 = mysqli_fetch_array($data4)){
    $team_name=$rs3['jt_team'];
    $team_phone=$rs3['jt_teamphone'];
    $team_leader=$rs3['jt_teamleader'];
    echo $team_name.",".$team_phone.",".$team_leader;
    
  }

?>
