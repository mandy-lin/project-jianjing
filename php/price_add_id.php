<?php
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");
//mysqli_query($con,"set names utf8");
if(isset($_POST['type'])){
 
$type=$_POST['type'];
$p_device=$_POST['p_device'];
$drive = $_POST['drive'];
$transmission = $_POST['transmission'];
$roll = $_POST['roll'];
 
$query=mysqli_query($con,"select p_price,p_no from produce where p_name like '$type' 
 and p_device like '$p_device' 
 and p_drive like '$drive' 
 and p_trans like '$transmission' 
 and p_rotary like '$roll' 
 "); 

if(!$query){
 
      echo("Error: ".mysqli_error($con));
      exit();
}

while($row=mysqli_fetch_array($query)){


date_default_timezone_set("Asia/Shanghai");
$dnum=substr(date("ymdHis"),6,13);
//echo $dnum;
//setcookie("pid[$dnum]", $row['p_no'], time()+30);

echo $row['p_no'];
return;


}
//print_r($a);
};

?>