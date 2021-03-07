<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文


$number=10;


$keyword=@$_GET['keyword'];

if(isset($_GET['page'])){
     //$page=$_GET['page'];
     $page=$_GET['page'];
}else{
    $page=1;
}

//echo 'page='.$page.'<br>';
//echo 'key='.$keyword.'<br>';

$start=($page-1)*$number;
//echo 'start='.$start.'<br>';

if(isset($_GET['keyword'])){

$data = mysqli_query($con,"SELECT * FROM `quote`q join client c on(q.c_no=c.c_no) WHERE o_status='已完成' and c.c_name like'%$keyword%' limit $start, $number   ");

$data1 = mysqli_query($con,"SELECT * FROM `quote`q join client c on(q.c_no=c.c_no) WHERE o_status='已完成' and c.c_name like'%$keyword%'  ");

}
else{

$data = mysqli_query($con,"SELECT * FROM `quote`q join client c on(q.c_no=c.c_no) WHERE o_status='已完成' limit $start, $number  ");

$data1 = mysqli_query($con,"SELECT * FROM `quote`q join client c on(q.c_no=c.c_no) WHERE o_status='已完成' ");

}

$total=mysqli_num_rows($data1);
$pages=ceil($total/$number);

?>
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/table-main.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="utf-8">
<script language="JavaScript"> 
</script>
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
    <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span></ul>
    
    <ul class="select">
        <li class=""  onclick="location.href='order.php'"><span class="span">訂單紀錄</span>
        </li>
        <li class="select" onclick="location.href='order_history.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單歷史</span></li>
     </ul>
    
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
   
  </aside>
  <div id='content'>
  <div class="card">
  <form id="form1" name="form1" method="get" action="" class='card-header'><input name="keyword" type="search" placeholder="請輸入大樓名稱" class="card-search"/>
  <input class='card-btn' type="submit"   value="搜尋">


</form>
  
  <table class="table" cellspacing="0">
  <caption>已完成訂單</caption>
    <tr>
      <th>訂單日期</th>
      <th>客戶名稱</th>
      <th>實際完工日期</th>
      <th>備註</th>
    </tr> 
<?php
for($i=1;$i<=mysqli_num_rows($data);$i++){
$rs=mysqli_fetch_array($data);
?>
<tr>
     
      <td><?php echo $rs['o_date'];?></td>
      <td><?php echo $rs['c_name'];?></td>
      <td><?php echo $rs['o_actual_date'];?></td>
      <td><input class="btn bt-3"type="button" value="詳細" onclick="location.href='order_history_detail.php?id=<?php echo $rs['price_no'];?>'" ></td>
    </tr><?php } ?> 
  </table>
  <p class='card-page'>
  <?php if ($page > 1) {

        // get
        echo '<input class="page page-1" type="button" value="第一頁 " onclick=location.href="order_history.php?page=1&keyword='.$keyword.'">'; 
	   
       echo '<input  type="button" class="page" value="上一頁 " onclick=location.href="order_history.php?page='. ($page - 1) .'&keyword='.$keyword. '">';
       
       
	   }          
	      for ($i = 1; $i <= $pages; $i++) 
	      { 
	        if ($i == $page) {
              echo "第".$page."頁/共有".$pages."頁";}
	      } 
	             
	      if ($page < $pages) 
           
	        {
            //get
            echo '<input class="page" type="button" value="下一頁 " onclick=location.href="order_history.php?page='. ($page + 1) . '&keyword='.$keyword.'">';
            echo '<input class="page page-2" type="button" value="最後一頁 " onclick=location.href="order_history.php?page='. ($pages) . '&keyword='.$keyword.'">';

            
	        }         

?></p>
  </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="/js/order.js"></script>
<script src="/project/js/list.js"></script>
  </body>
  </html>