<?php
    
    //從資料庫取得圖片
$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");                     mysqli_query($con,"set names utf8");
include('connect.php');
//mysqli_query($con,"set names utf8");
$id=$_GET["id"];
$sql=mysqli_query($con,"select c_localimg from client where c_no = $id");   
while($rs=mysqli_fetch_array($sql)){
//header("Content-type: image/jpeg"); 
echo "<img src='../img/".$rs["c_localimg"]."'>";
echo $rs["c_localimg"];
//echo $rs["c_localimg"];
}
//$data=mysql_fetch_array($sql);
    //顯示圖片
//header("Content-type: image/jpeg"); 

//$base64_string= explode(',', $sql);
//截取data:image/png;base64, 这个逗号后的字符
//$data=base64_decode($base64_string[1]);
//对截取后的字符使用base64_decode进行解码
//echo base64_decode($rs['c_localimg']);
//echo $data;   


?>