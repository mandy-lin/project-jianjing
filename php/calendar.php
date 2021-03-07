<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$servername = "localhost";
$username = "root";
$password = "";
$mysqlname = "gtest";

$json = '';
$data = array();

class User
{
/*
public $j_no;
public $price_no;
public $c_name;
public $j_status;
public $j_start_date;
public $j_comp_date;*/

public $title;
public $start;
public $end;
public $url;
public $color;
public $textColor;



}

// 建立連線
$con = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_query($con,"set character set 'utf8'");//讀庫 
mysqli_query($con,"set names 'utf8'");//寫庫 
$sql = "SELECT j.j_no,j.price_no,c_name,j_status,j_type,j_start_date,j_comp_date FROM `job` j join quote q on(j.price_no=q.price_no) join client c on (q.c_no=c.c_no)
";

$sql2 = "SELECT DISTINCT m_date,m_status,c_name FROM `maintain` m join quote q on(m.price_no=q.price_no) join client c on(q.c_no=c.c_no) where m_status='需保養'";


$result = $con->query($sql);
$result2 = $con->query($sql2);

if($result){
//echo "查詢成功";

while ($row = mysqli_fetch_array($result))
{
$user = new User();

$user->title = $row["c_name"].$row["j_status"].$row["j_type"];
$user->start = $row["j_start_date"];
$user->end = $row["j_comp_date"];
$user->url = 'job_detail.php?id='.$row["j_no"];
if ($row["j_status"]=='已完成'){
$user->color ='lightBlue';
$user->textColor= 'black';
$user->url = 'job_finished_detail.php?id='.$row["j_no"];
}


$data[]=$user;
}
while ($rows = mysqli_fetch_array($result2))
{
$user = new User();
$user->title = $rows["c_name"].''.$rows["m_status"];
$user->start = $rows["m_date"];
//$user->url = 'job_detail.php?id='.$row["j_no"];
//if ($row["j_status"]=='已完成'){
$user->color ='#9999cc';
$user->textColor= '#fff';
$user->url = 'maintain.php';
//}


$data[]=$user;
}

$json = json_encode($data,JSON_UNESCAPED_UNICODE);//把資料轉換為JSON資料.
echo $json;
}else{
echo "查詢失敗";
}

?>