<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

$id=@$_GET["id"];
$p_name=@$_GET['p_name'];
$m_type=@$_GET['m_type'];
$price_no=@$_GET['price_no'];
$m_pno=@$_GET['m_pno'];

if (isset($_POST['save'])){
$m_in_time=$_POST['m_in_time'];
$m_out_time=$_POST['m_out_time'];
$m_p_end_date=$_POST['m_p_end_date'];
$me_001=$_POST['me_001'];
$id=$_POST["id"];
$p_name=$_POST['p_name'];
$m_type=$_POST['m_type'];
$price_no=$_POST['price_no'];
$m_pno=$_POST['m_pno'];


                $me_001 = @$_POST['me_001'];
                $me_002 = @$_POST['me_002'];
                $me_003 = @$_POST['me_003'];
                $me_004 = @$_POST['me_004'];
                $me_005 = @$_POST['me_005'];
                $me_006 = @$_POST['me_006'];
                $me_007 = @$_POST['me_007'];
                $me_008 = @$_POST['me_008'];
                $me_009 = @$_POST['me_009'];
                $me_010 = @$_POST['me_010'];
                $me_011 = @$_POST['me_011'];
                $me_012 = @$_POST['me_012'];
                $me_013 = @$_POST['me_013'];
                $me_014 = @$_POST['me_014'];
                $me_015 = @$_POST['me_015'];
                $me_016 = @$_POST['me_016'];
    
                $se_001 = @$_POST['se_001'];
                $se_002 = @$_POST['se_002'];
                $se_003 = @$_POST['se_003'];
                $se_004 = @$_POST['se_004'];
    
                $hye_001 = @$_POST['hye_001'];
                $hye_002 = @$_POST['hye_002'];
                $hye_003 = @$_POST['hye_003'];
                $hye_004 = @$_POST['hye_004'];
                $hye_005 = @$_POST['hye_005'];
                $hye_006 = @$_POST['hye_006'];
                $hye_007 = @$_POST['hye_007'];
                $hye_008 = @$_POST['hye_008'];
                $hye_009 = @$_POST['hye_009'];
    
                $ye_001 = @$_POST['ye_001'];
                $ye_002 = @$_POST['ye_002'];
                $ye_003 = @$_POST['ye_003'];
                $ye_004 = @$_POST['ye_004'];
                $ye_005 = @$_POST['ye_005'];
    
    
                $ma_001 = @$_POST['ma_001'];
                $ma_002 = @$_POST['ma_002'];
                $ma_003 = @$_POST['ma_003'];
                $ma_004 = @$_POST['ma_004'];
                $ma_005 = @$_POST['ma_005'];
                $ma_006 = @$_POST['ma_006'];
                $ma_007 = @$_POST['ma_007'];
                $ma_008 = @$_POST['ma_008'];
                $ma_009 = @$_POST['ma_009'];
                $ma_010 = @$_POST['ma_010'];
                $ma_011 = @$_POST['ma_011'];
                $ma_012 = @$_POST['ma_012'];
                $ma_013 = @$_POST['ma_013'];
                $ma_014 = @$_POST['ma_014'];
                $ma_015 = @$_POST['ma_015'];
                $ma_016 = @$_POST['ma_016'];
                $ma_017 = @$_POST['ma_017'];
                $ma_018 = @$_POST['ma_018'];
                $ma_019 = @$_POST['ma_019'];
                $ma_020 = @$_POST['ma_020'];
                $ma_021 = @$_POST['ma_021'];
                $ma_022 = @$_POST['ma_022'];
                $ma_023 = @$_POST['ma_023'];
                $ma_024 = @$_POST['ma_024'];
    
                $mm_001 = @$_POST['mm_001'];
                $mm_002 = @$_POST['mm_002'];
                $mm_003 = @$_POST['mm_003'];
                $mm_004 = @$_POST['mm_004'];
                $mm_005 = @$_POST['mm_005'];
                $mm_006 = @$_POST['mm_006'];
                $mm_007 = @$_POST['mm_007'];
                $mm_008 = @$_POST['mm_008'];
                $mm_009 = @$_POST['mm_009'];
                $mm_010 = @$_POST['mm_010'];
                $mm_011 = @$_POST['mm_011'];
                $mm_012 = @$_POST['mm_012'];
                $mm_013 = @$_POST['mm_013'];
                $mm_014 = @$_POST['mm_014'];
                $mm_015 = @$_POST['mm_015'];
                $mm_016 = @$_POST['mm_016'];
                $mm_017 = @$_POST['mm_017'];
                $mm_018 = @$_POST['mm_018'];
                $mm_019 = @$_POST['mm_019'];
                $mm_020 = @$_POST['mm_020'];
                $mm_021 = @$_POST['mm_021'];
                $mm_022 = @$_POST['mm_022'];
                $mm_023 = @$_POST['mm_023'];
                $mm_024 = @$_POST['mm_024'];
                
                            
                $m_remarks=@$_POST['m_remarks'];



if($p_name=='電梯'){

 $sql1=mysqli_query($con,"UPDATE `year_elevator` SET `me_001`='$me_001',`me_002`='$me_002',`me_003`='$me_003',`me_004`='$me_004',`me_005`='$me_005',`me_006`='$me_006',`me_007`='$me_007',`me_008`='$me_008',`me_009`='$me_009',`me_010`='$me_010',`me_011`='$me_011',`me_012`='$me_012',`me_013`='$me_013',`me_014`='$me_014',`me_015`='$me_015',`me_016`='$me_016',`se_001`='$se_001',`se_002`='$se_002',`se_003`='$se_003',`se_004`='$se_004',`hye_001`='$hye_001',`hye_002`='$hye_002',`hye_003`='$hye_003',`hye_004`='$hye_004',`hye_005`='$hye_005',`hye_006`='$hye_006',`hye_007`='$hye_007',`hye_008`='$hye_008',`hye_009`='$hye_009',`ye_001`='$ye_001',`ye_002`='$ye_002',`ye_003`='$ye_003',`ye_004`='$ye_004',`ye_005`='$ye_005' where m_no='$id'");
 /*if($sql1){echo '1';}else{echo '2';}

if($m_in_time!='' and $m_out_time!='' and $m_p_end_date!='' ){
$sql=mysqli_query($con,"UPDATE `maintain` SET`m_in_time`='$m_in_time',`m_out_time`='$m_out_time' ,`m_p_end_date`='$m_p_end_date' WHERE m_no='$id'");

   /*if($sql){
    
    echo "<script language=javascript>
    alert('已經儲存'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type& price_no=$price_no';
    </script>";
    }
     else{ 
    echo mysqli_error($con);
    } 

}*/
}

/*if($m_in_time!='' and $m_out_time!='' and $m_p_end_date!='' ){
$sql=mysqli_query($con,"UPDATE `maintain` SET`m_in_time`='$m_in_time',`m_out_time`='$m_out_time' ,`m_p_end_date`='$m_p_end_date' WHERE m_no='$id'");

   if($sql){
    
    echo "<script language=javascript>
    alert('已經儲存'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type& price_no=$price_no';
    </script>";
    }
     else{ 
    echo mysqli_error($con);
    } 

}
else if($m_in_time!='' or $m_out_time!='' or $m_p_end_date!=''){
$sql=mysqli_query($con,"UPDATE `maintain` SET`m_in_time`='$m_in_time',`m_out_time`='$m_out_time' ,`m_p_end_date`='$m_p_end_date' WHERE m_no='$id'");
    
if($sql){
         header("location:maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type & price_no=$price_no");
    }
     else{ 
    echo mysqli_error($con);
    } 
}*/
    
/*if($select_item!=''){
$sqll=mysqli_query($con,"UPDATE `job_work` SET `j_work`='$j_work',`j_cheak`='$select_item' where j_no='$id' ");
    if($sqll){
    
    echo "<script language=javascript>
    alert('可以按完成囉~'); 
    location.href='job_detail.php?id=$id';
    </script>";
    }
     else{ 
    echo {echo"no". mysqli_error($con);} 
    }
else{
$sqll=mysqli_query($con,"UPDATE `job_work` SET `j_work`='$j_work',`j_cheak`='$select_item' where j_no='$id' ");
    if($sqll){
         header("location:order_detail.php?id=$id");
    }
     else{echo"no". mysqli_error($con);} 

}*/
}
//and m.m_date like'%$_POST[m_date]%'
if(isset($_POST['button'])){
 $data2=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_status='已結束' and  m.m_no='$id' ");
}else{
  $data2=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_status='已結束'and m.m_no='$id'");
}



