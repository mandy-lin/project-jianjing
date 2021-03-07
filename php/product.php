<!--產品-->
<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文


$type=@$_GET['type'];
$p_device=@$_GET['p_device'];
$drive=@$_GET['drive'];
$transmission=@$_GET['transmission'];
$roll=@$_GET['roll'];

//echo $type,$p_device,$drive,$transmission,$roll;

$number=10;



if(isset($_GET['page'])){
     $page=$_GET['page'];
}else{
    $page=1;
}

//echo 'page='.$page.'<br>';
$start=($page-1)*$number;
//echo'$start='.$start.'<br>';

if(isset($_GET['type'])){ 

    $data=mysqli_query($con,"SELECT * FROM `produce` where p_name like '%$type%' 
       and p_device like '%$p_device%'
       and p_drive like '%$drive%'
       and p_trans like '%$transmission%'
       and p_rotary like '%$roll%' ORDER BY `produce`.`p_name` DESC  limit $start, $number "); 
    $data_total=mysqli_query($con,"SELECT * FROM `produce` where p_name like '%$type%' 
       and p_device like '%$p_device%'
       and p_drive like '%$drive%'
       and p_trans like '%$transmission%'
       and p_rotary like '%$roll%'  ");

}else{

    
     $data=mysqli_query($con,"SELECT * FROM `produce` ORDER BY `produce`.`p_name` DESC  limit $start, $number "); 
    $data_total=mysqli_query($con,"SELECT * FROM `produce`  ");

}
$total=mysqli_num_rows($data_total);
$pages=ceil($total/$number);



?>

<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<meta charset="utf-8"> 
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/table-main.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script language="JavaScript"> 
function mylink()  
{ 

    var type=document.getElementById("type").value;
    var p_device=document.getElementById("p_device").value;
    var drive=document.getElementById("drive").value;
    var transmission=document.getElementById("transmission").value;
    var roll=document.getElementById("roll").value;
    location.href='product.php?type='+type+'&p_device='+p_device+'&drive='+drive+'&transmission='+transmission+'&roll='+roll;
    //document.form1.submit(); 
    //alert( document.getElementById("type").value);
} 
</script>
</head> 
<body> 

<?php include("home.php");?>
  <aside id="aside">
    <ul class="" onclick="location.href='homepage.php'"><i class="fa fa-calendar" aria-hidden="true"></i><span class="span">首頁</span></ul>
    <ul class="" onclick="location.href='maintain.php'">
        <i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養</span>
    </ul>   
    <ul class="" onclick="location.href='fix.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修</span></ul>
    <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span>
     </ul>
     <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span></ul>
     
     <ul class="select">
        <li class="select" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品管理</span></li>
     </ul>
     
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
     
  </aside>
    <div id='content'>
    <div class="card">
    <form id="form1" name="form1" method="post" action="" class='card-header'>
        <select id="type" name="type" class=" card-search ">
            <option value=''>選擇類型</option>
            <option value='停車設備'>停車設備</option>
            <option value='附屬設備'>附屬設備</option>
            <option value='電梯'>電梯</option>
        </select>
        <select id="p_device" name="p_device" class="card-search">
            <option value="">選擇設備</option>
        </select>

        <select id="roll" name="roll" style="display: none" class="card-search">
        </select>  

         <select id="drive" name="drive" class="card-search">
            <option value="">選擇驅動</option>
        </select>
        <select id="transmission" name="transmission" class="card-search">
            <option value="">選擇傳動</option>
        </select>      
        <input type="button"  name="search" onclick="mylink()" class='card-btn' value="搜尋">
      </form>
      

      
      
        <table name="product" class="table" cellspacing="0" id="table" >
        <tr>
                <th>產品名稱</th>
                <th>機械設備<br>升降梯</th>
                <th>驅動方式</th>
                <th>傳動元件</th>
                <th>旋轉台</th>
                <th>價格</th>
                <th>&nbsp;</th>
        </tr>
<?php
if(mysqli_num_rows($data) > 0){
while($rs = mysqli_fetch_array($data)){

       echo'<tr>
                <td>'. $rs['p_name'].'</td>
                <td>'. $rs['p_device'].'</td>
                <td>'. $rs['p_drive'].'</td>
                <td>'. $rs['p_trans'].'</td>
                <td>'. $rs['p_rotary'].'</td>
                <td>'.$rs['p_price'].'</td>
                <td><input id='. $rs['p_no'].' type="button" value="編輯" class="btn bt-3 edit">
            </tr>';
  
}}
else{
            echo '
            <tr>
            <tr>
	       <td colspan=7 align=center height=100px>No  Data found</td>
    </tr>
            </tr>
            ';
}
?>
            </table>
            
<p class='card-page'>
<?php     
if ($page > 1) {
        echo '<input  type="button" class="page page-1" value="第一頁 " onclick=location.href="product.php?page=1&type='.$type.'&p_device='.$p_device.'&drive='.$drive.'&transmission='.$transmission.'&roll='.$roll.'">'; 
	   
       echo '<input  type="button" class="page" value="上一頁 " onclick=location.href="product.php?page='. ($page - 1) . '&type='.$type.'&p_device='.$p_device.'&drive='.$drive.'&transmission='.$transmission.'&roll='.$roll.'">';
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
            echo '<input  type="button" class="page" value="下一頁 " onclick=location.href="product.php?page='. ($page + 1) . '&type='.$type.'&p_device='.$p_device.'&drive='.$drive.'&transmission='.$transmission.'&roll='.$roll.'">';
            echo '<input class="page page-2" type="button" value="最後一頁 " onclick=location.href="product.php?page='. ($pages) . '&type='.$type.'&p_device='.$p_device.'&drive='.$drive.'&transmission='.$transmission.'&roll='.$roll.'">';
	        }         

?>
</p>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="/project/js/product.js"></script>
<script type="text/javascript" >
$(document).on('click','.edit',function (){
        var id = $(this).attr('id');
		var edit = 'show_edit_data';
        //var page=<?php //echo $_GET['page'];?>;
        var page=<?php echo $page;?>;
        var type='<?php echo $type;?>';
        var p_device='<?php echo $p_device;?>';
        var drive='<?php echo $drive;?>';
        var transmission='<?php echo $transmission;?>';
        var roll='<?php echo $roll;?>';
        //alert(page+type+p_device+drive+transmission+roll);
		$.ajax({
			url:"product_edit.php",
			method:"post",
			data:{id:id,edit:edit,page:page,type:type,p_device:p_device,drive:drive,transmission:transmission,roll:roll},
			success:function(data){
				$('#table').html(data);
                console.log(data);
			}
		});
    });
	// edit data
	$(document).on('click','.update',function (){
        var new_price = $('#new_price').val();
        //var email = $('#new_email').val();
		var update_id = $(this).attr('id');
		var edit = 'edit_data';
        var page=<?php echo $page;?>;
        var type='<?php echo $type;?>';
        var p_device='<?php echo $p_device;?>';
        var drive='<?php echo $drive;?>';
        var transmission='<?php echo $transmission;?>';
        var roll='<?php echo $roll;?>';
        //alert(page);
		$.ajax({
			url:"product_edit.php",
			method:"post",
			data:{p_price:new_price,edit:edit,update_id:update_id,page:page,type:type,p_device:p_device,drive:drive,transmission:transmission,roll:roll},
			success:function(data){
				$('#table').html(data);
                console.log(data);
			}
		});
    });
</script>  
<script src="/project/js/list.js"></script>
</body> 


</html>