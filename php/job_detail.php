<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
error_reporting(0);//隱藏錯誤碼
$id=$_GET["id"];
$data=mysqli_query($con,"SELECT DISTINCT j_no,j_date,j_meno,j_menof,j_notice,jt_team,jt_teamleader,jt_teamphone,j_type,c_name,c_address,c_cname,c_cphone,j_comp_date,j_start_date,j_end_date,j_actual_date,j.price_no,j_nocheck,j_ofcheck,j.fix_no,j.m_no 
FROM job j 
JOIN job_team t ON(j.jt_no=t.jt_no) 
JOIN quote q ON(j.price_no=q.price_no)
JOIN client c ON(q.c_no=c.c_no)
JOIN order_recode r ON(q.price_no=r.price_no)
JOIN produce p on (r.p_no=p.p_no) 
where j.j_no='$id' 

");
$time=mysqli_query($con,"SELECT * FROM  time t where j_no='$id'");

//儲存
if (isset($_POST['save'])){
$j_end_date=@$_POST['j_end_date'];
$j_actual_date=@$_POST['j_actual_date'];
$j_menof=@$_POST['j_menof'];
$j_meno=@$_POST['j_meno'];
$j_notice=@$_POST['j_notice'];
$j_work=@$_POST['j_work'];
$j_id=@$_POST['j_id'];
$jtimes=@$_POST['j_time'];    
$in_date= @$_POST['in_date']; 
$in_time=@$_POST['in_time'];
$out_time=@$_POST['out_time'];
$check=@$_POST['checkbox'];
$j_cheak= @$_POST['j_cheak']; 
$j_time=substr(time("hms"),1,8);
$j_no=$_GET["id"];
$j_ofcheck=@$_POST['j_ofcheck'];
$j_nocheck=@$_POST['j_nocheck'];

$save=mysqli_query($con,"UPDATE `job` SET `j_end_date`='$j_end_date',`j_actual_date`='$j_actual_date',`j_menof`='$j_menof',`j_meno`='$j_meno',`j_notice`='$j_notice',`j_ofcheck`='$j_ofcheck',`j_nocheck`='$j_nocheck' where j_no='$id'");

for ($i=0; $i<count($j_work); $i++){
    $sqll= mysqli_query($con,"UPDATE `job_work` SET `j_work`='$j_work[$i]' where j_id='$j_id[$i]'");
}
for ($i=0; $i<count($j_cheak); $i++){
    $sqll= mysqli_query($con,"UPDATE `job_work` SET `j_cheak`='1' where j_id='$j_cheak[$i]'");
}

for ($i=0; $i<count($in_date); $i++){  
$datatime=mysqli_query($con,"SELECT * FROM `time` where j_time = $jtimes[$i]");    
if(mysqli_num_rows($datatime) > 0){ 
//echo'更';
$intime=mysqli_query($con,"UPDATE `time` SET `in_date`='$in_date[$i]', `in_time`='$in_time[$i]', `out_time`='$out_time[$i]' where j_no='$j_no' and j_time='$jtimes[$i]'");
}else{
//echo'新';
$intime=mysqli_query($con,"INSERT INTO `time`( `in_date`, `in_time`, `out_time`, `j_no`) VALUES ('$in_date[$i]','$in_time[$i]','$out_time[$i]','$j_no')");    
}  
}

if($save){header("location:job_detail.php?id=$id");}else{mysqli_error($con);}   
    
}
//完成
 if(isset($_POST['done'])){
$j_end_date=@$_POST['j_end_date'];
$j_actual_date=@$_POST['j_actual_date'];
$j_menof=@$_POST['j_menof'];
$j_meno=@$_POST['j_meno'];
$j_notice=@$_POST['j_notice'];
$j_work=@$_POST['j_work'];
$j_id=@$_POST['j_id'];
$jtimes=@$_POST['j_time'];    
$in_date= @$_POST['in_date']; 
$in_time=@$_POST['in_time'];
$out_time=@$_POST['out_time'];
$check=@$_POST['checkbox'];
$j_cheak= @$_POST['j_cheak']; 
$j_time=substr(time("hms"),1,8);
$j_no=$_GET["id"];
$j_ofcheck=$_POST['j_ofcheck'];
$j_nocheck=$_POST['j_nocheck'];
    
 error_reporting(1);

$save=mysqli_query($con,"UPDATE `job` SET `j_end_date`='$j_end_date',`j_actual_date`='$j_actual_date',`j_menof`='$j_menof',`j_meno`='$j_meno',`j_notice`='$j_notice',`j_ofcheck`='$j_ofcheck',`j_nocheck`='$j_nocheck',`j_status`='已完成' where j_no='$id'");

for ($i=0; $i<count($j_id); $i++){
    $sqll= mysqli_query($con,"UPDATE `job_work` SET `j_work`='$j_work[$i]',`j_cheak`='$check[$i]' where j_id='$j_id[$i]'");}

for ($i=0; $i<count($in_date); $i++){  
$datatime=mysqli_query($con,"SELECT * FROM `time` where j_time = $jtimes[$i]");    
if(mysqli_num_rows($datatime) > 0){ 
//echo'更';
$intime=mysqli_query($con,"UPDATE `time` SET `in_date`='$in_date[$i]', `in_time`='$in_time[$i]', `out_time`='$out_time[$i]' where j_no='$j_no' and j_time='$jtimes[$i]'");
}else{
//echo'新';
$intime=mysqli_query($con,"INSERT INTO `time`( `in_date`, `in_time`, `out_time`, `j_no`) VALUES ('$in_date[$i]','$in_time[$i]','$out_time[$i]','$j_no')");    
}  
}
 

    if($save){
        if ($_POST['j_type']=="訂單"){
            echo "<script language=javascript>
        alert('新增成功'); location.href='order_detail.php?id=$_POST[price_no]';
        </script>";
        }
        else if($_POST['j_type']=="保養"){
            echo "<script language=javascript>
        alert('新增成功'); location.href='maintain.php';
        </script>";
        }else {
            echo "<script language=javascript>
        alert('新增成功'); location.href='fix_detail2.php?id=$_POST[fix_no]&m_no=$_POST[m_no]';
        </script>";
        }
            ;
    }else{echo'新增失敗'.mysqli_error($con);}


}
?>
<!--派工詳細-->
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/table-job.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="utf-8"> 
<script language="javascript">
function editdata(){
      var edit_elements=document.getElementsByClassName("readonly")
      for (i=0;i<edit_elements.length;i++){
      edit_elements[i].removeAttribute("readonly");
      edit_elements[i].style="border:inline";
      edit_elements[i].removeAttribute("onclick");
      
          
      };
     
      document.getElementById('save').style.display = "inline";
      document.getElementById('edit').style.display = "none";
      document.getElementById('done').style.display = "inline";
 }
function handler(e){
  document.getElementById('j_actual_date').min = e.target.value;
}//日期限制
function addRow() {
  //增加一行
  //console.log("a");
  var tab = document.getElementById("myTable");
   
    
  tab.innerHTML += "<tr><td><input type='date' name='in_date[]' class='readonly table-input'  form='form1' style='border:none' ></td><td><input type='time' name='in_time[]'  class='readonly table-input'  form='form1' style='border:none' ></td><td><input type='time' name='out_time[]' class='readonly table-input' form='form1' style='border:none' ></td></td><td><input type='button' value='刪除' onclick='delectRow(this)' class='btn bt-3'></td></tr>";
  
}
function delectRow(r){
  var i=r.parentNode.parentNode.rowIndex;
  console.log(i);
    //alert(i);
  document.getElementById('myTables').deleteRow(i);
}    
 function complete(form){

//alert($("#p_end_date").val());
var check = document.getElementsByName('checkbox[]');
var total=0
for(var i = 0; i < check.length; i ++ ){
if(check[i].checked){
total++;
console.log(total);      
}
}     
if($("#j_end_date").val()==""){
    alert("你尚未填寫實際施工日期");
    eval("document.form1['j_end_date'].focus()"); 
    return (false);
    }else if($("#j_actual_date").val()==""){
    alert("你尚未填寫實際完工日期");
    eval("document.form1['j_actual_date'].focus()");
    return (false);
    }else if(total!=check.length){
    alert("你有項目尚未勾選");
    return (false);
    }else{  
    return (true);
    alert("派工單完成囉~");
    document.form1.submit();
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
    
    <ul class="select">
        <li class="select" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工紀錄</span>
        </li>
        <li class="" onclick="location.href='job_finish.php'"><span class="span">派工歷史</span></li>
        <!--li class="" onclick="location.href='job_teamadd.php'"><span class="span">團隊管理</span></li-->
     </ul>
    
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span>
     </ul>
     <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span></ul>
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     
    <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span>
     </ul>
     
  </aside>
<div id='content'>
    <div class="card"> 
    <?php
        if(!$data){
          echo("Error: ".mysqli_error($con));
          exit();
          }
        $job=mysqli_fetch_array($data)
    ?>
        <p>未完成派工-<?php echo $job['j_type'];?>
            <input  type="hidden" value="<?php echo $job['j_type'];?>" name='j_type' form="form1">
            <input  type="hidden" value="<?php echo $job['price_no'];?>" name='price_no' form="form1">
            <input  type="hidden" value="<?php echo $job['fix_no'];?>" name='fix_no' form="form1">
            <input  type="hidden" value="<?php echo $job['m_no'];?>" name='m_no' form="form1">
        
        </p> 
        <div class="boxtext">
        <p><b class="cname"><?php echo $job['c_name'];?></b><br>
        地址：<b><?php echo $job['c_address'];?></b><br>
        聯絡人：<b><?php echo $job['c_cname'];?></b><br>
        聯絡電話：<b><?php echo $job['c_cphone'];?></b>
        </p>
        </div> 
        
        <div class="card-date">派工日期：<?php echo $job['j_date'];?> <br>
        預計施工日期：<?php echo $job['j_start_date'];?>
    ~<?php echo $job['j_comp_date'];?><br>
        實際施工日期：<input type="date" id="j_end_date" name="j_end_date" value="<?php echo $job['j_end_date']?>"  class="readonly date-input" readonly="readonly" form="form1" style="border:none" onchange="handler(event);">
        <br>
        實際完工日期：<input type="date" id="j_actual_date" name="j_actual_date" value="<?php echo $job['j_actual_date']?>"  class="readonly date-input" readonly="readonly" form="form1" style="border:none" >
        </div>

        <table class="table" cellspacing="0" id="myTables">
        <?php
            $data1=mysqli_query($con,"SELECT m_pno, p_name,p_amount,p_device,p_drive,p_trans,p_rotary
                    FROM job j   
                    JOIN maintain m ON(j.m_no=m.m_no)  
                    JOIN order_recode r ON(m.p_id=r.p_id)
                    JOIN produce p on (r.p_no=p.p_no)
                    where j.j_no='$id'
                    ");
                    
            if( $job['j_type']=="維修"){
    echo'<tr>
                <th>產品名稱</th>
                <td colspan="3">';
                while ($rs=mysqli_fetch_array($data1)){  
                    echo $rs["m_pno"].'-'.$rs["p_device"].$rs["p_drive"].$rs["p_trans"].$rs["p_rotary"].' <br>';
                }
                echo'</td>
            </tr>';
            }?>

             <tr>
                <th>施工團隊</th>
                <td colspan="3"><?php echo $job['jt_team'];?></td>
            </tr>
             <tr>
                <th>團隊電話</th>
                <td colspan="3"><?php echo $job['jt_teamphone'];?></td>
            </tr>
             <tr>
                <th>負責人</th>
                <td colspan="3"><?php echo $job['jt_teamleader'];?></td>
            </tr>
            <tr>
                <th colspan="4">工作項目</th>
            </tr>
            
            <?php
               $work=mysqli_query($con,"SELECT * FROM `job_work` w  where j_no='$id'
               
               ");
         
                  while ($jobwork=mysqli_fetch_array($work)){
               ?>
            
           <tr>
                <td colspan="3">
                    
                    <input name="j_id[]" value="<?php echo $jobwork['j_id'];?>" form="form1" type="hidden">
                    <input name="j_work[]" value="<?php echo $jobwork['j_work'];?>" class="readonly table-input" readonly="readonly " form="form1" style="border:none;" >
                </td>

                <td>
                  <?php if($jobwork['j_cheak'] == '1'){ ?>
                <input type="checkbox"  name="j_cheak[]" form="form1" checked="true" value="<?php echo $jobwork['j_id'];?>" class='readonly check' id='<?php echo $jobwork['j_id'];?>' onclick="return false"><label for='<?php echo $jobwork['j_id'];?>'>完成</label>
                    <?php }else{?>
                <input type="checkbox"  name="j_cheak[]" form="form1" value="<?php echo $jobwork['j_id'];?>" class='readonly check' id='<?php echo $jobwork['j_id'];?>' onclick="return false"><label for='<?php echo $jobwork['j_id'];?>'>完成</label>
                    <?php } ?>
                </td>

            </tr>

<?php } ?>
            <tbody  id="myTable">
            <tr>
                <th>日期</th><th>進入時間</th><th>出去時間</th><th><input type="button" value="新增" class='btn bt-3' onclick="addRow()"></th>
            </tr>
            <?php
            while ($jobtime=mysqli_fetch_array($time)){
            
            ?>
            <tr>
                <td><input type='hidden' name='j_time[]' value='<?php echo $jobtime['j_time'];?>' form="form1">
                    <input type="date" name="in_date[]" value="<?php echo $jobtime['in_date'];?>" class="readonly table-input" readonly="readonly" form="form1" style="border:none" >
                    
                </td>
                <td>
                    <input type="time" name="in_time[]" value="<?php echo $jobtime['in_time'];?>" class="readonly table-input" readonly="readonly" form="form1" style="border:none" >
                    
                </td>
                <td>
                    
                    <input type="time" name="out_time[]" value="<?php echo $jobtime['out_time'];?>" class="readonly table-input" readonly="readonly" form="form1" style="border:none" >
                </td>
                 <td>
                    
                   
                </td>
             </tr>
                <?php }?>
            </tbody>
            
            
            <tr>
                <th>備註(不收費)</th>
                <td colspan="2">
                    <textarea  name="j_menof"  class="readonly mark" readonly="readonly" form="form1" style="border:none"><?php echo $job['j_menof'];?></textarea>
                </td>
                <td>
                    <?php if($job['j_ofcheck'] == 1){ ?>
                <input type="checkbox"  name="j_ofcheck" form="form1" checked="true"  value="1" class='readonly check' id='j_ofcheck' onclick="return false"><label for='j_ofcheck' >備料完成</label>
                <?php   } 
                else{?>
                   <input type="checkbox"  name="j_ofcheck" form="form1"  value="1"   class='readonly check' id='j_ofcheck' onclick="return false" ><label for='j_ofcheck'>備料完成</label>
                <?php } ?>
                </td>

            <tr>
                <th>備註(收費)</th>
                <td colspan="2"><textarea  name="j_meno"  class="readonly mark" readonly="readonly" form="form1" style="border:none"><?php echo $job['j_meno'];?></textarea>
                </td>
                <td>
                    <?php if($job['j_nocheck'] == 1){ ?>
                <input type="checkbox" name="j_nocheck" form="form1" checked="true"  value="1" class='readonly check' id='j_nocheck' onclick="return false"><label for='j_nocheck'>備料完成</label>
                <?php   } 
                else{?>
                  <input type="checkbox"  name="j_nocheck" form="form1" value="1" class='readonly check' id='j_nocheck' onclick="return false"><label for='j_nocheck'>備料完成</label>
                <?php } ?>
                </td>
            </tr>
           
            <tr>
                <th>注意事項</th>
                <td colspan="3"><textarea name="j_notice" class="readonly mark" readonly="readonly" form="form1" style="border:none" ><?php echo $job['j_notice'];?></textarea>
                </td>
            </tr>
        </table>
          
          <form id="form1" name="form1" method="post" action="" class="card-end">
          <button id="edit"  name="edit" type="button" onClick="editdata()" style="display:inline" class="end-btn bt-3 bt-y">編輯</button>
            
          <button id="save"  name="save" type="sumbit"  style="display:none" class="end-btn bt-3 bt-y">儲存</button>
              
          <button id="done"  name="done" type="submit" style="display:none" class="end-btn bt-3 bt-red"onClick="return complete(this.form)">完成</button>
          <input type='button' value="返回" class="end-btn bt-3 bt-r" onclick="location.href='job.php'">
          </form>
         
 
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/project/js/list.js"></script>
</body>

</html>