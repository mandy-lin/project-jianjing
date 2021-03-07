<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

//$time1=date('Y-m-d ');
//echo $time1;
//$time2=date('Y-m-d', strtotime('+5 month'));
//echo $time2;

$mdate=@$_GET['mdate'];
$name=@$_GET['name'];
$type=@$_GET['type'];
$number=10;
if(isset($_GET['page'])){
     $page=$_GET['page'];
}else{
    $page=1;
}
$start=($page-1)*$number;

if(isset($_GET['mdate'])){ 

    $data=mysqli_query($con,"select * from maintain m  join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='已結束' and c.c_name like'%$name%' and m.m_date like'%$mdate%'and m.mf_sataue like'%$type%'ORDER BY`m`.`m_date` ASC  limit $start, $number "); 
    $data_total=mysqli_query($con,"select * from maintain m  join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='已結束' and c.c_name like'%$name%' and m.m_date like'%$mdate%' and m.mf_sataue like'%$type%'");

}else{

    
     $data=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='已結束' ORDER BY`m`.`m_date` ASC  limit $start, $number "); 
    $data_total=mysqli_query($con,"select * from maintain m  join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='已結束' and c.c_name like'%$name%' and m.m_date like'%$mdate%'and m.mf_sataue like'%$type%' ");

}
$total=mysqli_num_rows($data_total);
$pages=ceil($total/$number);

/*if(isset($_POST['button'])){
 $data=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='已結束' and c.c_name like'%$_POST[name]%'and m.m_date like'%$_POST[mdate]%'and m_date BETWEEN '$time1' and '$time2' ORDER BY `m`.`m_date` ASC");
}else{
  $data=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='已結束' and m_date BETWEEN '$time1' and '$time2' ORDER BY `m`.`m_date` ASC");
}
*/

?>

<!--保養-->
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
    <ul class="select">
        <li class=""  onclick="location.href='maintain.php'"><span class="span">保養紀錄</span>
        </li>
        <li class="select" onclick="location.href='maintain_record.php'"><i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養歷史</span></li>
     </ul>
          
    <ul class="" onclick="location.href='fix.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修</span></ul>
    <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span></ul>
    
    <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span>
    </ul>
    
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
     
  </aside>
  <div id='content'>
  <div class="card">
      <form id="form1" name="form1" method="get" action="maintain_record.php" class='card-header'>
      
      <input name="name" type="text" id="name" value="" placeholder="請輸入大樓名稱" class="card-search"/>
     
        <select id="type" name="type" class=" card-search ">
            <option value=''>選擇類型</option>
            <option value='需維修'>需維修</option>
            <option value='無須維修'>無須維修</option>
            <option value='已維修'>已維修</option>
        </select>
      <input name="mdate" type="date" id="mdate" value="" class="card-searchdate"/>
      
      <input type="submit" name="button" id="button" value="搜尋" class='card-btn'/>
      
      </form>
      <table class="table" cellspacing="0">
      <caption>保養歷史列表</caption>
          <tr>
          <th >保養日期</th>
          <th >大樓名稱</th>
          <th >維修狀態</th>
          <th >保養時間</th>
          <th >產品名稱</th>
          <th >機械停車設備</th>
          <th >驅動方式</th>
          <th >傳動元件</th>
          <th >旋轉台</th>
          <th >保養詳細</th>
          </tr>
<?php
    for($i=1;$i<=mysqli_num_rows($data);$i++){
    $rs=mysqli_fetch_array($data);
?>
          <tr>
          <td ><?php echo $rs['m_date'];?></td>
          <td ><?php echo $rs['c_name'];?></td>
          <td nowrap><?php echo $rs['mf_sataue'];?></td>
          <td ><?php echo $rs['m_type'];?></td>
          <td nowrap><?php echo $rs['m_pno'];?></td>
          <td ><?php echo $rs['p_device'];?></td>
          <td ><?php echo $rs['p_drive'];?></td>
          <td ><?php echo $rs['p_trans'];?></td>
          <td nowrap><?php echo $rs['p_rotary'];?></td>
          <td nowrap><input class="btn bt-3" type="button" value="詳細 " onclick="location.href='maintain_medit.php?id=<?php echo $rs['m_no']?>&p_name=<?php echo $rs['p_name']?>&m_type=<?php echo $rs['m_type']?>&price_no=<?php echo $rs['price_no']?>&m_pno=<?php echo $rs['m_pno']?>'"></td>
          </tr>

<?php
}
?>
</table>
<p class='card-page'>  
<?php     
if ($page > 1) {
        echo '<input class="page page-1" type="button" value="第一頁 " onclick=location.href="maintain_record.php?page=1&mdate='.$mdate.'&name='.$name.'&mfsataue='.$type.'">'; 
	   
       echo '<input class="page" type="button" value="上一頁 " onclick=location.href="maintain_record.php?page='. ($page - 1) . '&mdate='.$mdate.'&name='.$name.'&mfsataue='.$type.'">';
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
            echo '<input class="page" type="button" value="下一頁 " onclick=location.href="maintain_record.php?page='. ($page + 1) . '&mdate='.$mdate.'&name='.$name.'&mfsataue='.$type.'">';
            echo '<input  type="button" value="最後一頁 " class="page page-2"  onclick=location.href="maintain_record.php?page='. ($pages) . '&mdate='.$mdate.'&name='.$name.'&mfsataue='.$type.'">';
	        }         

?>
</p>                


</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/maintain_record.js"></script>
<script src="/project/js/list.js"></script>
</body>
</html>
