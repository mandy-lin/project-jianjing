<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
if(isset($_POST['search'])){
$keyword=$_POST['keyword'];
$data = mysqli_query($con,"SELECT price_no,p_date,c_name,p_comp_date FROM `quote` q join client c on(q.c_no=c.c_no) WHERE `p_status`='未確認' and c.c_name like'%$keyword%'");
}
else{
$data = mysqli_query($con,"SELECT price_no,p_date,c_name,p_comp_date FROM `quote` q join client c on(q.c_no=c.c_no) WHERE `p_status`='未確認'");

}

?>
<!--報價-->
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
    <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
    <ul class="select">
        <li class="select" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價紀錄</span>
        </li>
        <li class="" onclick="location.href='price_add.php'"><span class="span">新增報價單</span></li>
        <li class="" onclick="location.href='price_history.php'"><span class="span">報價歷史</span></li>
     </ul>
     <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span></ul>
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
    
  </aside>    
  
<div id='content'>

    <div id="div_print" class="card">
    <form id="form1" name="form1" method="post" action="" class='card-header'> 
    <input name="keyword" type="search" placeholder="請輸入大樓名稱" class="card-search"/>
    <input id="search" name="search" type="submit" value="搜尋" class='card-btn'>
    </form> 
  
      <table id='table' class="table" cellspacing="0">
      <caption>未確認報價單</caption>
    <tr>
      <th>報價日期</th>
      <th>客戶名稱</th>
      <th>預計完工日期</th>
      <th>備註</th>
    </tr>
    <?php

if(mysqli_num_rows($data) > 0)
{
while ($rs=mysqli_fetch_array($data)){


echo '<tr>
      <td>'. $rs['p_date'].'</td>
      <td>'. $rs['c_name'].'</td>
      <td>'. $rs['p_comp_date'].'</td>
      <td >
      <input class="btn bt-1" type="button" value="詳細 " onclick='.'location.href='.'"price_detail.php?id='.$rs['price_no'].'"><input type="button" class="btn bt-2 delete" id='.$rs['price_no'].' value="刪除">
      </td>
    </tr>';

}

}
else
{
echo '
    <tr>
	   <td colspan=4 align=center height=100px>No  Data found</td>
    </tr>
    ';
}
  
    ?> 
 
  </table>
</div>

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="/project/js/price.js"></script>
<script type="text/javascript">
	$(document).on('click','.delete',function (){
    
        var del_id = $(this).attr('id');
        //alert(del_id);
		$.ajax({
			url:"price_delete.php",
			method:"post",
			data:{del_id:del_id},
			success:function(data){
				$('#table').html(data);
                console.log(data);
			}
		});
    });
</script>
<script src="/project/js/list.js"></script>
</body> 
</html>