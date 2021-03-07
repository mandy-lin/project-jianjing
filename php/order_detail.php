<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
$id=$_GET["id"];

$data1 = mysqli_query($con,"SELECT DISTINCT c_name,c_address , c_cname, c_cphone,p_date ,o_date,p_comp_date,p_start_date,p_end_date,o_actual_date,total ,o_status FROM `quote`q join client c on(q.c_no=c.c_no) join order_recode o on(q.price_no=o.price_no) where q.price_no='$id'");

$data = mysqli_query($con,"SELECT p_name,o.p_no,o.p_id,p_device,p_drive,p_trans,p_rotary ,p_price_order,p_amount, p_subtotal,p_maintain_time FROM `quote`q join client c on(q.c_no=c.c_no) join order_recode o on(q.price_no=o.price_no) join produce p on (o.p_no=p.p_no) where q.price_no='$id'");




if(isset($_POST['save'])){


$p_end_date = @$_POST['p_end_date'];
$o_actual_date = @$_POST['o_actual_date'];
$o_date = @$_POST['o_date'];




if($p_end_date!='' and $o_actual_date!=''){
$sql=mysqli_query($con,"UPDATE `quote` SET`p_end_date`='$p_end_date',`o_actual_date`='$o_actual_date' ,`o_date`='$o_date'  WHERE price_no='$id'");
    if($sql){
    
    echo "<script language=javascript>
    alert('可以按完成囉~'); 
    location.href='order_detail.php?id=$id';
    </script>";
    }
     else{ 
    echo mysqli_error($con);
    } 

}else if($p_end_date!='' or $o_actual_date!=''){
$sql=mysqli_query($con,"UPDATE `quote` SET`p_end_date`='$p_end_date',`o_actual_date`='$o_actual_date' ,`o_date`='$o_date'  WHERE price_no='$id'");
    if($sql){
         header("location:order_detail.php?id=$id");
    }
     else{ 
    echo mysqli_error($con);
    } 

}
/*else if($p_end_date!=''){
$sql=mysqli_query($con,"UPDATE `quote` SET`p_end_date`='$p_end_date'  WHERE price_no='$id'");
    if($sql){
         header("location:order_detail.php?id=$id");
    }
     else{ 
    echo mysqli_error($con);
    } 

}else if( $o_actual_date!=''){
$sql=mysqli_query($con,"UPDATE `quote` SET`o_actual_date`='$o_actual_date'  WHERE price_no='$id'");
    if($sql){
         header("location:order_detail.php?id=$id");
    }
     else{ 
    echo mysqli_error($con);
    } 

}else{
}*/


}




 if(isset($_POST['done'])){
     error_reporting(2);
     $p_end_date = @$_POST['p_end_date'];
     $o_actual_date = @$_POST['o_actual_date'];
     $o_date = @$_POST['o_date'];

      
    if($p_end_date!='' and $o_actual_date!=''){
            
      $sql=mysqli_query($con,"UPDATE `quote` SET`p_end_date`='$p_end_date',`o_actual_date`='$o_actual_date',`o_date`='$o_date' , `o_status`='已完成'  WHERE price_no='$id'");
    if($sql){
      include("maintain_add.php");      
       }
    if($sql){
        echo"<script language=javascript>
        alert('訂單完成囉~'); location.href='order_history_detail.php?id=$id';</script>";       
       }else{
          echo mysqli_error($con);
       }
    }

             
          
          
    
     
 }

?>
<!--訂單-->
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel=stylesheet href=/project/css/boxtext.css>
<meta charset="utf-8">
<script language="javascript"> 

function editdata(){
      var edit_elements=document.getElementsByClassName("readonly")
      for (i=0;i<edit_elements.length;i++){
      edit_elements[i].removeAttribute("readonly");
      edit_elements[i].style="border:inline";
      };
     
      document.getElementById('b').style.display = "inline";
      document.getElementById('a').style.display = "none";
      document.getElementById('done').style.display = "inline";
      

      
      
 }
 function handler(e){
  //alert(e.target.value);
  document.getElementById('o_actual_date').min = e.target.value;
}
 function complete(form){
//alert($("#p_end_date").val());

            

        if($("#p_end_date").val()==""){
            alert("你尚未填寫實際施工日期");
            eval("document.form1['p_end_date'].focus()"); 
            return (false);
        }else if($("#o_actual_date").val()==""){
            alert("你尚未填寫實際完工日期");
            eval("document.form1['o_actual_date'].focus()");
            return (false);
        }else {
            
            return (true);
            alert("訂單完成囉~");
            document.form1.submit();

            
        }
    }
  function editdata() {
            var edit_elements = document.getElementsByClassName("readonly")
            for (i = 0; i < edit_elements.length; i++) {
                edit_elements[i].removeAttribute("readonly");
                edit_elements[i].style = "border:inline";
            };

            document.getElementById('b').style.display = "inline";
            document.getElementById('a').style.display = "none";
            document.getElementById('done').style.display = "inline";




        }
    
    
