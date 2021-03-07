<?php
include("login_connect.php");
if(isset($_POST['insert'])){
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
//if($_POST["insert"]!=""){


$name=@$_FILES['placeimg']['name'];
$tmp_name=@$_FILES['placeimg']['tmp_name'];

move_uploaded_file($tmp_name,"../img/".$name);
 
$sname=@$_FILES['sizeimg']['name'];
$stmp_name=@$_FILES['sizeimg']['tmp_name'];

move_uploaded_file($stmp_name,"../img/".$sname);


$query="INSERT INTO `client`( `c_name`, `c_phone`, `c_address`, `c_uniform`, `c_cname`, `c_cphone`, `c_caddress`, `c_fname`, `c_fphone`, `c_faddress`, `c_paytype`, `c_localimg`, `c_sizeimg`) VALUES ('$_POST[c_name]','$_POST[c_phone]','$_POST[c_address]','$_POST[c_idunmber]','$_POST[chairman_name]','$_POST[chairman_phone]','$_POST[chairman_address]','$_POST[finance_name]','$_POST[finance_phone]','$_POST[finance_address]','$_POST[pay_type]','".$name."','".$sname."')";

$result = mysqli_query($con,$query);
if($result){
header('location:client_add.php'); 
}else{ echo 'data nono'.mysqli_error($con);}
}

?>
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/table-client.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="utf-8"> 
<script>
function check(){
var isNum = /^[0-9]*$/;
if(!isNum.test(add_client.c_phone.value)){
  alert("大樓電話請填入數字!");
  eval("document.add_client['c_phone'].focus()"); 
  return (false);
}else if(add_client.c_idunmber.value.length!=8){
  alert("統一編號是8位數喔!");
  eval("document.add_client['c_idunmber'].focus()");
  return (false);
}else if(!isNum.test(add_client.c_idunmber.value)){
  alert("統一編號請填入數字!");
  eval("document.add_client['c_idunmber'].focus()");
  return (false);
}else if(!isNum.test(add_client.chairman_phone.value)){
  alert("主委電話請填入數字!");
  eval("document.add_client['chairman_phone'].focus()"); 
  return (false);
}else if(!isNum.test(add_client.finance_phone.value)){
  alert("財委電話請填入數字!");
  eval("document.add_client['finance_phone'].focus()"); 
  return (false);
}else{
  return (true);
  document.add_client.submit();
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
        <li class="" onclick="location.href='client.php'"><span class="span">客戶管理</span>
        </li>
        <li class="select" onclick="location.href='client_add.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">新增客戶</span></li>
     </ul>
    
  </aside>
<div id='content'>
<div class="card"> 
<div class="card-header"><h3>新增客戶資料</h3></div>
    <form id="add_client" name="add_client" enctype="multipart/form-data" method="post" action="client_add.php" >
        <div class='item'>
            <div class="item-head">客戶</div>
            <div class="item-content">
            大樓名稱<input type="text" name="c_name" required class='input'/>
            大樓電話<input type="text" name="c_phone" required class='input'/>
            統一編號<input type="text" name="c_idunmber" class='input'/>
            大樓地址<input type="text" name="c_address" required class='input'/>
            </div>
        </div>
        <div class='item'>
            <div class="item-head">主委</div>
            <div class="item-content">
            主委姓名<input type="text" name="chairman_name" required class='input'/><br>
            主委電話<input type="text" name="chairman_phone" required class='input'/><br>
            主委地址<input type="text" name="chairman_address" class='input'/>
        </div>
        </div>
        <div class='item'>
            <div class="item-head">財委</div>
            <div class="item-content">
            財委姓名<input type="text" name="finance_name" class='input'/>
            財委電話<input type="text" name="finance_phone" class='input'/>
            財委地址<input type="text" name="finance_address" class='input'/>
        </div></div>
        <div class='item'>
            <div class="item-head">付款方式</div>
            <div class="item-content">    
        <textarea name="pay_type" class="item-mark" placeholder="付款方式"></textarea>
        </div></div>
        <div class='item'>
        <div class="item-head">上傳圖片</div>


        <div class="item-content">
        位置圖
        <label class="end-btn bt-3 bt-r"><input id="upload_img" style="display:none;" type="file" name="placeimg"><i class="fa fa-photo"></i>上傳圖片</label><br><br>
        尺寸圖
        <label class="end-btn bt-3 bt-r"><input id="upload_img" style="display:none;" type="file" name="sizeimg"><i class="fa fa-photo"></i>上傳圖片</label>

        </div></div>
    <div class="item-end">
    <input type="submit" name="insert" value="新增" class="end-btn bt-3 bt-g" onclick="return check(this.form)"></div>
    </form>
    </div>
    </div>
<script src="/project/js/list.js"></script>
</body> 


</html>