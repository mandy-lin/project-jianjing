<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
//客戶搜尋
if(@$_POST['name']!=''){
  $data=mysqli_query($con,"select * from client where c_name like '%$_POST[name]%' "); 
}
else{
  $data=mysqli_query($con,"select * from client");
}






//新增
if(isset($_POST['insert'])){

$p_price = @$_POST['p_price'];
$amount = @$_POST['amount'];
$subtotal = @$_POST['subtotal'];
date_default_timezone_set("Asia/Shanghai");
$dnum=substr(date("ymdHis"),2,9);
$total=array_sum($_POST['subtotal']);
$pid = @$_POST['p_id'];

print_r($_POST['p_id']);
print_r( $pid);
print_r( $p_price);
print_r( $amount);
print_r( $subtotal);
print_r( $dnum);
print_r( $total);
echo (count($p_price));




$insert=mysqli_query($con,"INSERT INTO `quote`(`price_no`,`o_status`, `p_status`, `p_date`, `p_start_date`,`p_comp_date`,`total`, `c_no`) VALUES ($dnum,'未完成','未確認','$_POST[price_date]','$_POST[price_start_date]','$_POST[price_comp_date]','$total','$_POST[ccid]')");


for ($i = 0; $i < count($p_price); $i++) {
       


      $sql=mysqli_query($con,"INSERT INTO `order_recode`( `p_no`, `p_price_order`,`p_amount`, `p_subtotal`, `price_no`)VALUES('$pid[$i]','$p_price[$i]','$amount[$i]','$subtotal[$i]',$dnum) "); 
       
       
       echo $dnum .$pid[$i].$p_price[$i] .$amount[$i] .$subtotal[$i]. "<br />";

    }


if($insert and $sql){
echo 'insert';
 $_POST = array();

header('location:price.php');
if (count($_POST) > 0) {
  
}
}else{ 
echo 'data nono'.mysqli_error($con);
}


}


