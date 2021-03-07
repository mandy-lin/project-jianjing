<?php
include("login_connect.php");
if(isset($_POST['insert'])){
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

$team="INSERT INTO `job_team`(`jt_team`, `jt_teamleader`, `jt_teamphone`) VALUES ('$_POST[jt_team]','$_POST[jt_teamleader]','$_POST[jt_teamphone]')";

$result = mysqli_query($con,$team);
//if($result){echo 'insert';}else{ echo 'data nono'.mysqli_error($con);}
    
if( $result ){echo 'insert';echo "<script language=javascript>; 
location.href='job_teamadd.php';
</script>";}else{echo 'no'.mysqli_error($con);}  
//新增後跳轉
}

?>
<!--新增團隊-->
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/table-client.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="utf-8"> 
</head> 
<body> 

<?php include("home.php");?>
  <aside id="aside">
    <ul class="" onclick="location.href='homepage.php'">
        <i class="fa fa-calendar" aria-hidden="true"></i><span class="span">首頁</span>
    </ul>
    <ul class="" onclick="location.href='maintain.php'">
        <i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養</span>
    </ul>
          
    <ul class="" onclick="location.href='fix.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修</span></ul>
        <ul class="select">
        <li class="" onclick="location.href='job.php'"><span class="span">派工紀錄</span>
        </li>
        <li class="" onclick="location.href='job_finish.php'"><span class="span">派工歷史</span></li>
        <!--li class="select" onclick="location.href='job_teamadd.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">團隊管理</span></li-->
     </ul>
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span>
     </ul>
     <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span></ul>
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span>
     </ul>
     
  </aside>
<div id='content'>
<div class="card"> 
<div class="card-header"><h3>新增團隊資料</h3></div>
    <form id="teamnew" name="teamnew" method="post" action="job_teamnew.php" >
        <table name="team" class="table" cellspacing="0">
        <tr>
                <th>團隊名稱</th>
                <th><input type="text" name="jt_team" class="table-input"></th>
        </tr>
        <tr>
                <th>負責人</th>
                <th><input type="text" name="jt_teamleader" class="table-input"></th>
        </tr>
        <tr>
                <th>團隊電話</th>
                <th><input type="text" name="jt_teamphone" class="table-input"></th>
        </tr>
        </table>

    <div class="item-end">
    <input type="submit" name="insert" value="新增" class="end-btn bt-3 bt-g"></div>
    </form>
    </div>
    </div>
<script src="/project/js/list.js"></script>
</body> 


</html>