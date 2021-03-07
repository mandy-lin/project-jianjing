<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

$jt_team=@$_GET['jt_team'];

$number=10;
if(isset($_GET['page'])){
     $page=$_GET['page'];
}else{
    $page=1;
}

$start=($page-1)*$number;

if((isset($_GET['jt_team']))){
  $name=$_GET['jt_team'];
 $data=mysqli_query($con,"SELECT * FROM `job_team` where jt_team like '%$name%'");
 $data_total=mysqli_query($con,"SELECT * FROM `job_team` where jt_team like '%$name%'");

}else{
  $data=mysqli_query($con,"SELECT * FROM  `job_team`"); 
  $data_total=mysqli_query($con,"select * from job_team");
}
$total=mysqli_num_rows($data_total);
$pages=ceil($total/$number);

?>
<!--團隊-->
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/table-main.css>
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
     
      <ul class="select">
     </ul>
  </aside>
<div id='content'>
    <div class="card">  
      <form id="form2" name="form2" method="get" action="" class='card-header'> 
       <input  placeholder="搜尋廠商名稱" name="jt_team" id="jt_team" class="card-search">
       <button type="submit" class='card-btn'>搜尋</button>
       <input type="button" class='card-btn'onclick="location.href='job_teamnew.php'" value="新增廠商">
       </form>

        <table name="team" class="table" cellspacing="0">
            <tr>
                
                <th>團隊名稱</th>
                <th>負責人</th>
                <th>團隊電話</th>
            </tr>
<?php
for($i=1;$i<=mysqli_num_rows($data);$i++){
$rs=mysqli_fetch_array($data);
?>             
            <tr>
                
                <td class='click'><?php echo $rs['jt_team'];?></td>
                <td class='click'><?php echo $rs['jt_teamleader'];?></td>
                <td class='click'><?php echo $rs['jt_teamphone'];?></td>
            </tr>
<?php } ?>            
        </table>
<p class='card-page'>        
<?php     
if ($page > 1) {
        echo '<input  type="button" class="page page-1" value="第一頁 " onclick=location.href="job_teamadd.php?page=1&jt_team='.$jt_team.'">'; 
	   
       echo '<input  type="button" class="page" value="上一頁 " onclick=location.href="job_teamadd.php?page='. ($page - 1) . '&jt_team='.$jt_team.'">';
	   }          
	      for ($i = 1; $i <= $pages; $i++) 
	      { 
	        if ($i == $page) {
	          //echo "$i ";
              echo "第".$page."頁/共有".$pages."頁";}
	        //else 
	          //echo "<a href='product.php?page=$i'>$i</a> ";       
	      } 
	             
	      if ($page < $pages) 
           
	        {
            echo '<input  type="button" class="page" value="下一頁 " onclick=location.href="job_teamadd.php?page='. ($page + 1) . '&jt_team='.$jt_team.'">';
            echo '<input class="page page-2" type="button" value="最後一頁 " onclick=location.href="job_teamadd.php?page='. ($pages) . '&jt_team='.$jt_team.'">';
	        }         

?>
</p>
        
</div>  
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
 <script src="/project/js/list.js"></script>
<!--script src="/project/js/client_search.js"></script-->
</body> 


</html>