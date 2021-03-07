<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

$id=$_GET["id"];

$data1 = mysqli_query($con,"SELECT DISTINCT c_name,c_address , c_cname, c_cphone,p_date ,p_comp_date,p_start_date,total ,p_status FROM `quote`q join client c on(q.c_no=c.c_no) join order_recode o on(q.price_no=o.price_no) where q.price_no='$id'");

$data = mysqli_query($con,"SELECT * FROM `quote`q join client c on(q.c_no=c.c_no) join order_recode o on(q.price_no=o.price_no) join produce p on (o.p_no=p.p_no) where q.price_no='$id'");

$today= date('Y-m-d');
//echo $today;
//按鈕的確認
if(isset($_POST['client_check'])){

$sql_check=mysqli_query($con,"UPDATE `quote` SET `p_status`='已確認',`o_date`='$today' WHERE price_no='$id'");

/*if( $sql_check){
echo "<script language=javascript>
alert('客戶已確認此報價單，頁面將會跳轉到報價歷史'); 
location.href='price_done_detail.php?id=$id';
</script>";
    //header("location:price_done_detail.php?id=$id");
}*/

    
if( $sql_check){
echo "<script language=javascript>
alert('客戶已確認此報價單，頁面將會跳轉到新增派工單'); 
location.href='job_price.php?id=$id';
</script>";
    //header("location:price_done_detail.php?id=$id");
}    
    
}

if(isset($_POST['save'])){
//print_r( $_POST['p_id']);
//print_r ($_POST['price']);
//print_r ($_POST['amount']);
//echo $_POST['p_date'];
//echo $_POST['p_comp_date'];
//echo $_POST['p_start_date'];
//echo $_POST['check'];

$pid= @$_POST['p_id'];
$price = @$_POST['price'];
$amount = @$_POST['amount'];
$p_date = @$_POST['p_date'];
$p_comp_date = @$_POST['p_comp_date'];
$p_start_date = @$_POST['p_start_date'];
$subtotal=@$_POST['subtotal'];
$total=@$_POST['total'];
$check=@$_POST['check'];
if (isset($check)){
$sql=mysqli_query($con,"UPDATE `quote` SET`p_date`='$p_date',`p_comp_date`='$p_comp_date',`p_start_date`='$p_start_date',`total`='$total' ,`p_status`='$check',`o_date`='$today' WHERE price_no='$id'");
  /*if(sql){
  echo "<script language=javascript>
alert('客戶已確認此報價單，頁面將會跳轉到報價歷史'); 
location.href='price_done_detail.php?id=$id';
</script>";
  }else{echo mysqli_error($con);};*/
    
    
if(sql){
  echo "<script language=javascript>
alert('客戶已確認此報價單，頁面將會跳轉到新增派工單'); 
location.href='job_price.php?id=$id';
</script>";
  }else{echo mysqli_error($con);};    
    
}else{
$sql=mysqli_query($con,"UPDATE `quote` SET`p_date`='$p_date',`p_comp_date`='$p_comp_date',`p_start_date`='$p_start_date',`total`='$total'  WHERE price_no='$id'");
  if(sql){header("location:price_detail.php?id=$id");}else{echo mysqli_error($con);};
}

for ($i = 0; $i < count($price); $i++) {

//echo $price[$i].' ';
//echo $amount[$i].' ';
//echo $price[$i]*$amount[$i]. ' ';
//echo $pid[$i] . '  .....      ';


$sql1=mysqli_query($con,"UPDATE `order_recode` SET `p_price_order`='$price[$i]',`p_amount`='$amount[$i]',`p_subtotal`='$subtotal[$i]' WHERE p_id='$pid[$i]'");   
   

}

if($check=='已確認'){
echo "<script language=javascript>
alert('客戶已確認此報價單，頁面將會跳轉到報價歷史'); 
location.href='price_done_detail.php?id=$id';
</script>";
}
else if( $check=='未確認'){
//echo 'insert';
header("location:price_detail.php?id="+$id);
} else{ 
//header('location:price_detail.php?id=$id');
echo mysqli_error($con);
} 

}



