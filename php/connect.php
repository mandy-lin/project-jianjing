<?php

$con=mysqli_connect("localhost","root","","gtest");//連結伺服器
//mysqli_select_db($con,"contact");//選擇資料庫
mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文
?>