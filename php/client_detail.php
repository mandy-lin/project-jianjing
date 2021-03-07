<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
$id=$_GET["id"];
$data=mysqli_query($con,"select * from client where c_no like $id");
//header("Content-type: image/jpeg");

if (isset($_POST['save'])){
      
      $name=@$_FILES['placeimg']['name'];
      $tmp_name=@$_FILES['placeimg']['tmp_name'];
      move_uploaded_file($tmp_name,"../img/".$name);
      //位置圖
      $sname=@$_FILES['sizeimg']['name'];
      $stmp_name=@$_FILES['sizeimg']['tmp_name'];
      move_uploaded_file($stmp_name,"../img/".$sname);
      //尺寸圖
      
      $c_name=@$_POST['c_name'];
      $c_phone=@$_POST['c_phone'];
      $c_address=@$_POST['c_address'];
      $c_uniform=@$_POST['c_uniform'];
      $c_cname=@$_POST['c_cname'];
      $c_cphone=@$_POST['c_cphone'];
      $c_caddress=@$_POST['c_caddress'];
      $c_fname=@$_POST['c_fname'];
      $c_fphone=@$_POST['c_fphone'];
      $c_faddress=@$_POST['c_faddress'];
      $c_paytype=@$_POST['c_paytype'];

      $sql=mysqli_query($con,"UPDATE `client` SET `c_name`='$c_name',`c_phone`='$c_phone',`c_address`='$c_address',`c_uniform`='$c_uniform',`c_cname`='$c_cname',`c_cphone`='$c_cphone',`c_caddress`='$c_caddress',`c_fname`='$c_fname',`c_fphone`='$c_fphone',`c_faddress`='$c_faddress',`c_paytype`='$c_paytype',`c_localimg`='".$name."',`c_sizeimg`='".$sname."' where c_no='$id'");
      if($sql){
      echo 'insert';
      echo "<script language=javascript> location.href='client_detail.php?id=$id';</script>";
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
function editdata(){
      var edit_elements=document.getElementsByClassName("readonly")
      for (i=0;i<edit_elements.length;i++){
      edit_elements[i].removeAttribute("readonly");
      edit_elements[i].style="border:inline";
      };
     
      document.getElementById('save').style.display = "inline";
      document.getElementById('edit').style.display = "none";
      document.getElementById('placeimg') .style.display="inline";
       document.getElementById('sizeimg') .style.display="inline";
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
        <li class="select" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶管理</span>
        </li>
        <li class="" onclick="location.href='client_add.php'"><span class="span">新增客戶</span></li>
     </ul>
   
  </aside>
<div id='content'>
<div class="card"> 

<?php
    if(!$data){
      echo("Error: ".mysqli_error($con));
      exit();
      }
while ($rs=mysqli_fetch_array($data)){
?>   
    

        <form id="form" name="form" enctype="multipart/form-data" method="post" action="">
        <!--p>客戶資料<button id="edit"  name="edit" type="button" onClick="editdata()" style="display:inline">編輯</button>
        <button id="save"  name="save" type="sumbit"  style="display:none">儲存</button></p-->
        
        <table class="table">
        <caption>
        客戶資料
        <button id="edit"  name="edit" class='btn bt-3' type="button" onClick="editdata()" style="display:inline">編輯</button><button id="save"  class='btn bt-3' name="save" type="sumbit"  style="display:none">儲存</button>
        </caption>
            <tr>
                
                <th>大樓名稱</th>
                <td id='change' colspan="3"><input type="text" name="c_name" value="<?php echo $rs["c_name"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
            </tr>
            <tr>
                <th>大樓電話</th>
                <td><input type="text" name="c_phone" value="<?php echo $rs["c_phone"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
                <td>統一編號:</td>
                <td><input type="text" name="c_uniform" value="<?php echo $rs["c_uniform"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
            </tr>
            <tr>
                <th>大樓地址</th>
                <td colspan="3"><input type="text" name="c_address" value="<?php echo $rs["c_address"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
            </tr>
            <tr>
                <th>主委姓名</th>
                <td><input type="text" name="c_cname" value="<?php echo $rs["c_cname"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
                <th>主委電話</th>
                <td><input type="text" name="c_cphone" value="<?php echo $rs["c_cphone"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
            </tr>
            <tr>
                <th>主委地址</th>
                <td colspan="3"><input type="text" name="c_caddress" value="<?php echo $rs["c_caddress"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
            </tr>
            <tr>
                <th>財委姓名</th>
                <td><input type="text" name="c_fname" value="<?php echo $rs["c_fname"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
                <th>財委電話</th>
                <td><input type="text" name="c_fphone" value="<?php echo $rs["c_fphone"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
            </tr>
            <tr>
                <th>財委地址</th>
                <td colspan="3"><input type="text" name="c_faddress" value="<?php echo $rs["c_faddress"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
            </tr>
            <tr>
                <th>收款方式</th>
                <td colspan="3"><input type="text" name="c_paytype" value="<?php echo $rs["c_paytype"];?>" class="readonly table-input" readonly="readonly" style="border:none;outline:medium;"></td>
            </tr>
            <?php 
            if ($rs["c_localimg"]==""){
           ?>
            <tr><th>位置圖</th><td colspan="3"><input id="placeimg" type="file" name="placeimg" style="display:none"></td></tr>
            <?php }else{
            ?>
            <tr>
                <th>位置圖</th>
                <td colspan="3"><input id="placeimg" type="file" name="placeimg" style="display:none">
                
                <a href="localimg_display.php?id=<?php echo $rs['c_no'];?>" target="_blank"><img src="../img/<?php echo $rs["c_localimg"];?>" class='img' ></a></td>
              </tr><?php ;}
              if ($rs['c_sizeimg']==""){
              ?>
              <tr><th>尺寸圖</th><td colspan="3"><input id="sizeimg" type="file" name="sizeimg" style="display:none"></td></tr>
            <?php }else{
           ?>
            <tr>
                  <th>尺寸圖</th>
                  <td colspan="3"><input id="sizeimg" type="file" name="sizeimg" style="display:none">
                  
                  <a href="sizeimg_display.php?id=<?php echo $rs['c_no'];?>" target="_blank">
                  <img src="../img/<?php echo $rs["c_sizeimg"];?> " class='img' ></a>
                  
                  
                  </td>
              </tr><?php ;} ?> 
            <!--tr>
                <th colspan="4">合約管理</th>
            </tr>
            
            <tr>
                <td>簽約日期</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>合約到期日</td>
                <td colspan="3"></td>
            </tr>
            <!--tr>
                <td><input type="button" onclick="location.href='#'" value="合約內容"></td>
                <td colspan="3"></td>
            </tr-->
            </table>
            </form>
            <table id="client_record" class="table">
            
            <tr>
                <th colspan="6">產品</th>
            </tr>
            <tr>
                <td>類型</td>
                <td>設備</td>
                <td>驅動</td>
                <td>傳動</td>
                <td>旋轉台</td>
                <td>數量</td>
                
            </tr>
<?php
$produce=mysqli_query($con,"SELECT * FROM `produce` pro join order_recode o on (pro.p_no=o.p_no) join quote q on (o.price_no=q.price_no) join client c on (q.c_no=c.c_no) where c.c_no='$id'");

if(mysqli_num_rows($produce) > 0){
  while($pro=mysqli_fetch_array($produce)){
?>
        <tr>
          <td><?php echo $pro['p_name'];?></td>
          <td ><?php echo $pro['p_device'];?></td>
          <td><?php echo $pro['p_drive'];?></td>
          <td><?php echo $pro['p_trans'];?></td>
          <td><?php echo $pro['p_rotary'];?></td>
          <td><?php echo $pro['p_amount'];?></td>
          <!--td><input type="button" onclick="location.href='maintain_medit.php?pid='" value="保養紀錄"></td-->
        </tr>
<?php
}
}
else
{
echo '<tr>
        <td colspan=6 align=center height=100px>No Data Found</td>
      </tr>';
}
?>
  
             <tr>
                <th colspan="6">保養紀錄</th>
            </tr>
            <tr>
                <td colspan="1">保養日期</td>
                <td colspan="2">保養狀態</td>
                <td colspan="2">保養時間</td>
                <td colspan="1"></td>
            </tr>
<?php
$maintain=mysqli_query($con,"SELECT * FROM `maintain` m join order_recode o on (m.p_id=o.p_id) join quote q on (o.price_no=q.price_no) join produce p on (o.p_no=p.p_no) join client c on (q.c_no=c.c_no) where c.c_no='$id' and m.m_status='已結束'");
if(mysqli_num_rows($maintain) > 0){
while ($main=mysqli_fetch_array($maintain)){
?>
            <tr>
                <td colspan="1"><?php echo $main['m_date'];?></td>
                <td colspan="2"><?php echo $main['m_status'];?></td>
                <td colspan="2"><?php echo $main['m_type'];?></td>
                <td colspan="1"><input type="button" class='btn bt-3'onclick="location.href='maintain_medit.php?id=<?php echo $main['m_no'];?>&p_name=<?php echo $main['p_name'];?>&m_type=<?php echo $main['m_type'];?>&price_no=<?php echo $main['price_no'];?>&m_pno=<?php echo $main['m_pno'];?>'" value="詳細紀錄"></td>
            </tr>
<?php }
}
else
{
echo '<tr>
        <td colspan=6 align=center height=100px>No Data Found</td>
      </tr>';
}
 ?>

            <tr>
                <th colspan="6">維修紀錄</th>
            </tr>
            <tr>
                <td colspan="1">維修日期</td>
                <td colspan="2">維修產品</td>
                <td colspan="2">維修狀態</td>
                <td colspan="1"></td>
            </tr>
<?php
$fix=mysqli_query($con,"SELECT f.f_star_date,m.m_pno,f.f_statue,f.fix_no,pro.p_name,m.m_no,m.price_no FROM `fix` f JOIN maintain m on (f.m_no=m.m_no) join quote q on (m.price_no=q.price_no) join client c on (q.c_no=c.c_no) join order_recode o on (m.p_id=o.p_id) join produce pro on (o.p_no=pro.p_no) WHERE q.c_no=$id and f.f_statue=0");
if(mysqli_num_rows($fix) > 0){
while ($rs=mysqli_fetch_array($fix)){
?>
            <tr>
                <td colspan="1"><?php echo $rs['f_star_date'];?></td>
                <td colspan="2"><?php echo $rs['m_pno'];?></td>
                <td colspan="2">已維修</td>
                <td colspan="1"><input type="button" class='btn bt-3' onclick="location.href='fix_medit.php?id=<?php echo $rs['fix_no']?>&p_name=<?php echo $rs['p_name']?>&m_no=<?php echo $rs['m_no']?>&m_pno=<?php echo $rs['m_pno']?>&price_no=<?php echo $rs['price_no']?>'" value="詳細紀錄"></td>
            </tr>
<?php }
}
else
{
echo '<tr>
        <td colspan=6 align=center height=100px>No Data Found</td>
      </tr>';
}
 ?>

            <tr>
                <th colspan="6">派工紀錄</th>
            </tr>
            <tr>
                <td colspan="1">派工日期</td>
                <td colspan="2">派工狀態</td>
                <td colspan="2">工作團隊</td>
                <td colspan="1"></td>
            </tr>
<?php
$job=mysqli_query($con,"SELECT j_no,c.c_no,j_date,j_status,jt_team,jt_teamphone,p_no,o.p_id FROM job j JOIN maintain m ON(j.m_no=m.m_no) JOIN quote q ON(m.price_no=q.price_no) JOIN client c ON(q.c_no=c.c_no) JOIN order_recode o ON(q.price_no=o.price_no) JOIN job_team t ON(j.jt_no=t.jt_no) WHERE j.j_status='已完成' and c.c_no='$id' UNION ALL SELECT j_no,c.c_no,j_date,j_status,jt_team,jt_teamphone,p_no,o.p_id FROM job j JOIN quote q ON(j.price_no=q.price_no) JOIN client c ON(q.c_no=c.c_no) JOIN order_recode o ON(q.price_no=o.price_no) JOIN job_team t ON(j.jt_no=t.jt_no) WHERE j.j_status='已完成' and c.c_no='$id'");
if(mysqli_num_rows($job) > 0){
  while ($j=mysqli_fetch_array($job)){
?>
            <tr>
                <td colspan="1"><?php echo $j['j_date'];?></td>
                <td colspan="2"><?php echo $j['j_status'];?></td>
                <td colspan="2"><?php echo $j['jt_team'];?></td>
                <td colspan="1"><input type="button" class='btn bt-3' onclick="location.href='job_finished_detail.php?id=<?php echo $j['j_no'];?>&p_id=<?php echo $j['p_id'];?>'" value="詳細紀錄"></td>
            </tr>
          <?php }
}
else
{
echo '<tr>
        <td colspan=6 align=center height=100px>No Data Found</td>
      </tr>';
} ?>

        </table>
      </div>
 <?php } ?>        
    </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
      <script src="/project/js/list.js"></script>
    </body>
    </html>