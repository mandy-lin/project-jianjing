<?php
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

$id=$_GET["id"];
$p_name=$_GET['p_name'];
$m_type=$_GET['m_type'];
$price_no=$_GET['price_no'];

if(isset($_POST['button'])){
 $data=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_status='已結束' and q.price_no='$price_no'");
}else{
  $data=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_status='已結束'and q.price_no='$price_no' ");
}


?>

<!--保養-->
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/maintain.css>
<meta charset="utf-8"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="/js/maintain_record.js"></script>
</head> 
<body> 

<header>
    <h1>健璟實業股份有限公司</h1>
</header>
  <aside>
          <ul class="carte" onclick="location.href='homepage.php'">首頁</ul>
          <ul class="select" onclick="location.href='maintain.php'">保養</ul>
          <li class="select" onclick="location.href='maintain_record.php'">保養紀錄</li>
          <ul class="carte" onclick="location.href='fix.php'">維修</ul>
          <ul class="carte" onclick="location.href='job.php'">派工</ul>
          <ul class="carte" onclick="location.href='price.php'">報價</ul>
          <ul class="carte" onclick="location.href='order.php'">訂單</ul>
          <ul class="carte" onclick="location.href='product.php'">產品</ul>
          <ul class="carte" onclick="location.href='client.php'">客戶</ul>
          
  </aside>
    <content>
        <div class="maintain">
        <div id="m_search">    
          
           <form id="form1" name="form1" method="post" action="maintain_record.php">

             <input name="name" type="text" id="name" value=""  placeholder="輸入大樓名稱" />
             <input type="submit" name="button" id="button" value="搜尋" />
             
             <input name="mdate" type="date" id="mdate" value="" placeholder="輸入保養日期" />
             <input type="submit" name="button" id="button" value="搜尋" />


            </form>
                
        </div>
        <div id="list">
       
            <table>
                <caption>保養歷史列表</caption>
                <tr>
                    <th nowrap>保養日期</th>
                    <th nowrap>客戶名稱</th>
                    <th nowrap>保養時間</th>
                    <th nowrap>產品名稱</th>
                    <th nowrap>機械停車設備</th>
                    <th nowrap>驅動方式</th>
                    <th nowrap>傳動元件</th>
                    <th nowrap>旋轉台</th> 
                    <th nowrap>保養詳細</th>
                </tr>
                
                <?php
                      for($i=1;$i<=mysqli_num_rows($data);$i++){
                      $rs=mysqli_fetch_array($data);
                ?>

                <tr>
                    <td nowrap><?php echo $rs['m_date'];?></td>
                    <td nowrap><?php echo $rs['c_name'];?></td>
                    <td nowrap><?php echo $rs['m_type'];?></td>
                    <td nowrap><?php echo $rs['p_name'];?></td>
                    <td nowrap><?php echo $rs['p_device'];?></td>
                    <td nowrap><?php echo $rs['p_drive'];?></td>
                    <td nowrap><?php echo $rs['p_trans'];?></td>
                    <td nowrap><?php echo $rs['p_rotary'];?></td>
                    <td nowrap><input class="show_olddetail" type="button" value="詳細 " onclick="location.href='maintain_medit.php?id=<?php echo $rs['m_no']?>&p_name=<?php echo $rs['p_name']?>&m_type=<?php echo $rs['m_type']?>&price_no=<?php echo $rs['price_no']?>'"></td>
                </tr>
                
                <?php
                      }
                ?>

            </table>
        </div>  
      
        </div>
    </content>

</body>
</html>
        
        
        
        