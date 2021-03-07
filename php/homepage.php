<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");
//mysqli_query($con,"set names utf8"); 
$job=mysqli_query($con,"SELECT j_comp_date,j_type FROM `job` where j_status='未完成'");
$main=mysqli_query($con,"SELECT DISTINCT m_date FROM `maintain` where m_status='需保養' and m_job_statue='' ORDER BY `maintain`.`m_date` ASC");
$today= date("Y-m-d");
$week=date("Y-m-d",strtotime("+2 week"));
while($rs = mysqli_fetch_array($job)){
if ($today== $rs['j_comp_date']){
echo "<script language=javascript>
alert('今天有派工結束喔~可以去填單'); 
</script>";
}
}

while($rs = mysqli_fetch_array($main)){
//echo $rs['m_date'];
if ($week== $rs['m_date']){
echo "<script language=javascript>
alert('兩週後有保養可以先去派工'); 
</script>";
}
}

 
	
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset='utf-8' />
 <link rel="icon" href="../img/jj.ico" type="image/x-icon" />
 <title>健璟內部管理系統</title>
 
<!--link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'-->    
<!--link rel=stylesheet href=/project/css/home_caleder.css-->  
<link rel=stylesheet href=/project/css/home.css>


    <!--偽元素-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link href='../packages/core/main.css' rel='stylesheet' /> <!--框-->
    <link href='../packages/daygrid/main.css' rel='stylesheet' /> <!--只跑這個月日期 日期向右邊靠-->
<!-- 基本檔-->
    <script src='../packages/core/main.js'></script>
    <script src='../packages/daygrid/main.js'></script>
    
    <script src='../packages/moment/main.js'></script>
    <script src='../packages/moment-timezone/main.js'></script>
 

<script src='../packages/bootstrap/main.js'></script>
<!--樣式-->

<!--script src='../packages/moment/moment.js'></script>
<script src='../packages/moment/moment-with-locales.js'></script-->

<link href='../packages/list/main.css' rel='stylesheet' />
<script src='../packages/list/main.js'></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid','list', 'bootstrap'],
          //themeSystem: 'bootstrap',
          header: {
          
        
        left:'prev,today,next',
        center: 'title',
        right: 'listDay,listWeek,dayGridMonth'
        
      },
       views: {
        listDay: { buttonText: '日' },
        listWeek: { buttonText: '週' },
        dayGridMonth: { buttonText: '月' }
      },
      locale: 'zh-tw',
      //defaultView: 'listWeek',
      editable: true,
      navLinks: true, 
      eventLimit: true,
      
  events: {
        url: 'calendar.php',

      },
      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }
   
        });


        calendar.render();
      });


var Today=new Date();
　console.log("今天日期是 " + Today.getFullYear()+ " 年 " + (Today.getMonth()+1) + " 月 " + Today.getDate() + " 日");

 

    </script>
    
<style>

#calendar {
   font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    margin: auto;
    font-size: 15px;
    max-width:  750px;
    margin-top: 1rem;
}
</style>
  </head>
  <body>


  <?php include("home.php");?>

  
  <aside id="aside">
          <ul class="select" >
          <li class="select" onclick="location.href='homepage.php'">
          <i class="fa fa-calendar" aria-hidden="true"></i><span class="span">首頁</span>
          </li>
          </ul>
          
          <ul class="" onclick="location.href='maintain.php'">
          <i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養</span>
          </ul>
          
          <ul class="" onclick="location.href='fix.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修</span></ul>
          <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
          <ul class="carte element" onclick="location.href='price.php'">
          <i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span></ul>
          <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span></ul>
          <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
          <ul class="" onclick="location.href='client.php'">
          <i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
          
  </aside>

<div id="content">


<div id='loading'>loading...</div>
<div id='calendar'></div>
 

</div>


<script src="/project/js/list.js"></script>
</body>
</html>