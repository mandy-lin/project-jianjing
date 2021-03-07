<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
$time1=date('Y-m-d ');
//echo $time1;
$time2=date('Y-m-d', strtotime('+5 year'));
//echo $time2;
$time3=date('Y-m-d', strtotime('-1 year'));
//echo $time3;
// echo (strtotime($time1) - strtotime($time2))/ (60*60*24);

$mdate=@$_GET['mdate'];
$name=@$_GET['name'];

$number=10;

if(isset($_GET['page'])){
     $page=$_GET['page'];
}else{
    $page=1;
}
$start=($page-1)*$number;



if(isset($_GET['mdate'])){ 

    $data=mysqli_query($con,"select * from maintain m  join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='需保養' and c.c_name like'%$name%' and m.m_date like'%$mdate%'and m_date >= '$time3' AND  m_date <= '$time2' ORDER BY`m`.`m_date` ASC limit $start, $number "); 
    
    $data_total=mysqli_query($con,"select * from maintain m  join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='需保養' and c.c_name like'%$name%' and m.m_date like'%$mdate%'and m_date >= '$time3' AND  m_date <= '$time2' ");

}else{

    
     $data=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='需保養'and m_date >= '$time3' AND  m_date <= '$time2' ORDER BY`m`.`m_date` ASC  limit $start, $number "); 
    $data_total=mysqli_query($con,"select * from maintain m  join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where q.o_status='已完成' and m.m_status='需保養' and c.c_name like'%$name%' and m.m_date like'%$mdate%'and m_date >= '$time3' AND  m_date <= '$time2' ");

}
$total=mysqli_num_rows($data_total);
$pages=ceil($total/$number);



if(isset($_POST['sumbit'])){
$m_no= @$_POST['mno'];
    
    
$dnum=substr(date("ymdHis"),6,13);
$check=@$_POST['checkbox'];
$count=count($check);
//print_r ($count);

$m_no= @$_POST['mno'];//5
$p_device=@$_POST['pdevice'];
$p_drive=@$_POST['pdrive'];
$p_trans=@$_POST['ptrans'];
$p_rotary=@$_POST['protary'];
$m_pno= @$_POST['mpno'];
$c_uniform= @$_POST['cuniform'];//8
$price_no=@$_POST['priceno'];//8
$uniform1=substr($check[0],8,8);//用統一編號判斷
$price_no1=substr($check[0],0,8);
$y=1;
/*for($i=1; $i<$count; $i++){
$uniform2[$i]=substr($check[$i],8,8);//用統一編號判斷

if($uniform1!=$uniform2[$i]){
//echo $uniform2[$i];
    $y += 2;

}


}
if($y>2){
echo "<script language=javascript>
    alert('請選擇同一個客戶'); location.href='maintain.php?m_no=$m_no';
        </script>";
        $y=1;
        echo $uniform2[$i];
      
}else{
$sql=mysqli_query($con,"INSERT INTO `job`(`j_no`,`j_date`,`j_status`,`j_type`,`price_no`) VALUES('$dnum','$time1','未完成','保養','$price_no1')");
    for($i=0; $i<$count; $i++){

    $jwork=mb_substr( $check[$i],21,50,"utf-8");
    $sql=mysqli_query($con,"INSERT INTO `job_work`(`j_no`, `j_work`) VALUES('$dnum','$jwork')");
    
    $mno=substr($check[$i],16,5);  
    $sql2=mysqli_query($con,"update maintain set `m_job_statue`='已派工' where m_no='$mno'");
 echo "<script language=javascript>
    alert('新增派工'); 
    location.href='job_maintain.php?j_no=$dnum&price_no=$price_no1';
        </script>";
     
}

}*/
//print_r( $_POST['client']);

} 


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
    <script language="JavaScript"> 
function mylink()  
{ 

    var mdate=document.getElementById("madte").value;
    var name=document.getElementById("name").value;
    
    location.href='maintain.php?mdate='+mdate+'&name='+name;
    //document.form1.submit(); 
    //alert( document.getElementById("type").value);
}
        
function Job(form){
var id = document.getElementsByName('checkbox[]');
var value = new Array();
var a = new Array();
var c = new Array();
var total=0
for(var i = 0; i < id.length; i ++ ){
if(id[i].checked){
total++;
console.log(total);
a.push(id[i].parentNode.parentNode.cells[0].innerHTML);
c.push(id[i].parentNode.parentNode.cells[1].innerHTML);
        
}
}



var aa=a.sort();
var cc=c.sort();
console.log(aa);    
console.log(cc);
for(var q=1;q<a.length;q++){

if (cc[0]!=cc[q]){   
        alert("請選擇同個客戶");
        return (false);
        }else if (aa[0]!=aa[q]){
                alert("請選擇同個日期");
                return (false);
                
                
        }else {
                    alert("新增保養派工單");
                    return (true);
                    document.form2.submit();
            
        }

}
}

   
</script>
</head>

<body>