</script>
</head> 
<body> 

<?php include("home.php");?>
   <aside>
          <ul class="" onclick="location.href='homepage.php'">
        <i class="fa fa-calendar" aria-hidden="true"></i><span class="span">首頁</span>
    </ul>
    <ul class="" onclick="location.href='maintain.php'">
        <i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養</span>
    </ul>
          
    <ul class="" onclick="location.href='fix.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修</span></ul>
    <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span></ul>
    
    <ul class="select">
        <li class="select"  onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單紀錄</span>
        </li>
        <li class="" onclick="location.href='order_history.php'"><span class="span">訂單歷史</span></li>
     </ul>
    
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
<p class="card-header">訂單狀態：<?php echo $rd['o_status'];?></p>
        <div class="boxtext">
        <p><b class="cname"><?php echo $rd['c_name'];?></b><br>
        地址:<b><?php echo $rd['c_address'];?></b><br>
        聯絡人:<b><?php echo $rd['c_cname'];?></b><br>
        連絡電話:<b><?php echo $rd['c_cphone'];?></b></p>
        </div>
    <p class="card-date">訂單日期:<input type="date" id="o_date" name="o_date" value="<?php echo $rd['o_date']?>" class="readonly date-input" readonly="readonly" form="form1" style="border:none"><br>
    預計施工日期:<?php echo $rd['p_start_date'];?>
    ~ <?php echo $rd['p_comp_date'];?><br>
    實際施工日期:<input type="date" id="p_end_date" name="p_end_date" value="<?php echo $rd['p_end_date']?>" class="readonly date-input" readonly="readonly" form="form1" style="border:none" onchange="handler(event);" ><br>
    實際完工日期:<input type="date" id="o_actual_date" name="o_actual_date" value="<?php echo $rd['o_actual_date']?>" class="readonly date-input" readonly="readonly" form="form1" style="border:none" ><br></p>
    
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

$post = array();
while ($rs=mysqli_fetch_array($data)){
$pid= $rs['p_id'];
$pmt= $rs['p_maintain_time'];
$pname=$rs['p_name'];
$pamount=$rs['p_amount'];
$pno=$rs['p_no'];
//echo $pname;
?> 
<tr > 
<tr>
                        <input type="hidden" name="pid[]" form="form1" value="<?php echo $pid;?>">
                        <input type="hidden" name="pmt[]" form="form1" value="<?php echo $pmt;?>">
                        <input type="hidden" name="pname[]" form="form1" value="<?php echo $pname;?>">
                        <input type="hidden" name="pamount[]" form="form1" value="<?php echo $pamount;?>">
                        <input type="hidden" name="pno[]" form="form1" value="<?php echo $pno;?>">
                        <td><?php echo $rs['p_name'];?></td>
                        <td><?php echo $rs['p_device'];?></td>
                        <td><?php echo $rs['p_drive'];?></td>
                        <td><?php echo $rs['p_trans'];?></td>
                        <td><?php echo $rs['p_rotary'];?></td>
                        <td contenteditable=false><?php echo $rs['p_price_order'];?></td>
                        <td contenteditable=false><?php echo $rs['p_amount'];?></td>
                        <td><?php echo $rs['p_subtotal'];?></td>
                    </tr> <?php } ?>
                    <tr>
                        <td colspan="6"></td>
                        <td>總計</td>
                        <td><?php echo $rd['total'];?></td>
                    </tr>
    </table>
    <form id="form1" name="form1" method="post" action="" class="card-end"> 
    
    
    <button id="a"  name="edit" type="button" onClick="editdata()" style="display:inline" class="end-btn bt-3 bt-g">編輯</button>
   <button id="b"  name="save" type="sumbit"  style="display:none" class="end-btn bt-3 bt-y">儲存</button>
    
    <button id="done"  name="done" type="submit" style="display:none" onClick="return complete(this.form)" class="end-btn bt-3 bt-red">完成</button>
    </form>
    <!--input name="name" type="button" id ="bt" value="列印"-->
    
</div>

</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="/project/js/order.js"></script>
</body> 


</html>