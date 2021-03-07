<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
$keyword=@$_GET['keyword'];
$number=10;
if(isset($_GET['page'])){
     $page=$_GET['page'];
}else{
    $page=1;
}
$start=($page-1)*$number;

if(isset($_GET['keyword'])){

$data = mysqli_query($con,"SELECT DISTINCT j_no,j_date,j_type,c_name,jt_team,jt_teamphone FROM job j 
            JOIN quote q ON(j.price_no=q.price_no) 
            JOIN client c ON(q.c_no=c.c_no)
            JOIN order_recode o ON(q.price_no=o.price_no)
            JOIN job_team t ON(j.jt_no=t.jt_no)
            WHERE j.j_status='未完成' and c.c_name like '%$keyword%' 
            ORDER BY `j_date` ASC  limit $start, $number");
$data_total=mysqli_query($con,
            "SELECT DISTINCT j_no,j_date,j_type,c_name,jt_team,jt_teamphone FROM job j 
            JOIN quote q ON(j.price_no=q.price_no) 
            JOIN client c ON(q.c_no=c.c_no)
            JOIN order_recode o ON(q.price_no=o.price_no)
            JOIN job_team t ON(j.jt_no=t.jt_no)
            WHERE j.j_status='未完成' and c.c_name like '%$keyword%' 
            ");
$total=mysqli_num_rows($data_total);
$pages=ceil($total/$number);
}
else{

$data = mysqli_query($con,"SELECT DISTINCT j_no,j_date,j_type,c_name,jt_team,jt_teamphone FROM job j 
            JOIN quote q ON(j.price_no=q.price_no) 
            JOIN client c ON(q.c_no=c.c_no)
            JOIN order_recode o ON(q.price_no=o.price_no)
            JOIN job_team t ON(j.jt_no=t.jt_no)
            WHERE j.j_status='未完成' 
            ORDER BY `j_date` ASC  limit $start, $number");
$data_total=mysqli_query($con,
            "SELECT DISTINCT j_no,j_date,j_type,c_name,jt_team,jt_teamphone FROM job j 
            JOIN quote q ON(j.price_no=q.price_no) 
            JOIN client c ON(q.c_no=c.c_no)
            JOIN order_recode o ON(q.price_no=o.price_no)
            JOIN job_team t ON(j.jt_no=t.jt_no)
            WHERE j.j_status='未完成'
           ");
$total=mysqli_num_rows($data_total);
$pages=ceil($total/$number);
}

?>
<!--派工-->
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/table-main.css>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<meta charset="utf-8"> 
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
        <form id="form1" name="form1" method="get" action="" class='card-header'> 
        <input name="keyword" type="search" placeholder="請輸入大樓名稱" class="card-search"/>
            <button id="search" type="submit"  class='card-btn'>搜尋</button>
        </form>
  
        <table id='jobthing' class="table">
        <caption>未完成派工單</caption>
            <tr>
                <th>派工日期</th>
                <th>大樓名稱</th>
                <th>施工團隊</th>
                <th>團隊電話</th>
                <th>產品類型</th>
                <th>      </th>
            </tr>
            <?php
            if(mysqli_num_rows($data) > 0){
                while ($job=mysqli_fetch_array($data)){
                echo '<tr>
                      <td>'. $job['j_date'].'</td>
                      <td>'. $job['c_name'].'</td>
                      <td>'. $job['jt_team'].'</td>
                      <td>'. $job['jt_teamphone'].'</td>
                      <td>'. $job['j_type'].'</td>
                      <td >
                      <input class="btn bt-3" type="button" value="詳細 " onclick='.'location.href='.'"job_detail.php?id='.$job['j_no'].'">
                      </td>
                    </tr>';

            }

            }else{
                echo '
                    <tr>
                       <td colspan=6 align=center height=100px>No  Data found</td>
                    </tr>
                    ';
            }

            ?> 
            </table>
        <p class='card-page'>        
        <?php     
        if ($page > 1) {
                echo '<input  type="button" class="page page-1" value="第一頁 " onclick=location.href="job.php?page=1&keyword='.$keyword.'">'; 

               echo '<input  type="button" class="page" value="上一頁 " onclick=location.href="job.php?page='. ($page - 1) . '&keyword='.$keyword.'">';
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
                    echo '<input  type="button" class="page" value="下一頁 " onclick=location.href="job.php?page='. ($page + 1) . '&keyword='.$keyword.'">';
                    echo '<input class="page page-2" type="button" value="最後一頁 " onclick=location.href="job.php?page='. ($pages) . '&keyword='.$keyword.'">';
                    }         

        ?>
</p>
        </div>       
    </div>
    <script src="/project/js/list.js"></script>
</body>

</html>