?>
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel=stylesheet href=/project/css/boxtext.css>
<meta charset="utf-8"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript"> 

  function btn(id){

  //alert(id);
  var j='#'+id
  var jj='div#'+id
  $('.boxtext').not(j).remove();
  $('.brbr').remove();
  var datastring = 'value=' + id;
  document.getElementById("price_add").style.display="inline";
  }
 function handler(e){
  //alert(e.target.value);
  document.getElementById('price_comp_date').min = e.target.value;
}function Insert(form){

//return(false);
var total=document.getElementById('price_total');
//total.val();
//alert(total.innerHTML);

if(total.innerHTML==0){
alert("請先新增產品喔~");
return (false);
}else {
    return (true);
    alert("報價單完成囉~");
    document.form2.submit();
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
    <ul class="select">
        <li class="" onclick="location.href='price.php'"><span class="span">報價紀錄</span>
        </li>
        <li class="select" onclick="location.href='price_add.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">新增報價單</span></li>
        <li class="" onclick="location.href='price_history.php'"><span class="span">報價歷史</span></li>
     </ul>
     <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span></ul>
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
  
  </aside>  
  <div id='content'>
<div class="card">
    <form id="form1" name="form1" method="post" action="" class='card-header'>
          <p><input name="name" type="search" placeholder="請輸入大樓名稱" class="card-search"/>
              <input id="search" type="submit" value="搜尋" class='card-btn'>
              <input type="button" onclick="location.href='client_add.php'" value="新增客戶" class='card-btn'></p>
    </form>
          
 <div id="div_print">             
<?php

for($i=1;$i<=mysqli_num_rows($data);$i++){
$rs=mysqli_fetch_array($data);
$cid=$rs['c_no'];
?>    
      <div id='<?php echo $cid;?>' class="boxtext" onclick='btn(<?php echo $cid;?>)'
      >
      <!--label id="output"></label-->
      <p><input  type="hidden" value="<?php echo $cid;?>" name="ccid" form="form2" >
      <b class="cname"><?php echo $rs['c_name'];?></b><br>
      地址:<b ><?php echo $rs['c_address'];?></b><br>
      聯絡人:<b ><?php echo $rs['c_cname'];?></b><br>
      連絡電話:<b ><?php echo $rs['c_cphone'];?></b></p>

      </div><br class='brbr'>
      
<?php } ?> 

<div id="price_add" style="display:none">
        <p class="card-date">報價日期:<input class="date-input" type="date" name="price_date" form="form2" value="<?php echo date('Y-m-d')?>"><br>
    預計施工日期:<input type="date" class="date-input"name="price_start_date" form="form2"  onchange="handler(event);">
    <br>
    預計完工日期:<input type="date" class="date-input"name="price_comp_date" form="form2" id="price_comp_date"></p>

    <table id="product" class="table" cellspacing="0" >
        <caption>新報價單</caption>
          <tr>
            <th>類型</th>
            <th>設備</th>
            <th>驅動</th>
            <th>傳動</th>
            <th>單價</th>
            <th>數量</th>
            <th>小計</th>
           
          </tr>
          <tr>
          
            <td>
            <input id="pid" style="display: none" >
            <select id='type' name='type' class="table-input">
                <option value=''>選擇類型</option>  
                <option value='停車設備'>停車設備</option>
                <option value='附屬設備'>附屬設備</option>
                <option value='電梯'>電梯</option>
            </select>
            </td>
            <td><select id='p_device' name="p_device" class="table-input">
                <option value=''>選擇設備</option>
            </select>
            <br>
            <select id='roll' style="display: none" name="roll" class="table-input">
            </select> 
            </td>
            <td>
            <select id='drive' name="drive" class="table-input">
                <option value=''>選擇驅動</option>  
            </select>
            </td>
            <td><select id='transmission' name="transmission" class="table-input">
                <option value=''>選擇傳動</option>
            </select>
            </td>
                     
            <td>
            <input id="price" type="number" value="0" name="p_price" form="form2" class="table-input">
            </td>
            <td><input id="amount" type='number' value="1" min="1" name="price_amount" form="form2" class="table-input"></td>
            <!--td></td-->  <!--小計-->
            <td><button id='add' name="add" class="btn bt-3">新增</button></td>

          </tr>
<!--
          <tr>
            <th colspan="4">零件名稱</th>
            <th>單價</th>
            <th>數量</th>
            <th>小計</th>
            <th></th>
          </tr>
          <tr>
          <td colspan="4"><input id="comp" type="text" name="price_comp"></td>
          <td><input id="comp_price" type="number" name="price_comp_money"></td>
          <td><input id="comp_amount" type='number' name="price_comp_amount"></td>
          <td id="comp_total" name="price_subtotal">$</td>
          <td><input id='add1' type='button' value="新增"></td>
         </tr>-->
          <tr>
        <td colspan="5"></td>
        <td >總計</td>
        <td id="price_total">0</td>
          </tr>
      </table> 
      
<form id="form2" name="form2" method="post" action="">     
      <p class="card-end"><input type="submit" name="insert" onclick="return  Insert(this.form)" value="完成" class="end-btn bt-3 bt-red">
      </p></form>
      
      </div>
      
      </div>
      
      </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="/project/js/price.js"></script>
<script type="text/javascript" >
$(document).on('change','#transmission',function (){
var gindex3=$(this).parent().parent().index();
var type = $('#type :selected').val();
var p_device = $('#p_device :selected').val();
var drive = $('#drive :selected').val();
var transmission = $('#transmission :selected').val();
var roll = $('#roll :selected').val(); //alert(page+type+p_device+drive+transmission+roll);
		$.ajax({
			url:"price_add_id.php",
			method:"post",
			data:{type: type,
                p_device: p_device,
                drive: drive,
                transmission: transmission,
                roll: roll},
			success:function(data){

document.getElementById('pid').value=data;
                console.log(data);
			}
		});
    });
$(document).on('change', '#type', function() {
var type1 = $('#type :selected').val();
if (type1=='電梯'){
   $.ajax({
      url:"price_add_id.php",				
      method:"POST",
      data:{
        type: type1,
        p_device: '',
        drive: '',
        transmission: '',
        roll: ''
      },			
      success:function(data){
     console.log(data);
document.getElementById('pid').value=data;
         
        }
    })
 
    }
});	
</script>   
<script src="/project/js/list.js"></script>
</body> 
</html>