<?php include("home.php");?>
  <aside id="aside">
          <ul class="" onclick="location.href='homepage.php'">
        <i class="fa fa-calendar" aria-hidden="true"></i><span class="span">首頁</span>
    </ul>
    <ul class="select">
        <li class="select"  onclick="location.href='maintain.php'"><i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養紀錄</span>
        </li>
        <li class="" onclick="location.href='maintain_record.php'"><span class="span">保養歷史</span></li>
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
  <div class="card-header">
    <form id="form1" name="form1" method="get" action="maintain.php" class=''>

    <input name="name" type="text" id="name" value="" placeholder="請輸入大樓名稱" class="card-search" />
    <input name="mdate" type="date" id="mdate" value=""  class="card-searchdate"/>
    <input type="submit" name="button" id="button" onclick="mylink()" value="搜尋" class='card-btn' />
     <!--<input class="card-btn" type="button" value="新增派工單 " onclick="location.href='maintain_job.php'">-->
    <input id="sumbit" type="submit" name="sumbit" value="新增派工單" onclick="return  Job(this.form)" class='card-btn' form="form2">  
    </form>
      
    </div>
    <table id="maintain_list" class="table" cellspacing="0">
    <caption>保養紀錄列表</caption>
       <tr>
       <th >保養日期</th>
       <th >大樓名稱</th>
       <th >保養時間</th>
       <th >產品名稱</th>
       <th >機械停車設備</th>
       <th >驅動方式</th>
       <th >傳動元件</th>
       <th >旋轉台</th>
       <th >備註</th>
       <th >派工</th>
       </tr>
<?php
    $post = array();
     if(mysqli_num_rows($data) > 0){
     for($i=1;$i<=mysqli_num_rows($data);$i++){
     $rs=mysqli_fetch_array($data);
     $mno=$rs['m_no'];
    $pdevice=$rs['p_device'];
    $pdrive=$rs['p_drive'];
    $ptrans=$rs['p_trans'];
    $protary=$rs['p_rotary'];
    $mpno=$rs['m_pno'];
    $cuniform=$rs['c_uniform'];
    $priceno=$rs['price_no'];
?>


  <tr>
           <input form=form2 type="hidden" name="pdevice[]" value="<?php echo $pdevice;?>" />
                <input form=form2 type="hidden" name="pdrive[]" value="<?php echo $pdrive;?>" />
                <input form=form2 type="hidden" name="ptrans[]" value="<?php echo $ptrans;?>" />
                <input form=form2 type="hidden" name="protary[]" value="<?php echo $protary;?>" />
                <input form=form2 type="hidden" name="mpno[]" value="<?php echo $mpno;?>" />
                 <input form=form2 type="hidden" name="cuniform[]" value="<?php echo $cuniform;?>" />
                   <input form=form2 type="hidden" name="mno[]" value="<?php echo $mno;?>" />
                   <input form=form2 type="hidden" name="priceno[]" value="<?php echo $priceno;?>" />
        <td id='td12'><?php echo $rs['m_date'];?></td>
        <td ><?php echo $rs['c_name'];?></td>
        <td ><?php echo $rs['m_type'];?></td>
        <td nowrap><?php echo $rs['m_pno'];?></td>
        <td ><?php echo $rs['p_device'];?></td>
        <td ><?php echo $rs['p_drive'];?></td>
        <td ><?php echo $rs['p_trans'];?></td>
        <td nowrap><?php echo $rs['p_rotary'];?></td>
        <td nowrap><input class="btn bt-3" type="button" value="詳細 " onclick="location.href='maintain_detail.php?id=<?php echo $rs['m_no']?>&p_name=<?php echo $rs['p_name']?>&m_type=<?php echo $rs['m_type']?>&m_pno=<?php echo $rs['m_pno']?>&price_no=<?php echo $rs['price_no']?>'">
        </td>
       <td>
  <?php if($rs['m_job_statue'] == ''){ ?>

            <input form=form2  type="checkbox" name="checkbox[]" value="<?php echo $priceno.$mno.$mpno.$pdevice.$pdrive.$ptrans.$protary;?>" id='<?php echo $rs['m_no']?>' />
           
           
           
           
           

           
        
      
      </td>

        </tr>
<?php }   ?>

<?php
     
}}else{
echo '
    <tr>
	   <td colspan=10 align=center height=100px>No  Data found</td>
    </tr>
    ';
}
?>
     </table>
<form id="form2" name="form2" method="post" action="job_maintain.php"  >
      
      </form>
<p class='card-page'>            
<?php     
if ($page > 1) {
        echo '<input class="page page-1" type="button" value="第一頁 " onclick=location.href="maintain.php?page=1&mdate='.$mdate.'&name='.$name.'">'; 
	   
       echo '<input class="page" type="button" value="上一頁 " onclick=location.href="maintain.php?page='. ($page - 1) . '&mdate='.$mdate.'&name='.$name.'">';
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
            echo '<input class="page" type="button" value="下一頁 " onclick=location.href="maintain.php?page='. ($page + 1) . '&mdate='.$mdate.'&name='.$name.'">';
            echo '<input  type="button" value="最後一頁 " class="page page-2 "onclick=location.href="maintain.php?page='. ($pages) . '&mdate='.$mdate.'&name='.$name.'">';
	        }         

?>
</p>


</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/maintain.js"></script>
<script src="/project/js/list.js"></script>
</body>


</html>