?>
<!--報價-->
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/boxtext.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="utf-8"> 
<script language="javascript"> 
function printdiv(printpage) { //宣告控制列印的函式 引數是一個物件的內容將要被列印
  //printpage.style.border="black";
  
  var newstr = printpage.innerHTML; //獲取要列印的內容
  var oldstr = document.body.innerHTML; //原來body中的內容
  //$("div.boxtext").css("border-color","black","color","black");
  document.body.innerHTML =newstr; //用將要列印的內容替換原來body中的內容
  //document.body.css(" border-color","black","color","black")
  window.print(newstr); //開始列印
  document.body.innerHTML=oldstr; //再將原來body中的內容還原
  return false; } 
  
  window.onload=function(){
  var bt=document.getElementById("bt");
  var div_print=document.getElementById("div_print");
  //div_print.css("background-color","yellow");
  bt.onclick=function()
  {
  printdiv(div_print);}
  }
  
  
  function editdata(){
      var edit_elements=document.getElementsByClassName("readonly")
      for (i=0;i<edit_elements.length;i++){
      edit_elements[i].removeAttribute("readonly");
      edit_elements[i].style="border:inline";
      };
     
      document.getElementById('b').style.display = "inline";
      document.getElementById('a').style.display = "none";
      
      document.getElementById('cc').style.display = "inline";
      //document.getElementById('cc1').style.display = "inline";
      document.getElementById('cc2').style.display = "none";  
      
      
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
<div class="card">
<?php
if(!$data){
echo("Error: ".mysqli_error($con));
exit();
}
$rd=mysqli_fetch_array($data1)
?>       
<p class="card-header">狀態：客戶<?php echo $rd['p_status'];?></p>

<div id="div_print"  >
        <div class="boxtext">
        <p><b class="cname"><?php echo $rd['c_name'];?></b><br>
        地址:<b><?php echo $rd['c_address'];?></b><br>
        聯絡人:<b><?php echo $rd['c_cname'];?></b><br>
        連絡電話:<b><?php echo $rd['c_cphone'];?></b></p>
        </div>
    <p class="card-date">報價日期:<input type="date" name="p_date" value="<?php echo $rd['p_date'];?>" class="readonly date-input" readonly="readonly" form="form1" style="border:none;outline:medium;"><br>
    預計施工日期:<input type="date" name="p_start_date" value="<?php echo $rd['p_start_date'];?>" class="readonly date-input" readonly="readonly" form="form1" style="border:none;outline:medium;" ><br>預計完工日期:<input type="date" name="p_comp_date" value="<?php echo $rd['p_comp_date'];?>" class="readonly date-input" readonly="readonly" form="form1" style="border:none;outline:medium;"></p>
    
    <table id='detail_table' class="table" cellspacing="0">
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
<tr> 
        <td style="display:none"><!--style="display:none"-->
        <input  name="p_id[]" value="<?php echo $rs['p_id'];?>" form="form1" style="display:none"></td>
        <td ><?php echo $rs['p_name'];?></td>
        <td><?php echo $rs['p_device'];?></td>
        <td ><?php echo $rs['p_drive'];?></td>
        <td><?php echo $rs['p_trans'];?></td>
        <td><?php echo $rs['p_rotary'];?></td>
        <td><input type="number" name="price[]" value="<?php echo $rs['p_price_order'];?>" class="readonly table-input" readonly="readonly" form="form1" style="border:none;outline:medium;  "></td>
        <td><input type="number" name="amount[]" value="<?php echo $rs['p_amount'];?>" class="readonly table-input" readonly="readonly" form="form1" style="border:none;outline:medium;"></td>
        <td><input type="number" name="subtotal[]" value="<?php echo $rs['p_subtotal'];?>" class="readonly table-input" readonly="readonly" form="form1" style="border:none;outline:medium;"></td>        
      </tr>      <?php } ?>
      <tr>
        <td colspan="6"></td>
        <td>總計</td>
        <td><input id="total" name="total" type="number" value="<?php echo $rd['total'];?>" class="readonly  table-input" readonly="readonly" form="form1" style="border:none"></td>        
      </tr>

    </table>
    <table class="table" cellspacing="0">
      <tr>
      <th colspan="3">合約</th>
      </tr>
      <tr >
      <td colspan="3" style="text-align: left;">一、本報價有效期限為十天。<br>
      二、更新之零組件均享有一年保固服務。<br>
      三、上列報價之內容為現場之缺失，為維護設備使用之安全，建議管委會、車位所有權人同意予以修繕，以避免因零件故障老化導致損害。<br>
      四、付款方式:完工驗收以現金支付。<br>
      五、接洽人:何小姐<br>
      六、如同意施工請簽名確認後，傳真或寄回本公司作業，謝謝!<br>
      公司地址:台中市太平區長安路233巷6號<br>
      電話:(04)2391-3013<br>
      傳真:(04)2391-3010<br>
      
      </td>
      </tr>
      <tr>
      <td>報價簽章欄</td>
      <td>收發簽章欄</td>
      <td>確認簽章欄</td>
      </tr>
      <tr height=100px>
      <td ></td>
      <td></td>
      <td></td>
      </tr>
      </table>
    </div>
    <form id="form1" name="form1" method="post" action="" class="card-end"> 
    <p style="display:none" id="cc">
    <input type="checkbox"  id="client_check"  name="check" value="已確認" class='check'><label for="client_check" >客戶已確認</label></p>
    
    <button id="cc2"  name="client_check" type="sumbit" style="display:inline" onClick="check()" class="end-btn bt-3 bt-g">客戶確認</button>
    
    <button id="a"  name="edit" type="button" onClick="editdata()" style="display:inline" class="end-btn bt-3 bt-y">編輯</button>
   <button id="b"  name="save" type="sumbit"  style="display:none" class="end-btn bt-3 bt-y">儲存</button>
    <input name="name" type="button" id ="bt" value="列印" class="end-btn bt-3 bt-r">
    </form>
    

    </div>
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="/project/js/price.js"></script>
  <script src="/project/js/list.js"></script>
</body> 


</html>