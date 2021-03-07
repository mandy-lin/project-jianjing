<?php
    
    //從資料庫取得圖片
$con=mysqli_connect("localhost","root","","gtest");                         
//mysqli_query($con,"set names utf8");
$id=$_GET["id"];
$sql=mysqli_query($con,"select c_sizeimg from client where c_no = $id");   
while($rs=mysqli_fetch_array($sql)){
//header("Content-type: image/jpeg"); 
echo "<img src='../img/".$rs["c_sizeimg"]."'>";
//echo "<img src=".$result[0]['path'].">";


//echo $rs["c_localimg"];

}


?>