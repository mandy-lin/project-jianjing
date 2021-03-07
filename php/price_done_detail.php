<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
$id=$_GET["id"];


$data1 = mysqli_query($con,"SELECT DISTINCT c_name,c_address , c_cname, c_cphone,p_date ,p_comp_date,p_start_date,total ,p_status FROM `quote`q join client c on(q.c_no=c.c_no) join order_recode o on(q.price_no=o.price_no) where q.price_no='$id'");

$data = mysqli_query($con,"SELECT * FROM `quote`q join client c on(q.c_no=c.c_no) join order_recode o on(q.price_no=o.price_no) join produce p on (o.p_no=p.p_no) where q.price_no='$id'");



?>
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/boxtext.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="utf-8"> 
<script>
function remove(){
  var index=$(this).closest("tr").index();
  document.getElementById('history_list').deleteRow(index);
}
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
    <ul class="select">
        <li class="" onclick="location.href='price.php'"><span class="span">報價紀錄</span>
        </li>
        <li class="" onclick="location.href='price_add.php'"><span class="span">新增報價單</span></li>
        <li class="select" onclick="location.href='price_history.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價歷史</span></li>
     </ul>
     <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span></ul>
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
 
  </aside>
<div id='content'>
  <?php
if(!$data){
echo("Error: ".mysqli_error($con));
exit();
}
$rd=mysqli_fetch_array($data1)
?>   
      <div id="detail_price" class="card">
      <p>狀態：客戶<?php echo $rd['p_status'];?></p>
        <div class="boxtext">
        <p><b class="cname"><?php echo $rd['c_name'];?></b><br>
        地址:<b><?php echo $rd['c_address'];?></b><br>
        聯絡人:<b><?php echo $rd['c_cname'];?></b><br>
        連絡電話:<b><?php echo $rd['c_cphone'];?></b></p>
        </div>
        <p class="card-date">
        報價日期:<?php echo $rd['p_date'];?><br>
        預計施工日期:<?php echo $rd['p_start_date'];?>~
        <?php echo $rd['p_comp_date'];?></p>
        
    <table class="table" cellspacing="0">
     <tr>
        <th>類型</th>
        <th>設備</th>
        <th>驅動</th>
        <th>傳動</th>
        <th>旋轉</th>
        <th>單價</th>
        <th>數量</th>
        <th>小計</th>
      </tr>
<?php      
while ($rs=mysqli_fetch_array($data)){
?>      
      <tr > 
        <td><?php echo $rs['p_name'];?></td>
        <td><?php echo $rs['p_device'];?></td>
        <td ><?php echo $rs['p_drive'];?></td>
        <td><?php echo $rs['p_trans'];?></td>
        <td><?php echo $rs['p_rotary'];?></td>
        <td ><?php echo $rs['p_price_order'];?></td>
        <td ><?php echo $rs['p_amount'];?></td>
        <td><?php echo $rs['p_subtotal'];?></td>
      </tr>
<?php } ?>       
      <tr>
        <td colspan="6"></td>
        <td>總計</td>
        <td><?php echo $rd['total'];?></td>
      
      </tr>
    </table>
    <p class="card-end"><input type="button" id="back" value="返回" onclick="history.back()" class="end-btn bt-3 bt-r">
    </p></div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="/project/js/price.js"></script>
<script src="/project/js/list.js"></script>
</body> 


</html>