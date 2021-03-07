<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
    error_reporting(0);//隱藏錯誤碼
    $id=@$_GET["id"];
    $p_name=@$_GET['p_name'];
    $m_no=@$_GET['m_no'];
    $m_pno=@$_GET['m_pno'];
    $price_no=@$_GET['price_no'];
if($_GET['m_no']!=''){
    $data=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where fix_no='$id'
    ");
}else{
    $data=mysqli_query($con,"select DISTINCT f.fix_no,m_pno,p_date,c_name,c_address,c_phone,f_star_date from fix f join quote q on(f.price_no=q.price_no)join order_recode o on(q.price_no=o.price_no) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where fix_no='$id'
    ");
}
    $data1=mysqli_query($con,"select * from fix_item fi join fix f on(fi.fix_no=f.fix_no) where fi.fix_no='$id' ");
$fstardate=@$_POST[fstardate];
 
/* if(isset($_POST['button'])){
        $data2=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.f_statue='0' and q.price_no='$price_no' and m.m_pno='$m_pno' and f.f_star_date like'%$fstardate%'");
    } 
    else{
        $data2=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.f_statue='0' and m_pno='$m_pno' and q.price_no='$price_no'");
    }*/
    
if(isset($_POST['sumbit'])){
    error_reporting(2);
    $check=@$_POST['checkbox'];
    $f_work_item= @$_POST['fworkitem'];
    $fi_checkbox= @$_POST['fi_checkbox'];
    $count=count($check);
    $count2=count($f_work_item);    
$m_p_end_date=@$_POST['m_p_end_date'];
$f_end_date=@$_POST['f_end_date'];
$f_finish_date=@$_POST['f_finish_date'];


$sql9=mysqli_query($con,"UPDATE `fix` SET 
`f_end_date`='$f_end_date',`f_finish_date`='$f_finish_date'WHERE fix_no='$id'");
if($f_end_date!=null or $f_finish_date!=null){


if($count==$count2){
$sql3=mysqli_query($con,"UPDATE `fix` SET`f_star_date`='$m_p_end_date' WHERE fix_no='$id'");
for($i=0; $i<$count2; $i++){
echo $check[$i];
$sql=mysqli_query($con,"UPDATE `fix_item` SET `fi_checkbox`='1' WHERE f_itme_no='$check[$i]'");
}
    $sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='已維修' WHERE m_no='$m_no'");
    $sql2=mysqli_query($con,"UPDATE `fix` SET `f_statue`='0' WHERE fix_no='$id'");
    if($sql){
        echo "<script language=javascript>
        alert('新增成功'); location.href='fix_medit.php?id=$id&p_name=$p_name&m_no=$m_no&m_pno=$m_pno&price_no=$price_no';
        </script>"
            ;}
   /*else{
        echo'新增失敗'.mysqli_error($con);}   */   
    }
    else{
        echo "<script language=javascript>
        alert('尚有選項未勾選，請按儲存'); 
        </script>";
    }
}
else{
  echo "<script language=javascript>
        alert('尚有選項未填寫，請確實填寫'); 
        </script>";
}
    }  



if(isset($_POST['save'])){
    error_reporting(2);
    $check=@$_POST['checkbox'];
    $f_work_item= @$_POST['fworkitem'];
    $fi_checkbox= @$_POST['fi_checkbox'];
    $count=count($check);
    $count2=count($f_work_item);
    $m_p_end_date=@$_POST['m_p_end_date'];
    
//print_r ($count);
//print_r ($count2);
$f_end_date=@$_POST['f_end_date'];
$f_finish_date=@$_POST['f_finish_date'];



for($i=0; $i<$count2; $i++){
echo $check[$i];
$sql=mysqli_query($con,"UPDATE `fix_item` SET `fi_checkbox`='1' WHERE f_itme_no='$check[$i]'");
}
$sql9=mysqli_query($con,"UPDATE `fix` SET 
`f_end_date`='$f_end_date',`f_finish_date`='$f_finish_date'WHERE fix_no='$id'");
$sql3=mysqli_query($con,"UPDATE `fix` SET`f_star_date`='$m_p_end_date' WHERE fix_no='$id'");

    if($sql){
        echo "<script language=javascript>
alert('儲存成功'); location.href='fix_detail2.php?id=$id&p_name=$p_name&m_no=$m_no&m_pno=$m_pno&price_no=$price_no';
    </script>"
    ;}
    /*else{
    echo'儲存失敗'.mysqli_error($con);}  */   
  }  
?>
<!--保養-->
<!doctype html>
<html>

<head>
    <link rel="icon" href="../img/jj.ico" type="image/x-icon" />
    <title>健璟內部管理系統</title>
    <link rel=stylesheet href=/project/css/home.css>
    <link rel=stylesheet href=/project/css/table-fix.css>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
 function handler(e){
  //alert(e.target.value);
  document.getElementById('f_finish_date').min = e.target.value;
}
        function editdata1() {
            var edit_elements = document.getElementsByClassName("readonly")
            for (i = 0; i < edit_elements.length; i++) {
                edit_elements[i].removeAttribute("readonly");
                edit_elements[i].style = "border:inline";
            };

            document.getElementById('b').style.display = "inline";
            document.getElementById('y').style.display = "none";
            document.getElementById('c').style.display = "inline";
        }
    </script>

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
    <div class='card-header'><?php echo $m_pno;?>維修紀錄</div>
    <table id="fix_table" class='table' cellspacing="0">
<?php
while ($rs=mysqli_fetch_array($data)){
$m_p_end_date=$rs['f_star_date'];
$f_end_date=$rs['f_end_date'];

?>
 <tr>
     <td>維修日期</td>
     <td>大樓名稱</td>
     <td>大樓地址</td>
     <td>連絡電話</td>
     <td>保養時間</td>
     <td>產品名稱</td>
     <td>使用許可證有效日期</td>
 </tr>
 <tr>
<input form=form1 type="hidden" name="m_p_end_date" value="<?php echo $m_p_end_date;?>" />
<input form=form1 type="hidden" name="f_end_date" value="<?php echo $f_end_date;?>" />
<input form=form1 type="hidden" name="f_finish_date" value="<?php echo $f_finish_date;?>" />
     <td><input type="date"  name="m_p_end_date" value="<?php echo $m_p_end_date;?>" class="readonly table-input" readonly="readonly" form="form1" style="border:none"></td>
     <td><?php echo $rs['c_name'];?></td>
     <td><?php echo $rs['c_address'];?></td>
     <td><?php echo $rs['c_phone'];?></td>
     <td><?php echo $rs['m_type'];?></td>
     <td><?php echo $rs['m_pno'];?></td>
     <td><?php echo $rs['m_license'];?></td>
 </tr>
</table>

<p>
實際施工日期:<input type="date" id="f_end_date" name="f_end_date" value="<?php echo $rs['f_end_date']?>" class="readonly date-input" onchange="handler(event);" readonly="readonly" form="form1" style="border:none">
實際完工日期:<input type="date" id="f_finish_date" name="f_finish_date" value="<?php echo $rs['f_finish_date']?>" class="readonly date-input" readonly="readonly" form="form1" style="border:none"></p>
<?php 
} 

                                                             ?>
  <form action="" method="post"  id="form1" name="form1">

      <h4>維護檢視項目</h4>
  
<div id="month" class="item">
    <table id="me" class='item-table-2' cellspacing="0">
                 <!-- <legend>月保養</legend>--> 
    <tr>
        <td>維修項目</td>
        <td>狀態</td>
        <td>是否維修</td>
    </tr>
     <?php 
$post = array();
while ($rt=mysqli_fetch_array($data1)){
//$fworkitem= $rt['f_work_item'];
//echo $fworkitem;
$fworkitem=$rt['f_work_item'];
                           
?>
 <tr>
  <input type="hidden" name="fworkitem[]" value="<?php echo $fworkitem;?>">
     
     <td><?php echo $rt['f_work_item'];?></td>
     
     <td><?php echo $rt['fi_statue'];?></td>        
<?php if($rt['fi_checkbox'] == 1){ ?>

<td><input type="checkbox" class='check' name="checkbox[]" value="<?php echo $rt['f_itme_no'];?>" id='<?php echo $rt['f_itme_no'];?>' checked="true"  /><label for='<?php echo $rt['f_itme_no'];?>'><?php echo $rt['fi_item_status'];?>完成</label> 
</td>
<?php } 
   else{ ?>
<td><input type="checkbox" class='check' name="checkbox[]" value="<?php echo $rt['f_itme_no'];?>" id='<?php echo $rt['f_itme_no'];?>'/><label for='<?php echo $rt['f_itme_no'];?>'><?php echo $rt['fi_item_status'];?>完成</label> 
</td>
   </tr> 

 <?php   } ?>

<?php 
 
 }
 ?>     
                
</table> 
</div> 
<div class='item-end'>


<button id="y" name="edit" type="button" onClick="editdata1()" style="display:inline" class="end-btn bt-3 bt-y">編輯</button>

<button id="b" name="save" type="sumbit" style="display:none" class="end-btn bt-3 bt-y">儲存</button>

<button id="c" name="sumbit" type="sumbit" style="display:none" class="end-btn bt-3 bt-red" onclick="location.href='fix_medit.php?id=$id">完成</button>


</div>             
                                                                   
  
</form>         

</div>
</div>
<script src="/project/js/list.js"></script>
</body>
</html>
