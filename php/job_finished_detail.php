<?php
//include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
$id=$_GET["id"];

$data=mysqli_query($con,                  
"SELECT j_no,j_date,j_meno,j_menof,j_notice,jt_team,jt_teamleader,jt_teamphone,j_type,c_name,c_address,c_cname,c_cphone,j_comp_date,j_start_date,j_end_date,j_actual_date
FROM job j 
JOIN job_team t ON(j.jt_no=t.jt_no) 
JOIN quote q ON(j.price_no=q.price_no)
JOIN client c ON(q.c_no=c.c_no)
JOIN order_recode o ON(q.price_no=o.price_no)
JOIN produce p on (o.p_no=p.p_no) 
where j.j_no='$id'
union all SELECT DISTINCT j_no,j_date,j_meno,j_menof,j_notice,jt_team,jt_teamleader,jt_teamphone,j_type,c_name,c_address,c_cname,c_cphone,j_comp_date,j_start_date,j_end_date,j_actual_date  
FROM job j 
JOIN job_team t ON(j.jt_no=t.jt_no) 
JOIN fix f ON(j.fix_no=f.fix_no) 
JOIN maintain m ON(f.m_no=m.m_no) 
JOIN quote q ON(m.price_no=q.price_no) 
JOIN client c ON(q.c_no=c.c_no)
where j.j_no='$id'
");

/*$data1=mysqli_query($con,                  
"SELECT p_name,p_amount,p_device,p_drive,p_trans,p_rotary
FROM job j 
JOIN job_team t ON(j.jt_no=t.jt_no) 
JOIN quote q ON(j.price_no=q.price_no)
JOIN client c ON(q.c_no=c.c_no)
JOIN order_recode o ON(q.price_no=o.price_no)
JOIN produce p on (o.p_no=p.p_no) 
where j.j_no='$id'
");*/
$work=mysqli_query($con,"SELECT j_work FROM `job_work` w 
JOIN job j ON(w.j_no=j.j_no) 
JOIN quote q ON(j.price_no=q.price_no) 
JOIN client c ON(q.c_no=c.c_no)
where j.j_no='$id'");
$time=mysqli_query($con,                  
"SELECT in_time,out_time FROM time i JOIN job j ON(i.j_no=j.j_no)
where j.j_no='$id'
");


?>

<!--派工已完成詳細-->
<!doctype html> 
<html>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
<link rel=stylesheet href=/project/css/home.css>
<link rel=stylesheet href=/project/css/table-job.css>
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
        <li class="" onclick="location.href='job.php'"><span class="span">派工紀錄</span>
        </li>
        <li class="select" onclick="location.href='job_finish.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工歷史</span></li>
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
        $fin=mysqli_fetch_array($data)
    ?>
        <p>已完成派工-<?php echo $fin['j_type'];?></p> 
        <div class="boxtext">
        <p><b class="cname"><?php echo $fin['c_name'];?></b><br>
        地址：<b><?php echo $fin['c_address'];?></b><br>
        聯絡人：<b><?php echo $fin['c_cname'];?></b><br>
        聯絡電話：<b><?php echo $fin['c_cphone'];?></b>
        </p>
        </div> 
        
        <div class="card-date">派工日期：<?php echo $fin['j_date'];?><br>
        預計施工日期：<?php echo $fin['j_start_date'];?>
        ~<?php echo $fin['j_comp_date'];?><br>
        實際施工日期：<?php echo $fin['j_end_date'];?>
        ~<?php echo $fin['j_actual_date'];?>
        </div>
         <table class="table" cellspacing="0">
             <?php
            $data1=mysqli_query($con,"SELECT p_name,p_amount,p_device,p_drive,p_trans,p_rotary
                    FROM job j  
                    JOIN fix f ON(j.fix_no=f.fix_no) 
                    JOIN maintain m ON(f.m_no=m.m_no)  
                    JOIN order_recode r ON(m.p_id=r.p_id)
                    JOIN produce p on (r.p_no=p.p_no)
                    where j.j_no='$id'
                    ");
                    
            if( $fin['j_type']=="維修"){
    echo'<tr>
                <th>產品名稱</th>
                <td>';
                while ($rs=mysqli_fetch_array($data1)){  
                    echo $rs["p_name"].'-'.$rs["p_device"].$rs["p_drive"].$rs["p_trans"].$rs["p_rotary"].'x'.$rs["p_amount"].' <br>';
                }
                echo'</td>
            </tr>';
            }?>
            <!--tr>
                <th>產品名稱</th>
                <td><!--?php $rs=mysqli_fetch_array($data1); echo $rs['p_name'],("-"),$rs['p_device'],$rs['p_drive'],$rs['p_trans'],$rs['p_rotary'],("x"),$rs['p_amount']," <br>";?></td>
            </tr-->
            <!--tr>
                <th>數量</th>
                <td><!--?php while ($de=mysqli_fetch_array($data2)){ echo $de['p_amount'],'&nbsp';}?></td>
            </tr-->
            <tr>
                <th>施工團隊</th>
                <td><?php echo $fin['jt_team'];?></td>
            </tr>
            <tr>
                <th>團隊電話</th>
                <td><?php echo $fin['jt_teamphone'];?></td>
            <tr>
                <th>負責人</th>
                <td><?php echo $fin['jt_teamleader'];?></td>
            </tr>
             <tr>
                <th>工作項目</th>
                <td><?php while($jobwork=mysqli_fetch_array($work)){echo $jobwork['j_work'],"<br>";}?></td>
             </tr>
             <tr>
                <th>進出時間</th>
                <td><?php while($jobtime=mysqli_fetch_array($time)){echo $jobtime['in_time'],"~",$jobtime['out_time'],"<br>";}?></td>
             </tr>
         
          <tr>
              <th>備註(不收費)</th>
              <td><?php echo $fin['j_menof'];?></td>
          </tr>
            
          <tr>
              <th>備註(收費)</th>
              <td><?php echo $fin['j_meno'];?></td>
          </tr>
            
          <tr><th>注意事項</th>
              <td><?php echo $fin['j_notice'];?></td>
          </tr>
             
         </table>
         <div class="card-end">
        <input type='button' value="返回" onclick="location.href='job_finish.php'" class="end-btn bt-3 bt-r" ></div>
    </div>
    </div>
    <script src="/project/js/list.js"></script>
</body>

</html>