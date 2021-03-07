<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

$c_name=@$_GET['c_name'];
$area=@$_GET['area'];

$number=10;

if(isset($_GET['page'])){
     $page=$_GET['page'];
}else{
    $page=1;
}

$start=($page-1)*$number;

if((isset($_GET['c_name'])) or (isset($_GET['area']))){
  $area=$_GET['area'];
  $name=$_GET['c_name'];
 $data=mysqli_query($con,"select * from client where c_address like '%$area%' and c_name like '%$name%' ORDER BY `client`.`c_no` ASC  limit $start, $number ");
 $data_total=mysqli_query($con,"select * from client where c_address like '%$area%' and c_name like '%$name%' ");
 
/*}else if(@$_POST['area']!=''){
  $data=mysqli_query($con,"select * from client where c_address like '%$_POST[area]%' ");
}else if(@$_POST['c_name']!=''){
  $data=mysqli_query($con,"select * from client where c_name like '%$_POST[c_name]%' "); */
}else{
  $data=mysqli_query($con,"SELECT * FROM `client` ORDER BY `client`.`c_no` ASC  limit $start, $number "); 
  $data_total=mysqli_query($con,"select * from client");
}
$total=mysqli_num_rows($data_total);
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
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span>
     </ul>
     <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span></ul>
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     
    <ul class="select">
        <li class="select" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶管理</span>
        </li>
        <li class="" onclick="location.href='client_add.php'"><span class="span">新增客戶</span></li>
     </ul>
     
  </aside>
<div id='content'>
    <div class="card">  
      <form id="form2" name="form2" method="get" action="" class='card-header'> 
        <select name="area" id="area" class="card-search">
            <option selected value="">選擇區域</option>
            <option value="太平區">太平區</option>
            <option value="霧峰區">霧峰區</option>
            <option value="大里區">大里區</option>
            <option value="北屯區">北屯區</option>
            <option value="東區">東區</option>
        </select>
       <input  placeholder="搜尋大樓名稱" name="c_name" id="name" class="card-search">
       <button type="submit" class='card-btn'>搜尋</button>
       <input type="button" class='card-btn'onclick="location.href='client_add.php'" value="新增客戶">
       </form>

        <table name="c_list" class="table" cellspacing="0">
            <tr>
                
                <th>大樓名稱</th>
                <th>主委姓名</th>
                <th>主委電話</th>
                <th>大樓地址</th>
                <th>&nbsp;</th>
            </tr>
<?php
for($i=1;$i<=mysqli_num_rows($data);$i++){
$rs=mysqli_fetch_array($data);
?>             
            <tr>
                
                <td class='click'><?php echo $rs['c_name'];?></td>
                <td class='click'><?php echo $rs['c_cname'];?></td>
                <td class='click'><?php echo $rs['c_cphone'];?></td>
                <td class='click'><?php echo $rs['c_address'];?></td>
                <td><input class='btn bt-3'type='button' value="詳細" onclick="location.href='client_detail.php?id=<?php echo $rs[0]?>'"></td>
            </tr>
<?php } ?>            
        </table>
<p class='card-page'>        
<?php     
if ($page > 1) {
        echo '<input  type="button" class="page page-1" value="第一頁 " onclick=location.href="client.php?page=1&area='.$area.'&c_name='.$c_name.'">'; 
	   
       echo '<input  type="button" class="page" value="上一頁 " onclick=location.href="client.php?page='. ($page - 1) . '&area='.$area.'&c_name='.$c_name.'">';
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
            echo '<input  type="button" class="page" value="下一頁 " onclick=location.href="client.php?page='. ($page + 1) . '&area='.$area.'&c_name='.$c_name.'">';
            echo '<input class="page page-2" type="button" value="最後一頁 " onclick=location.href="client.php?page='. ($pages) . '&area='.$area.'&c_name='.$c_name.'">';
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