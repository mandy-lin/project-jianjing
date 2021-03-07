<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
    
    $id=$_GET["id"];
    $p_name=$_GET['p_name'];
    $m_no=$_GET['m_no'];
    $m_pno=$_GET['m_pno'];
    $price_no=$_GET['price_no'];
    
    $data=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.fix_no='$id'");
    
    $data1=mysqli_query($con,"select * from fix_item fi join fix f on(fi.fix_no=f.fix_no) where fi.fix_no='$id'");


 $fstardate=@$_POST[fstardate];
 if(isset($_POST['button'])){
        $data2=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.f_statue='0' and q.price_no='$price_no' and m.m_pno='$m_pno' and f.f_star_date like'%$fstardate%'");
    } 
    else{
        $data2=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.f_statue='0' and m.m_pno='$m_pno' and q.price_no='$price_no'");
    }
if(isset($_POST['sumbit'])){
    
    /*$check=@$_POST['checkbox'];
    $f_work_item= @$_POST['fworkitem'];
    print_r($f_work_item);
    print_r($check);
    
    $count=count($check);
    echo $count;
   for($i=0; $i<$count; $i++){
   echo $check[$i];
   echo $f_work_item[$i];
    $sql=mysqli_query($con,"UPDATE `fix_item` SET `fi_item_status`='$check[$i]' WHERE fix_no='$id' and f_work_item='$f_work_item[$i]'");
    }*/

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
    
</head>

<body>
<?php include("home.php");?>
  <aside id="aside">
          <ul class="" onclick="location.href='homepage.php'">
        <i class="fa fa-calendar" aria-hidden="true"></i><span class="span">首頁</span>
    </ul>
    
    <ul class="" onclick="location.href='maintain.php'"><i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養</span></ul>
     
     <ul class="select">
        <li class=""  onclick="location.href='fix.php'"><span class="span">維修紀錄</span>
        </li>
        <li class="select" onclick="location.href='fix_record.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修歷史</span></li>
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
                        ?>
        <tr>
            <td>維修日期</td>
            <td>大樓名稱</td>
            <td>大樓地址</td>
            <td>連絡電話</td>
            <td>保養時間</td>
        </tr>
        <tr>
            <td><?php echo $rs['f_star_date'];?></td>
            <td><?php echo $rs['c_name'];?></td>
            <td><?php echo $rs['c_address'];?></td>
            <td><?php echo $rs['c_phone'];?></td>
            <td><?php echo $rs['m_type'];?></td>
        </tr>
           <tr>
            <td>預計施工日期</td>
            <td>實際施工日期</td>
            <td>實際完工日期</td>
            <td>使用許可證有效日期</td>
             <td>產品名稱</td>
        </tr>
           <tr>
            <td><?php echo $rs['f_star_date'];?></td>
            <td><?php echo $rs['f_end_date'];?></td>
            <td><?php echo $rs['f_finish_date'];?></td>
            <td><?php echo $rs['m_license'];?></td>
           <td><?php echo $rs['p_name'];?></td>
        </tr>
</table>
                        <?php
                                                             }
                        ?>
<form action="" method="post" name="form1">

<h4>維護檢視項目</h4>
                    
<div id="month" class="item">
<table id="me" class='item-table-2' cellspacing="0">
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
                        <?php if($rt['fi_checkbox'] == 1){ ?>
  <tr>
     <input type="hidden" name="fworkitem[]" value="<?php echo $fworkitem;?>">
     
     <td><?php echo $rt['f_work_item'];?></td>
     
     <td width="150px"><?php echo $rt['fi_statue'];?></td>            
      
     <td align="left"><input type="checkbox" name="checkbox[]" value="" checked="true" disabled=”disabled”   /><?php echo $rt['fi_item_status'];?> 
     完成
     </td>
 </tr>
                         <?php } 
                            else{ ?>
                                
      <tr>
      <input type="hidden" name="fworkitem[]" value="<?php echo $fworkitem;?>">
      
      <td><?php echo $rt['f_work_item'];?></td>
      
      <td width="150px"><?php echo $rt['fi_statue'];?></td>            
       
      <td align="left"><input type="checkbox" name="checkbox[]" disabled=”disabled”     /><?php echo $rt['fi_item_status'];?> 完成</td>
  </tr> 
                                
                        <?php   } ?>
                       
                            
                                        
                                     <?php 
                        
                        }
                        ?>     
                                       
</table>

</div>
</form>
<form id="form1" name="form1" method="post" action="fix_record.php" class="card-date">          
    <input name="fstardate" type="date" id="fstardate" value="" placeholder="輸入保養日期" class='date-input'/><input type="submit" name="button" id="button" value="搜尋" class='card-btn'/>
</form>

                <table class='table' cellspacing="0">
                    <caption>維修紀錄列表</caption>
                    <tr>
                        <th>維修日期</th>
                        <th>大樓名稱</th>
                        <th>產品類型</th>
                        <th>維修詳細</th>
                    </tr>
                    <?php
                    if(mysqli_num_rows($data2) > 0){
          
                      for($i=1;$i<=mysqli_num_rows($data2);$i++){
                      $rm=mysqli_fetch_array($data2);
                ?>

 <tr>
     <td><?php echo $rm['f_star_date']?></td>
     <td><?php echo $rm['c_name']?></td>
     <td><?php echo $rm['m_pno']?></td>
     <td><input class="btn bt-3" type="button" value="詳細 " onclick="location.href='fix_medit.php?id=<?php echo $rm['fix_no']?>&p_name=<?php echo $rm['p_name']?>&m_no=<?php echo $rm['m_no']?>&m_pno=<?php echo $rm['m_pno']?>&price_no=<?php echo $rm['price_no']?>';"></td>
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
<script src="/project/js/list.js"></script>
</body>

</html>
