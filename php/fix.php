<?php
include("login_connect.php"); //$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
    
    $name=@$_POST[name];
    $fstardate=@$_POST[fstardate];
    if(isset($_POST['button'])){
        $data=mysqli_query($con,"select f.fix_no,f_star_date,c_name,m.m_pno,m.price_no,f.m_no from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_status='已結束'and f.f_statue='1' and c.c_name like'%$name%' and f.f_star_date like'%$fstardate%' UNION select f.fix_no,f_star_date,c_name,f.m_pno,f.price_no,f.m_no from fix f join quote q on(f.price_no=q.price_no)join order_recode o on(q.price_no=o.price_no) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where  c.c_name like'%$name%' and f.f_star_date like'%$fstardate%'");
    }
    else{
        $data=mysqli_query($con,"select f.fix_no,f_star_date,c_name,m.m_pno,m.price_no,f.m_no from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_status='已結束'and f.f_statue='1' UNION select f.fix_no,f_star_date,c_name,f.m_pno,f.price_no,f.m_no from fix f join quote q on(f.price_no=q.price_no) join order_recode o on(q.price_no=o.price_no) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no)");
        
        
        
    }
?>


<!--維修-->
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
    
    <ul class="" onclick="location.href='maintain.php'"><i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養</span></ul>
     
     <ul class="select">
        <li class="select"  onclick="location.href='fix.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修紀錄</span>
        </li>
        <li class="" onclick="location.href='fix_record.php'"><span class="span">維修歷史</span></li>
         <li class="" onclick="location.href='fix_temporary.php'"><span class="span">臨時維修</span></li>
     </ul>
    
    <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span></ul>
    
    <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span>
    </ul>
    
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
     
  </aside>
  <div id='content'>
  <div class="card">
    <form id="form1" name="form1" method="post" action="fix.php" class='card-header'>
    
    <input name="name" type="text" id="name" value="" placeholder="請輸入大樓名稱" class="card-search"/>
    <input name="fstardate" type="date" id="fstardate" value="" class="card-searchdate" />
    <input type="submit" name="button" id="button" value="搜尋" class='card-btn'/>
    </form>
    <table id="fix_list" class="table" cellspacing="0">
    <caption>維修紀錄列表</caption>
    <tr>
        <th >維修日期</th>
        <th >大樓名稱</th>
        <th >產品名稱</th>
        <th >備註</th>
    </tr>
<?php
    if(mysqli_num_rows($data) > 0){
    for($i=1;$i<=mysqli_num_rows($data);$i++){
    $rs=mysqli_fetch_array($data);
?>
<?php 
$job=mysqli_query($con,"SELECT fix_no FROM `job` where fix_no = '".$rs['fix_no']."'");
if(mysqli_num_rows($job)>0){ ?>
    <tr>
        <td ><?php echo $rs['f_star_date'];?></td>
        <td ><?php echo $rs['c_name'];?></td>
        <td ><?php echo $rs['m_pno'];?></td>
        <td ><input class="btn bt-3" type="button" value="詳細 " onclick="location.href='fix_detail2.php?id=<?php echo $rs['fix_no']?>&m_no=<?php echo $rs['m_no']?>&m_pno=<?php echo $rs['m_pno']?>&price_no=<?php echo $rs['price_no']?>'">
        </td>
    </tr>
<?php } 
else{ ?>
   <tr>
        <td ><?php echo $rs['f_star_date'];?></td>
        <td ><?php echo $rs['c_name'];?></td>
        <td ><?php echo $rs['m_pno'];?></td>
        <td ><input class="btn bt-1" type="button" value="詳細 " onclick="location.href='fix_detail2.php?id=<?php echo $rs['fix_no']?>&m_no=<?php echo $rs['m_no']?>&m_pno=<?php echo $rs['m_pno']?>&price_no=<?php echo $rs['price_no']?>'"><input class="btn bt-2" type="button" value="派工維修單 " onclick="location.href='job_fix.php?id=<?php echo $rs['price_no']?>&mno=<?php echo $rs['m_no']?>&fix=<?php echo $rs['fix_no']?>'">
        </td>
    </tr>
<?php   } ?>
<?php
}}
else
{
echo '
    <tr>
	   <td colspan=9 align=center height=100px>No  Data found</td>
    </tr>
    ';
}
?>

      </table>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/fix.js"></script>
<script src="/project/js/list.js"></script>
</body>

</html>