$ma =mysqli_query($con,"SELECT * FROM `maintain` m join quote q on (m.price_no=q.price_no) join client c on(q.c_no=c.c_no) join order_recode o on (o.p_id=m.p_id) join produce pro on(o.p_no=pro.p_no) join month_attached_item ma on(ma.m_no=m.m_no)where m.m_no='$id'");
$mm =mysqli_query($con,"SELECT * FROM `maintain` m join quote q on (m.price_no=q.price_no) join client c on(q.c_no=c.c_no) join order_recode o on (o.p_id=m.p_id) join produce pro on(o.p_no=pro.p_no) join month_machine_item mm on(mm.m_no=m.m_no) where m.m_no='$id'");


$ye =mysqli_query($con,"SELECT * FROM `maintain` m join quote q on (m.price_no=q.price_no) join client c on(q.c_no=c.c_no) join order_recode o on (o.p_id=m.p_id) join produce pro on(o.p_no=pro.p_no)join year_elevator ye on(ye.m_no=m.m_no) where m.m_no='$id'");





$data = mysqli_query($con,"SELECT * FROM `maintain`m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no)  where m.m_no='$id'");

//$fstardate=@$_POST[fstardate];
//and f.f_star_date like'%$fstardate%' 
 if(isset($_POST['fix'])){
        $data5=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.f_statue='0' and m.m_no='$id'");
    } 
    else{
        $data5=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.f_statue='0' and m.m_no='$id'");
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
    <!--<script type="text/javascript">
        function printdiv(printpage) { //宣告控制列印的函式 引數是一個物件的內容將要被列印
            var newstr = printpage.innerHTML; //獲取要列印的內容
            var oldstr = document.body.innerHTML; //原來body中的內容
            document.body.innerHTML = newstr; //用將要列印的內容替換原來body中的內容
            window.print(); //開始列印
            document.body.innerHTML = oldstr; //再將原來body中的內容還原
            return false;
        }
        window.onload = function() {
            var bt = document.getElementById("bt");
            var div_print = document.getElementById("div_print");
            bt.onclick = function() {
                printdiv(div_print);
            }
        }
        /*function 
        $('input[type="radio"]
        ).on("click",function(){
        			   alert('ok');

        });*/


        function editdata() {
            var edit_elements = document.getElementsByClassName("readonly")
            for (i = 0; i < edit_elements.length; i++) {
                edit_elements[i].removeAttribute("readonly");
                edit_elements[i].style = "border:inline";
              
            };

            document.getElementById('b').style.display = "inline";
            document.getElementById('a').style.display = "none";
            document.getElementById('done').style.display = "inline";
            document.getElementById('me_003').style.display = "inline";
            document.getElementById('s').style.display = "none";
        }
    </script>-->

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
<div id='content' id="medit_table1">
<div class="card">
<div class='card-header'><?php echo $m_pno;?>保養紀錄</div>
<table id="medit_table" class='table'>
<?php
    while ($rs=mysqli_fetch_array($data)){
     //$type=$rs['m_type'];
     //setcookie("type",$type,time()+3600);     
?>
    <tr>
    <td >保養日期</td>
    <td ><?php echo $rs['m_date'];?></td>
    <td >保養時間</td>
    <td ><?php echo $rs['m_type'];?></td>
    </tr>
    <tr>
    <td  colspan="2">產品名稱</td>
    <td  colspan="2"><?php echo $rs['p_name'];?></td>
    </tr>
    <tr>
    <td>機械停車設備</td>
    <td><?php echo $rs['p_device'];?></td>
    <td>驅動方式</td>
    <td><?php echo $rs['p_drive'];?></td>
    </tr>
    <tr>
    <td>傳動元件</td>
    <td><?php echo $rs['p_trans'];?></td>
    <td>旋轉台</td>
    <td><?php echo $rs['p_rotary'];?></td>
    </tr>
    <tr>
    <td >大樓名稱</td>
    <td ><?php echo $rs['c_name'];?></td>
    <td >大樓地址</td>
    <td ><?php echo $rs['c_address'];?></td>
    </tr>
    <tr>
    <td >聯絡電話</td>
    <td ><?php echo $rs['c_phone'];?></td>
    <td >使用許可證有效日期</td>
    <td ><?php echo $rs['m_license'];?></td>
    </tr>
    <tr>
    <td >進入時間</td>
    <td><input type="time" name="m_in_time" value="<?php echo $rs['m_in_time'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    <td >出去時間</td>
    <td><input type="time" name="m_out_time" value="<?php echo $rs['m_out_time'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td >實際施工日期</td>
    <td><input type="date" name="m_p_end_date" value="<?php echo $rs['m_p_end_date'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    <td >預計施工時間</td>
    <td><?php echo $rs['m_pretime'];?></td>
    </tr>

<?php
    }
?>
</table>
<!--<form id="form2" name="form2" method="post" action="" class='item-end'>
<button id="a" name="edit" type="button" onClick="location.href='maintain_medit_edit.php?id=$id&p_name=$p_name&m_type=$m_type&price_no=$price_no&m_pno=$m_pno';" style="display:inline" class="end-btn bt-3 bt-y">編輯</button>
<button id="b" name="save" type="sumbit" style="display:none" class="end-btn bt-3 bt-y">儲存</button>

</form>-->

<p>
<h4>維護檢視項目</h4>
<?php 
        
        if($p_name=='附屬設備' ){$rs=mysqli_fetch_array($ma);}
        
        else if ($p_name=='停車設備' ){$rs=mysqli_fetch_array($mm);}
        
        else if ($p_name=='電梯'){$rs=mysqli_fetch_array($ye );}
        


?>
<div id="month" class="item">
<div class="item-head">月保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >機械式環境狀況:</td>
    <td  >

        <input type="text" name="me_001" value="<?php echo $rs['me_001'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >受電盤、抑御盤、信號盤：</td>
    <td  > 
    <input type="text" name="me_002" value="<?php echo $rs['me_002'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >電動機、牽引機：</td>
    <td  >   
<input type="text" id="s" name="me_003" value="<?php echo $rs['me_003'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >電動發電機、啟動盤：</td>
    <td  ><input type="text" name="me_004" value="<?php echo $rs['me_004'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >車廂走行狀態：</td>
    <td  ><input type="text" name="me_005" value="<?php echo $rs['me_005'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >對外外部聯絡裝置：</td>
    <td  ><input type="text" name="me_006" value="<?php echo $rs['me_006'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >停電燈裝置：</td>
    <td  ><input type="text" name="me_007" value="<?php echo $rs['me_007'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >車廂內裝、照明、通風扇：</td>
    <td  ><input type="text" name="me_008" value="<?php echo $rs['me_008'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >車廂上環境裝置：</td>
    <td  ><input type="text" name="me_009" value="<?php echo $rs['me_009'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >門之開閉裝置：</td>
    <td  ><input type="text" name="me_010" value="<?php echo $rs['me_010'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  > 車廂著床狀態：</td>
    <td  ><input type="text" name="me_011" value="<?php echo $rs['me_011'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >門開閉狀態：</td>
    <td  ><input type="text" name="me_012" value="<?php echo $rs['me_012'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  > 導滑器、導論：</td>
    <td  ><input type="text" name="me_013" value="<?php echo $rs['me_013'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >給油器：</td>
    <td  ><input type="text" name="me_014" value="<?php echo $rs['me_014'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >乘車門、門踏板：</td>
    <td  ><input type="text" name="me_015" value="<?php echo $rs['me_015'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >乘場按鈕、指示燈：</td>
    <td  ><input type="text" name="me_016" value="<?php echo $rs['me_016'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

</table>
</div>

<div id="season" class="item">
<div class="item-head">季保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >車廂操作盤：</td>
    <td  ><input type="text" name="se_001" value="<?php echo $rs['se_001'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >車廂門、門踏板：</td>
    <td ><input type="text" name="se_002" value="<?php echo $rs['se_002'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >閉門安全裝置：</td>
    <td ><input type="text" name="se_003" value="<?php echo $rs['se_003'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >門手動開放：</td>
    <td ><input type="text" name="se_004" value="<?php echo $rs['se_004'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
</table>

</div>

<div id="half_year" class="item">
<div class="item-head">半年保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >電磁煞車器：</td>
    <td  ><input type="text" name="hye_001" value="<?php echo $rs['hye_001'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >乘場選擇器：</td>
    <td ><input type="text" name="hye_002" value="<?php echo $rs['hye_002'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >調速器：</td>
    <td ><input type="text" name="hye_003" value="<?php echo $rs['hye_003'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >升降路內、機坑內環境狀況：</td>
    <td ><input type="text" name="hye_004" value="<?php echo $rs['hye_004'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >車廂、配重之轉向輪：</td>
    <td  ><input type="text" name="hye_005" value="<?php echo $rs['hye_005'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >主鋼索、調速鋼索、檢點：</td>
    <td ><input type="text" name="hye_006" value="<?php echo $rs['hye_006'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >導軌檢點、鋼帶檢點：</td>
    <td ><input type="text" name="hye_007" value="<?php echo $rs['hye_007'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >配重器：</td>
    <td ><input type="text" name="hye_008" value="<?php echo $rs['hye_008'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  > DrSW動作、Dr Lock機構檢點：</td>
    <td ><input type="text" name="hye_009" value="<?php echo $rs['hye_009'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

</table>
</div>

<div id="year" class="item">
<div class="item-head">年保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >上、下部極限開關動作確認：</td>
    <td  ><input type="text" name="ye_001" value="<?php echo $rs['ye_001'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >緊急停止裝置檢點：</td>
    <td ><input type="text" name="ye_002" value="<?php echo $rs['ye_002'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >移動電纜：</td>
    <td ><input type="text" name="ye_003" value="<?php echo $rs['ye_003'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >緩衝器檢點：</td>
    <td ><input type="text" name="ye_004" value="<?php echo $rs['ye_004'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >各張力輪：</td>
    <td  ><input type="text" name="ye_005" value="<?php echo $rs['ye_005'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
</table>
</div>

<div id="park" class="item">
<div class="item-head">停車設備</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >注意事項項目：</td>
    <td  ><input type="text" name="mm_001" value="<?php echo $rs['mm_001'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >承載存放限制：</td>
    <td ><input type="text" name="mm_002" value="<?php echo $rs['mm_002'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >各式按鈕檢視：</td>
    <td ><input type="text" name="mm_003" value="<?php echo $rs['mm_003'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  > 設備運轉測試：</td>
    <td ><input type="text" name="mm_004" value="<?php echo $rs['mm_004'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >車台定位檢視：</td>
    <td  ><input type="text" name="mm_005" value="<?php echo $rs['mm_005'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  > 車台水平檢視：</td>
    <td ><input type="text" name="mm_006" value="<?php echo $rs['mm_006'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >警(指)是裝置檢視：</td>
    <td  ><input type="text" name="mm_007" value="<?php echo $rs['mm_007'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  > 升降、橫移連鎖裝置檢視：</td>
    <td ><input type="text" name="mm_008" value="<?php echo $rs['mm_008'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >光電開關檢視： </td>
    <td  ><input type="text" name="mm_009" value="<?php echo $rs['mm_009'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >限動、檢測開關檢視：</td>
    <td ><input type="text" name="mm_010" value="<?php echo $rs['mm_010'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >驅動元件檢視：</td>
    <td  ><input type="text" name="mm_011" value="<?php echo $rs['mm_011'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >各式傳動元件檢視：：</td>
    <td ><input type="text" name="mm_012" value="<?php echo $rs['mm_012'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >油壓元件檢視：</td>
    <td  ><input type="text" name="mm_013" value="<?php echo $rs['mm_013'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >鍊條、鋼索檢視：</td>
    <td ><input type="text" name="mm_014" value="<?php echo $rs['mm_014'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >電控系統檢視：</td>
    <td  ><input type="text" name="mm_015" value="<?php echo $rs['mm_015'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >機械結構、置車板機廂檢視：</td>
    <td  ><input type="text" name="mm_016" value="<?php echo $rs['mm_016'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >安全扣元件檢視：</td>
    <td  ><input type="text" name="mm_017" value="<?php echo $rs['mm_017'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >油壓防爆閥檢視：</td>
    <td  ><input type="text" name="mm_018" value="<?php echo $rs['mm_018'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >防落裝置檢視：</td>
    <td  ><input type="text" name="mm_019" value="<?php echo $rs['mm_019'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >照明裝置檢視：</td>
    <td  ><input type="text" name="mm_020" value="<?php echo $rs['mm_020'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >機械式檢視：</td>
    <td  ><input type="text" name="mm_021" value="<?php echo $rs['mm_021'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >機械式檢視：</td>
    <td  ><input type="text" name="mm_022" value="<?php echo $rs['mm_022'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >機坑積水檢視：</td>
    <td  ><input type="text" name="mm_023" value="<?php echo $rs['mm_023'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >停放之車輛符合承載規範：</td>
    <td  ><input type="text" name="mm_024" value="<?php echo $rs['mm_024'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
</table>
</div>

<div id="subsidiary" class="item">
<div class="item-head">附屬設備</div>
<table class='item-table' cellspacing="0">

    <tr>
    <td  >注意事項項目：</td>
    <td  ><input type="text" name="ma_001" value="<?php echo $rs['ma_001'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >承載存放限制：</td>
    <td ><input type="text" name="ma_002" value="<?php echo $rs['ma_002'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >各式按鈕檢視：</td>
    <td ><input type="text" name="ma_003" value="<?php echo $rs['ma_003'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  > 設備運轉測試：</td>
    <td ><input type="text" name="ma_004" value="<?php echo $rs['ma_004'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >車台定位檢視：</td>
    <td  ><input type="text" name="ma_005" value="<?php echo $rs['ma_005'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  > 車台水平檢視：</td>
    <td ><input type="text" name="ma_006" value="<?php echo $rs['ma_006'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >警(指)是裝置檢視：</td>
    <td  ><input type="text" name="ma_007" value="<?php echo $rs['ma_007'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  > 升降、橫移連鎖裝置檢視：</td>
    <td ><input type="text" name="ma_008" value="<?php echo $rs['ma_008'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >光電開關檢視： </td>
    <td  ><input type="text" name="ma_009" value="<?php echo $rs['ma_009'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >限動、檢測開關檢視：</td>
    <td ><input type="text" name="ma_010" value="<?php echo $rs['ma_010'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >驅動元件檢視：</td>
    <td  ><input type="text" name="ma_011" value="<?php echo $rs['ma_011'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >各式傳動元件檢視：：</td>
    <td ><input type="text" name="ma_012" value="<?php echo $rs['ma_012'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >油壓元件檢視：</td>
    <td  ><input type="text" name="ma_013" value="<?php echo $rs['ma_013'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >鍊條、鋼索檢視：</td>
    <td ><input type="text" name="ma_014" value="<?php echo $rs['ma_014'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >電控系統檢視：</td>
    <td  ><input type="text" name="ma_015" value="<?php echo $rs['ma_015'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >機械結構、置車板機廂檢視：</td>
    <td  ><input type="text" name="ma_016" value="<?php echo $rs['ma_016'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >安全扣元件檢視：</td>
    <td  ><input type="text" name="ma_017" value="<?php echo $rs['ma_017'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >油壓防爆閥檢視：</td>
    <td  ><input type="text" name="ma_018" value="<?php echo $rs['ma_018'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >防落裝置檢視：</td>
    <td  ><input type="text" name="ma_019" value="<?php echo $rs['ma_019'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >照明裝置檢視：</td>
    <td  ><input type="text" name="ma_020" value="<?php echo $rs['ma_020'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>

    <tr>
    <td  >機械式檢視：</td>
    <td  ><input type="text" name="ma_021" value="<?php echo $rs['ma_021'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >區格防護規定(欄杆)：</td>
    <td  ><input type="text" name="ma_022" value="<?php echo $rs['ma_022'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >機坑積水檢視：</td>
    <td  ><input type="text" name="ma_023" value="<?php echo $rs['ma_023'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>
    <tr>
    <td  >停放之車輛符合承載規範：</td>
    <td  ><input type="text" name="ma_024" value="<?php echo $rs['ma_024'];?>" class="readonly table-input" readonly="readonly" form="form2" style="border:none"></td>
    </tr>


</table>
</div>


<div class="item-end">
<textarea  class="readonly item-mark" readonly="readonly" form="form2"  Wrap="Virtual" >
備註:
<?php echo $rs['m_remarks'];?>
</textarea>

<!--input name="name" type="button" id="bt" value="列印" class='end-btn bt-3 bt-r'/-->
<input class="end-btn bt-3 bt-y" type="button" value="編輯 " onclick="location.href='maintain_medit_edit.php?id=<?php echo $rs['m_no']?>&p_name=<?php echo $rs['p_name']?>&m_type=<?php echo $rs['m_type']?>&price_no=<?php echo $rs['price_no']?>&m_pno=<?php echo $rs['m_pno']?>'">
</div>

<?php 

                      //for($i=1;$i<=mysqli_num_rows($data1);$i++){
                      //$rs=mysqli_fetch_row($data1);
?>

                          
<table class='table'>
<caption>保養歷史列表</caption>
    <tr>
    <th >保養日期</th>
    <th >保養狀態</th>
    <th >保養時間</th>
    <th >產品名稱</th>
    <th >保養詳細</th>
    </tr>

<?php
if(mysqli_num_rows($data2) > 0){    
for($i=1;$i<=mysqli_num_rows($data2);$i++){
$rs=mysqli_fetch_array($data2);

?>

    <tr>
    <td ><?php echo $rs['m_date'];?></td>
    <td ><?php echo $rs['m_status'];?></td>
    <td ><?php echo $rs['m_type'];?></td>
    <td ><?php echo $rs['p_name'];?></td>
    <td ><input class="btn bt-3" type="button" value="詳細 " onclick="location.href='maintain_medit.php?id=<?php echo $rs['m_no']?>&p_name=<?php echo $rs['p_name']?>&m_type=<?php echo $rs['m_type']?>&price_no=<?php echo $rs['price_no']?>&m_pno=<?php echo $rs['m_pno']?>'"></td>
    </tr>

<?php
}
}
else
{
echo '
    <tr>
	   <td colspan=5 align=center height=100px>No  Data found</td>
    </tr>
    ';
}
                ?>

</table>

<table class='table'>
<caption>維修歷史列表</caption>
    <tr>
    <th>維修日期</th>
    <th>大樓名稱</th>
    <th>產品類型</th>
    <th>維修詳細</th>
    </tr>
<?php
    if(mysqli_num_rows($data) > 0){
    for($i=1;$i<=mysqli_num_rows($data5);$i++){
    $rs=mysqli_fetch_array($data5);
?>

    <tr>
    <td ><?php echo $rs['f_star_date']?></td>
    <td ><?php echo $rs['c_name']?></td>
    <td ><?php echo $rs['m_pno']?></td>
    <td ><input class="btn bt-3" type="button" value="詳細 " onclick="location.href='fix_medit.php?id=<?php echo $rs['fix_no']?>&p_name=<?php echo $rs['p_name']?>&m_no=<?php echo $rs['m_no']?>&m_pno=<?php echo $rs['m_pno']?>&price_no=<?php echo $rs['price_no']?>'"></td>
    </tr>

<?php
}}
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
    <script src="/project/js/maintain.js"></script>
    <script src="/project/js/list.js"></script>
</body>

</html>