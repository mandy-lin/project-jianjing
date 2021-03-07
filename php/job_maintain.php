<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
error_reporting(0);//隱藏錯誤碼
//$id=$_GET["id"];
//$id=$_POST['price'];
foreach($_POST['checkbox'] as $check){ 
 $id=substr($check,0,9);}
//$m_no=$_POST['m_no'];
//print_r($m_no) ;
$data=mysqli_query($con,"SELECT * FROM quote q JOIN client c ON(q.c_no=c.c_no)  where price_no=$id");

$mjwork=mysqli_query($con,"SELECT * FROM `maintain_job` ");
//儲存
if (isset($_POST['save'])){
$j_start_date=$_POST['j_start_date'];
$j_date=$_POST['j_date'];//派工日期
$j_comp_date=$_POST['j_comp_date'];
$j_menof=$_POST['j_menof'];
$j_meno=$_POST['j_meno'];
$j_notice=$_POST['j_notice'];
//$j_work=$_POST['j_work'];
$j_id=@$_POST['j_id'];
$jt_no=$_POST['jt_no'];
$save=$_POST['save'];
$in_time=@$_POST['in_time'];
$out_time=@$_POST['out_time'];
$jno=substr(date("ymdHis"),2,9);
$jtime=substr(time("hms"),1,8); 
$j_work=$_POST['j_work'];
$id=$_POST['price_no'];
$m_no=$_POST['m_no'];    
    //print_r($_POST['m_no']);
    //echo $id;

$insert=mysqli_query($con,"INSERT INTO `job`( `j_no`,`j_status`,`j_type`,`j_date`,`j_start_date`, `j_comp_date`,`j_meno`, `j_menof`, `j_notice`, `jt_no`, `price_no`) VALUES ($jno,'未完成','保養','$j_date','$j_start_date','$j_comp_date','$j_meno','$j_menof','$j_notice','$jt_no','$id')");
    
for ($i = 0; $i < count($j_work); $i++) {
//echo $j_work[$i];
$sql= mysqli_query($con,"INSERT INTO `job_work`(`j_no`,`j_work`) VALUES ($jno,'$j_work[$i]')");
      
}
for ($i = 0; $i < count($m_no); $i++) {
  $sql2=mysqli_query($con,"UPDATE `maintain` SET `m_job_statue`='已派工'  where m_no='$m_no[$i]'");
}
if( $sql2 ){echo 'insert';echo "<script language=javascript>; 
location.href='maintain.php';
</script>";}else{echo 'no'.mysqli_error($con);}  
//新增後跳轉

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
function Insert(form){
var jtno=document.getElementById('jt_no');
if(jtno.value==''){
    alert("請先選擇團隊");
    eval("document.form['jt_no'].focus()");
    return (false);
}else if($("#p_start_date").val()==""){
    alert("你尚未填寫預計施工日期");
    eval("document.form['p_start_date'].focus()"); 
    return (false);
}else if($("#p_comp_date").val()==""){
    alert("你尚未填寫預計完工日期");
    eval("document.form['p_comp_date'].focus()");
    return (false);
}else {
    return (true);
    document.form2.submit();
}
   
}
    
function changeTeam(value){
 var jt_no=value;
 //alert(team);
 $.ajax({
      url:"jobteam.php",				
      method:"POST",
      //dataType: "json",
      data:{
        jt_no:jt_no
      },			
      success:function(data){
      var NewArray = data.split(",");
      document.getElementById('team_name').innerText=NewArray[0];
      document.getElementById('team_phone').innerText=NewArray[1];
       document.getElementById('team_leader').innerText=NewArray[2];
 }
 });
}
function addRow() {
  //增加一行
  //console.log("a");
  var tab = document.getElementById("myTable");
   
    
  tab.innerHTML += "<tr><td colspan='3'><input  name='j_work[]' type='text' class='table-input'></td><td><input type='button' value='刪除' class='btn bt-3' onclick='delectRow(this)'></td></tr>";

}
function delectRow(r){
  var i=r.parentNode.parentNode.rowIndex;
  //console.log(i);
//alert(i);
  document.getElementById('myTable').deleteRow(i-4);
}

 function handler(e){
  document.getElementById('j_comp_date').min = e.target.value;
}//日期限制
    


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
    <form name="form" method="post" action="">
    <?php
        if(!$data){
          echo("Error: ".mysqli_error($con));
          exit();
          }
        $job=mysqli_fetch_array($data);
    ?>
        <p>未完成派工-保養<input type='hidden' value='<?php echo $id?>' name='price_no'></p> 
        <div class="boxtext">
        <p><b class="cname"><?php echo $job['c_name'];?></b><br>
        地址：<b><?php echo $job['c_address'];?></b><br>
        聯絡人：<b><?php echo $job['c_cname'];?></b><br>
        聯絡電話：<b><?php echo $job['c_cphone'];?>
        </b></p>
        </div>
        
        <div class="card-date">
            派工日期：<input type="date" name="j_date" value="<?php echo $j_date=date("Y-m-d");?>" class=" date-input" class=" date-input" > <br>
            預計施工日期：<!--input type="date" id="p_start_date" name="j_start_date"  min="<!--?php  echo date("Y-m-d");?>" onchange="handler(event);" class=" date-input"-->
            <input type="date" id="p_start_date" name="j_start_date"  onchange="handler(event);" class=" date-input">
                       
            <br>
            預計完工日期：<input type="date" id="p_comp_date" name="j_comp_date" class=" date-input" >
        </div>    
         <table class='table' cellspacing="0" id="myTables">
            <tr>
                <th>施工團隊</th>
                <td colspan="3"><?php 
                  $data2=mysqli_query($con,"select * from job_team");
                  ?>
                    <select id="jt_no" name="jt_no"  onchange= "changeTeam(this.options[this.options.selectedIndex].value)">
                    <option value="">選擇團隊</option>
                    <?php 
                        while($rs = mysqli_fetch_array($data2))
                        {
                            echo "<option value=".$rs['jt_no'].">".$rs['jt_team']."</option>";
                        }
                    ?> 
                    </select>
                </td>
            </tr>
            <tr><th>團隊名稱</th><td id='team_name' colspan="3"></td></tr>
            <tr><th>團隊電話</th><td id='team_phone' colspan="3"></td></tr>
            <tr><th>負責人</th><td id='team_leader' colspan="3"></td></tr>
            <tbody  id="myTable">
               
                <tr>
                    <th colspan="4">工作項目 <input type="button" value="新增" onclick="addRow()" class='btn bt-3'></th>
                </tr>

                <tr><?php foreach($_POST['checkbox'] as $check){ 
    //for($i=0; $i<count($check); $i++){
        //echo $check;
    $jwork=mb_substr( $check,14,50,"utf-8");
    $mno=substr($check,9,5);?>
    
    
                    
                    <td colspan="4"><input type='hidden' type="text"  name="m_no[]"  value="<?php echo $mno; ?>"><input type="text"  name="j_work[]"  value="<?php echo'保養',$jwork; ?>" class='table-input'></td>
                </tr>  <?php }//} ?>
            </tbody>
            <tr>
                <th>備註(不收費)</th>
                <td  colspan="3"><textarea class='mark' name="j_menof"></textarea></td>
            </tr>
            <tr>
                <th>備註(收費)
                <td  colspan="3"><textarea class='mark' name="j_meno"></textarea></td>
            </tr>
            <tr>
                <th>注意事項</th>
                <td  colspan="3"><textarea class='mark' name="j_notice"></textarea></td>
            </tr>
        </table>
        <form id="form2" name="form2" method="post" action="">
        <div class="card-end">
        <input type="submit" name="save" onclick="return  Insert(this.form)" value="新增" class="end-btn bt-3 bt-g">
        </div>
        </form>
        
        
        
     </form>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/project/js/list.js"></script>
</body>

</html>