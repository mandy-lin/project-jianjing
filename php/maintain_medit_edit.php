<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

@$id=$_GET["id"];
@$p_name=$_GET['p_name'];
@$m_type=$_GET['m_type'];
@$price_no=$_GET['price_no'];
@$m_pno=$_GET['m_pno'];

if (isset($_POST['save'])){
$m_in_time=$_POST['m_in_time'];
$m_out_time=$_POST['m_out_time'];
$m_p_end_date=$_POST['m_p_end_date'];
$me_001=$_POST['me_001'];


                $me_001 = @$_POST['me_001'];
                $me_002 = @$_POST['me_002'];
                $me_003 = @$_POST['me_003'];
                $me_004 = @$_POST['me_004'];
                $me_005 = @$_POST['me_005'];
                $me_006 = @$_POST['me_006'];
                $me_007 = @$_POST['me_007'];
                $me_008 = @$_POST['me_008'];
                $me_009 = @$_POST['me_009'];
                $me_010 = @$_POST['me_010'];
                $me_011 = @$_POST['me_011'];
                $me_012 = @$_POST['me_012'];
                $me_013 = @$_POST['me_013'];
                $me_014 = @$_POST['me_014'];
                $me_015 = @$_POST['me_015'];
                $me_016 = @$_POST['me_016'];
    
                $se_001 = @$_POST['se_001'];
                $se_002 = @$_POST['se_002'];
                $se_003 = @$_POST['se_003'];
                $se_004 = @$_POST['se_004'];
    
                $hye_001 = @$_POST['hye_001'];
                $hye_002 = @$_POST['hye_002'];
                $hye_003 = @$_POST['hye_003'];
                $hye_004 = @$_POST['hye_004'];
                $hye_005 = @$_POST['hye_005'];
                $hye_006 = @$_POST['hye_006'];
                $hye_007 = @$_POST['hye_007'];
                $hye_008 = @$_POST['hye_008'];
                $hye_009 = @$_POST['hye_009'];
    
                $ye_001 = @$_POST['ye_001'];
                $ye_002 = @$_POST['ye_002'];
                $ye_003 = @$_POST['ye_003'];
                $ye_004 = @$_POST['ye_004'];
                $ye_005 = @$_POST['ye_005'];
    
    
                $ma_001 = @$_POST['ma_001'];
                $ma_002 = @$_POST['ma_002'];
                $ma_003 = @$_POST['ma_003'];
                $ma_004 = @$_POST['ma_004'];
                $ma_005 = @$_POST['ma_005'];
                $ma_006 = @$_POST['ma_006'];
                $ma_007 = @$_POST['ma_007'];
                $ma_008 = @$_POST['ma_008'];
                $ma_009 = @$_POST['ma_009'];
                $ma_010 = @$_POST['ma_010'];
                $ma_011 = @$_POST['ma_011'];
                $ma_012 = @$_POST['ma_012'];
                $ma_013 = @$_POST['ma_013'];
                $ma_014 = @$_POST['ma_014'];
                $ma_015 = @$_POST['ma_015'];
                $ma_016 = @$_POST['ma_016'];
                $ma_017 = @$_POST['ma_017'];
                $ma_018 = @$_POST['ma_018'];
                $ma_019 = @$_POST['ma_019'];
                $ma_020 = @$_POST['ma_020'];
                $ma_021 = @$_POST['ma_021'];
                $ma_022 = @$_POST['ma_022'];
                $ma_023 = @$_POST['ma_023'];
                $ma_024 = @$_POST['ma_024'];
    
                $mm_001 = @$_POST['mm_001'];
                $mm_002 = @$_POST['mm_002'];
                $mm_003 = @$_POST['mm_003'];
                $mm_004 = @$_POST['mm_004'];
                $mm_005 = @$_POST['mm_005'];
                $mm_006 = @$_POST['mm_006'];
                $mm_007 = @$_POST['mm_007'];
                $mm_008 = @$_POST['mm_008'];
                $mm_009 = @$_POST['mm_009'];
                $mm_010 = @$_POST['mm_010'];
                $mm_011 = @$_POST['mm_011'];
                $mm_012 = @$_POST['mm_012'];
                $mm_013 = @$_POST['mm_013'];
                $mm_014 = @$_POST['mm_014'];
                $mm_015 = @$_POST['mm_015'];
                $mm_016 = @$_POST['mm_016'];
                $mm_017 = @$_POST['mm_017'];
                $mm_018 = @$_POST['mm_018'];
                $mm_019 = @$_POST['mm_019'];
                $mm_020 = @$_POST['mm_020'];
                $mm_021 = @$_POST['mm_021'];
                $mm_022 = @$_POST['mm_022'];
                $mm_023 = @$_POST['mm_023'];
                $mm_024 = @$_POST['mm_024'];          
                $m_remarks=@$_POST['m_remarks'];
                $mnum=substr(date("ymdHis"),2,9);   
                $time2=date('Y-m-d', strtotime('+1 week'));
$sql7=mysqli_query($con,"UPDATE `maintain` SET`m_remarks`='$m_remarks' WHERE m_no='$id'");

if($p_name=='電梯'){
$data1=mysqli_query($con,"SELECT * FROM `year_elevator` WHERE m_no='$id'"); 
$ry=mysqli_fetch_array($data1);

$data2=mysqli_query($con,"SELECT * FROM `fix` WHERE m_no='$id'"); 
while($r=mysqli_fetch_array($data2)){
$fno=$r['fix_no'];}

if($ry['me_001']!=$me_001 or $ry['me_002']!=$me_002 or $ry['me_003']!=$me_003 or $ry['me_004']!=$me_004 or $ry['me_005']!=$me_005 or $ry['me_006']!=$me_006 or $ry['me_007']!=$me_007 or $ry['me_008']!=$me_008 or $ry['me_009']!=$me_009 or $ry['me_010']!=$me_010 or $ry['me_011']!=$me_011 or $ry['me_012']!=$me_012 or $ry['me_013']!=$me_013 or $ry['me_014']!=$me_014 or $ry['me_015']!=$me_015 or $ry['me_016']!=$me_016 or $ry['se_001']!=$se_001 or $ry['se_002']!=$se_002 or $ry['se_003']!=$se_003 or $ry['se_004']!=$se_004 or $ry['hye_001']!=$hye_001 or $ry['hye_002']!=$hye_002 or $ry['hye_003']!=$hye_003 or $ry['hye_004']!=$hye_004 or $ry['hye_005']!=$hye_005 or $ry['hye_006']!=$hye_006 or $ry['hye_007']!=$hye_007 or $ry['hye_008']!=$hye_008 or $ry['hye_009']!=$hye_009 or $ry['ye_001']!=$ye_001 or $ry['ye_002']!=$ye_002 or $ry['ye_003']!=$ye_003 or $ry['ye_004']!=$ye_004 or $ry['ye_005']!=$ye_005){
$dfitem=mysqli_query($con,"DELETE FROM `fix_item` WHERE fix_no='$fno' ");//刪除fix_item

if($m_type=='月保養'){
if($ry['me_001']=='✓' and $ry['me_002']=='✓' and $ry['me_003']=='✓' and $ry['me_004']=='✓' and $ry['me_005']=='✓' and $ry['me_006']=='✓' and $ry['me_007']=='✓' and $ry['me_008']=='✓' and $ry['me_009']=='✓' and $ry['me_010']=='✓' and $ry['me_011']=='✓' and $ry['me_012']=='✓' and $ry['me_013']=='✓' and $ry['me_014']=='✓' and $ry['me_015']=='✓' and $ry['me_016']=='✓' ){
$sql1=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$mnum','$id','$time2','1')");
$sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='需維修' WHERE m_no='$id'");
}
}
else if($m_type=='季保養'){
if($ry['me_001']=='✓' and $ry['me_002']=='✓' and $ry['me_003']=='✓' and $ry['me_004']=='✓' and $ry['me_005']=='✓' and $ry['me_006']=='✓' and $ry['me_007']=='✓' and $ry['me_008']=='✓' and $ry['me_009']=='✓' and $ry['me_010']=='✓' and $ry['me_011']=='✓' and $ry['me_012']=='✓' and $ry['me_013']=='✓' and $ry['me_014']=='✓' and $ry['me_015']=='✓' and $ry['me_016']=='✓' and $ry['se_001']=='✓' and $ry['se_002']=='✓' and $ry['se_003']=='✓' and $ry['se_004']=='✓' ){
$sql1=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$mnum','$id','$time2','1')");
$sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='需維修' WHERE m_no='$id'");
}
}
else if($m_type=='半年保養'){
if($ry['me_001']=='✓' and $ry['me_002']=='✓' and $ry['me_003']=='✓' and $ry['me_004']=='✓' and $ry['me_005']=='✓' and $ry['me_006']=='✓' and $ry['me_007']=='✓' and $ry['me_008']=='✓' and $ry['me_009']=='✓' and $ry['me_010']=='✓' and $ry['me_011']=='✓' and $ry['me_012']=='✓' and $ry['me_013']=='✓' and $ry['me_014']=='✓' and $ry['me_015']=='✓' and $ry['me_016']=='✓' and $ry['se_001']=='✓' and $ry['se_002']=='✓' and $ry['se_003']=='✓' and $ry['se_004']=='✓' and $hye_001=='✓' and $hye_002=='✓' and $ry['hye_003']=='✓' and $ry['hye_004']=='✓' and $ry['hye_005']=='✓' and $ry['hye_006']=='✓' and $ry['hye_007']=='✓' and $ry['hye_008']=='✓' and $ry['hye_009']=='✓'){
$sql1=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$mnum','$id','$time2','1')");
$sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='需維修' WHERE m_no='$id'");
}
}
else if($m_type=='年保養'){
if($ry['me_001']=='✓' and $ry['me_002']=='✓' and $ry['me_003']=='✓' and $ry['me_004']=='✓' and $ry['me_005']=='✓' and $ry['me_006']=='✓' and $ry['me_007']=='✓' and $ry['me_008']=='✓' and $ry['me_009']=='✓' and $ry['me_010']=='✓' and $ry['me_011']=='✓' and $ry['me_012']=='✓' and $ry['me_013']=='✓' and $ry['me_014']=='✓' and $ry['me_015']=='✓' and $ry['me_016']=='✓' and $ry['se_001']=='✓' and $ry['se_002']=='✓' and $ry['se_003']=='✓' and $ry['se_004']=='✓' and $hye_001=='✓' and $hye_002=='✓' and $ry['hye_003']=='✓' and $ry['hye_004']=='✓' and $ry['hye_005']=='✓' and $ry['hye_006']=='✓' and $ry['hye_007']=='✓' and $ry['hye_008']=='✓' and $ry['hye_009']=='✓' and $ry['ye_001']=='✓' and $ry['ye_002']=='✓' and $ry['ye_003']=='✓' and $ry['ye_004']=='✓' and $ry['ye_005']=='✓'){
$sql1=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$mnum','$id','$time2','1')");
$sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
}
}
$data3=mysqli_query($con,"SELECT * FROM `fix` WHERE m_no='$id'"); 
while($r=mysqli_fetch_array($data3)){
$fno=$r['fix_no'];}
if ($m_type == '月保養'){
if($me_001!='✓' and $me_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機械式環境狀況','$me_001')");
    }
if($me_002!='✓' and $me_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','受電盤、制御盤、信號盤','$me_002')");
    }
if($me_003!='✓' and $me_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電動機、牽引機','$me_003')");
    }
if($me_004!='✓' and $me_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電動發電機、啟動盤','$me_004')");
    }
if($me_005!='✓' and $me_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂走行狀態','$me_005')");
    }
if($me_006!='✓' and $me_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','對外部聯絡裝置','$me_006')");
    }
if($me_007!='✓' and $me_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','停車燈裝置','$me_007')");
    }
if($me_008!='✓' and $me_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂內裝、照明、通風扇','$me_008')");
    }
if($me_009!='✓' and $me_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂上環境狀況','$me_009')");
    }
if($me_010!='✓' and $me_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門之開閉裝置','$me_010')");
    }
if($me_011!='✓' and $me_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂著床狀態','$me_011')");
    }
if($me_012!='✓' and $me_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門開閉狀態','$me_012')");
    }
if($me_013!='✓' and $me_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','導滑器、導論','$me_013')");
    }
if($me_014!='✓' and $me_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','給油器','$me_014')");
    }
if($me_015!='✓' and $me_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘車門、門踏板','$me_015')");
    }
if($me_016!='✓' and $me_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘場按鈕、指示燈','$me_016')");
    }   
}
else if($m_type == '季保養'){
if($me_001!='✓' and $me_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機械式環境狀況','$me_001')");
    }
if($me_002!='✓' and $me_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','受電盤、制御盤、信號盤','$me_002')");
    }
if($me_003!='✓' and $me_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電動機、牽引機','$me_003')");
    }
if($me_004!='✓' and $me_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電動發電機、啟動盤','$me_004')");
    }
if($me_005!='✓' and $me_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂走行狀態','$me_005')");
    }
if($me_006!='✓' and $me_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','對外部聯絡裝置','$me_006')");
    }
if($me_007!='✓' and $me_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','停車燈裝置','$me_007')");
    }
if($me_008!='✓' and $me_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂內裝、照明、通風扇','$me_008')");
    }
if($me_009!='✓' and $me_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂上環境狀況','$me_009')");
    }
if($me_010!='✓' and $me_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門之開閉裝置','$me_010')");
    }
if($me_011!='✓' and $me_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂著床狀態','$me_011')");
    }
if($me_012!='✓' and $me_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門開閉狀態','$me_012')");
    }
if($me_013!='✓' and $me_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','導滑器、導論','$me_013')");
    }
if($me_014!='✓' and $me_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','給油器','$me_014')");
    }
if($me_015!='✓' and $me_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘車門、門踏板','$me_015')");
    }
if($me_016!='✓' and $me_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘場按鈕、指示燈','$me_016')");
    }   
if($se_001!='✓' and $se_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂操作盤、指示燈','$se_001')");
    }
if($se_002!='✓' and $se_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂門、門踏板','$se_002')");
    }
if($se_003!='✓' and $se_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','閉門安全裝置','$se_003')");
    }
if($se_004!='✓' and $se_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門手動開放','$se_004')");
    }
}
else if($m_type == '半年保養'){
if($me_001!='✓' and $me_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機械式環境狀況','$me_001')");
    }
if($me_002!='✓' and $me_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','受電盤、制御盤、信號盤','$me_002')");
    }
if($me_003!='✓' and $me_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電動機、牽引機','$me_003')");
    }
if($me_004!='✓' and $me_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電動發電機、啟動盤','$me_004')");
    }
if($me_005!='✓' and $me_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂走行狀態','$me_005')");
    }
if($me_006!='✓' and $me_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','對外部聯絡裝置','$me_006')");
    }
if($me_007!='✓' and $me_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','停車燈裝置','$me_007')");
    }
if($me_008!='✓' and $me_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂內裝、照明、通風扇','$me_008')");
    }
if($me_009!='✓' and $me_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂上環境狀況','$me_009')");
    }
if($me_010!='✓' and $me_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門之開閉裝置','$me_010')");
    }
if($me_011!='✓' and $me_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂著床狀態','$me_011')");
    }
if($me_012!='✓' and $me_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門開閉狀態','$me_012')");
    }
if($me_013!='✓' and $me_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','導滑器、導論','$me_013')");
    }
if($me_014!='✓' and $me_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','給油器','$me_014')");
    }
if($me_015!='✓' and $me_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘車門、門踏板','$me_015')");
    }
if($me_016!='✓' and $me_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘場按鈕、指示燈','$me_016')");
    }   
if($se_001!='✓' and $se_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂操作盤、指示燈','$se_001')");
    }
if($se_002!='✓' and $se_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂門、門踏板','$se_002')");
    }
if($se_003!='✓' and $se_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','閉門安全裝置','$se_003')");
    }
if($se_004!='✓' and $se_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門手動開放','$se_004')");
    }
if($hye_001!='✓' and $hye_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電磁煞車器','$hye_001')");
    }
if($hye_002!='✓' and $hye_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘場選擇器','$hye_002')");
    }
if($hye_003!='✓' and $hye_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','調速器','$hye_003')");
    }
if($hye_004!='✓' and $hye_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','升降路內、機坑內環境狀況','$hye_004')");
    }
if($hye_005!='✓' and $hye_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂、配重之轉向輪','$hye_005')");
    }
if($hye_006!='✓' and $hye_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','主鋼索、調速鋼索、檢點','$hye_006')");
    }
if($hye_007!='✓' and $hye_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','導軌檢點、鋼帶檢點','$hye_007')");
    }
if($hye_008!='✓' and $hye_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','配重器','$hye_008')");
    }
if($hye_009!='✓' and $hye_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','DrSW動作、DrLock機構檢點','$hye_009')");
    }
}
else if($m_type == '年保養'){
if($me_001!='✓' and $me_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機械式環境狀況','$me_001')");
    }
if($me_002!='✓' and $me_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','受電盤、制御盤、信號盤','$me_002')");
    }
if($me_003!='✓' and $me_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電動機、牽引機','$me_003')");
    }
if($me_004!='✓' and $me_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電動發電機、啟動盤','$me_004')");
    }
if($me_005!='✓' and $me_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂走行狀態','$me_005')");
    }
if($me_006!='✓' and $me_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','對外部聯絡裝置','$me_006')");
    }
if($me_007!='✓' and $me_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','停車燈裝置','$me_007')");
    }
if($me_008!='✓' and $me_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂內裝、照明、通風扇','$me_008')");
    }
if($me_009!='✓' and $me_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂上環境狀況','$me_009')");
    }
if($me_010!='✓' and $me_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門之開閉裝置','$me_010')");
    }
if($me_011!='✓' and $me_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂著床狀態','$me_011')");
    }
if($me_012!='✓' and $me_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門開閉狀態','$me_012')");
    }
if($me_013!='✓' and $me_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','導滑器、導論','$me_013')");
    }
if($me_014!='✓' and $me_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','給油器','$me_014')");
    }
if($me_015!='✓' and $me_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘車門、門踏板','$me_015')");
    }
if($me_016!='✓' and $me_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘場按鈕、指示燈','$me_016')");
    }   
if($se_001!='✓' and $se_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂操作盤、指示燈','$se_001')");
    }
if($se_002!='✓' and $se_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂門、門踏板','$se_002')");
    }
if($se_003!='✓' and $se_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','閉門安全裝置','$se_003')");
    }
if($se_004!='✓' and $se_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','門手動開放','$se_004')");
    }
if($hye_001!='✓' and $hye_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電磁煞車器','$hye_001')");
    }
if($hye_002!='✓' and $hye_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','乘場選擇器','$hye_002')");
    }
if($hye_003!='✓' and $hye_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','調速器','$hye_003')");
    }
if($hye_004!='✓' and $hye_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','升降路內、機坑內環境狀況','$hye_004')");
    }
if($hye_005!='✓' and $hye_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車廂、配重之轉向輪','$hye_005')");
    }
if($hye_006!='✓' and $hye_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','主鋼索、調速鋼索、檢點','$hye_006')");
    }
if($hye_007!='✓' and $hye_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','導軌檢點、鋼帶檢點','$hye_007')");
    }
if($hye_008!='✓' and $hye_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','配重器','$hye_008')");
    }
if($hye_009!='✓' and $hye_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','DrSW動作、DrLock機構檢點','$hye_009')");
    }
if($ye_001!='✓' and $ye_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','上、下部極限開關動作確認','$ye_001')");
    }
if($ye_002!='✓' and $ye_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','緊急停止裝置檢點','$ye_002')");
    }
if($ye_003!='✓' and $ye_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','移動電纜','$ye_003')");
    }
if($ye_004!='✓' and $ye_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','緩衝器檢點','$ye_004')");
    }
if($ye_005!='✓' and $ye_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','各張力輪','$ye_005')");
    }

}
if($m_remarks!=null){
    $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','$m_remarks','')");
    }
if($m_type=='月保養'){
if($me_001=='✓' and $me_002=='✓' and $me_003=='✓' and $me_004=='✓' and $me_005=='✓' and $me_006=='✓' and $me_007=='✓' and $me_008=='✓' and $me_009=='✓' and $me_010=='✓' and $me_011=='✓' and $me_012=='✓' and $me_013=='✓' and $me_014=='✓' and $me_015=='✓' and $me_016=='✓' ){
$dfix=mysqli_query($con,"DELETE FROM `fix` WHERE fix_no='$fno' ");
$nofix=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
}
}
else if($m_type=='季保養'){
if($me_001=='✓' and $me_002=='✓' and $me_003=='✓' and $me_004=='✓' and $me_005=='✓' and $me_006=='✓' and $me_007=='✓' and $me_008=='✓' and $me_009=='✓' and $me_010=='✓' and $me_011=='✓' and $me_012=='✓' and $me_013=='✓' and $me_014=='✓' and $me_015=='✓' and $me_016=='✓' and $se_001=='✓' and $se_002=='✓' and $se_003=='✓' and $se_004=='✓' ){
$dfix=mysqli_query($con,"DELETE FROM `fix` WHERE fix_no='$fno' ");
$nofix=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
}
}
else if($m_type=='半年保養'){
if($me_001=='✓' and $me_002=='✓' and $me_003=='✓' and $me_004=='✓' and $me_005=='✓' and $me_006=='✓' and $me_007=='✓' and $me_008=='✓' and $me_009=='✓' and $me_010=='✓' and $me_011=='✓' and $me_012=='✓' and $me_013=='✓' and $me_014=='✓' and $me_015=='✓' and $me_016=='✓' and $se_001=='✓' and $se_002=='✓' and $se_003=='✓' and $se_004=='✓' and $hye_001=='✓' and $hye_002=='✓' and $hye_003=='✓' and $hye_004=='✓' and $hye_005=='✓' and $hye_006=='✓' and $hye_007=='✓' and $hye_008=='✓' and $hye_009=='✓'){
$dfix=mysqli_query($con,"DELETE FROM `fix` WHERE fix_no='$fno' ");
$nofix=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
}
}
else if($m_type=='年保養'){
if($me_001=='✓' and $me_002=='✓' and $me_003=='✓' and $me_004=='✓' and $me_005=='✓' and $me_006=='✓' and $me_007=='✓' and $me_008=='✓' and $me_009=='✓' and $me_010=='✓' and $me_011=='✓' and $me_012=='✓' and $me_013=='✓' and $me_014=='✓' and $me_015=='✓' and $me_016=='✓' and $se_001=='✓' and $se_002=='✓' and $se_003=='✓' and $se_004=='✓' and $hye_001=='✓' and $hye_002=='✓' and $hye_003=='✓' and $hye_004=='✓' and $hye_005=='✓' and $hye_006=='✓' and $hye_007=='✓' and $hye_008=='✓' and $hye_009=='✓' and $ye_001=='✓' and $ye_002=='✓' and $ye_003=='✓' and $ye_004=='✓' and $ye_005=='✓'){
$dfix=mysqli_query($con,"DELETE FROM `fix` WHERE fix_no='$fno' ");
$nofix=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
}
}



 $sql6=mysqli_query($con,"UPDATE `year_elevator` SET `me_001`='$me_001',`me_002`='$me_002',`me_003`='$me_003',`me_004`='$me_004',`me_005`='$me_005',`me_006`='$me_006',`me_007`='$me_007',`me_008`='$me_008',`me_009`='$me_009',`me_010`='$me_010',`me_011`='$me_011',`me_012`='$me_012',`me_013`='$me_013',`me_014`='$me_014',`me_015`='$me_015',`me_016`='$me_016',`se_001`='$se_001',`se_002`='$se_002',`se_003`='$se_003',`se_004`='$se_004',`hye_001`='$hye_001',`hye_002`='$hye_002',`hye_003`='$hye_003',`hye_004`='$hye_004',`hye_005`='$hye_005',`hye_006`='$hye_006',`hye_007`='$hye_007',`hye_008`='$hye_008',`hye_009`='$hye_009',`ye_001`='$ye_001',`ye_002`='$ye_002',`ye_003`='$ye_003',`ye_004`='$ye_004',`ye_005`='$ye_005' where m_no='$id' ");
}



if($m_in_time!='' or $m_out_time!='' or $m_p_end_date!='' ){
$sql=mysqli_query($con,"UPDATE `maintain` SET`m_in_time`='$m_in_time',`m_out_time`='$m_out_time' ,`m_p_end_date`='$m_p_end_date' WHERE m_no='$id'");

  if($nofix){
    echo "<script language=javascript>
    alert('已經儲存'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type& price_no=$price_no';
    </script>";
    }
else {
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$fno';
    </script>"
    ;}
}
}
else if($p_name=='附屬設備'){

$data=mysqli_query($con,"select * from `month_attached_item` where m_no='$id'"); 
$ry=mysqli_fetch_array($data);
$data2=mysqli_query($con,"SELECT * FROM `fix` WHERE m_no='$id'"); 
while($r=mysqli_fetch_array($data2)){
$fno=$r['fix_no'];}

if($ry['ma_001']!=$ma_001 or $ry['ma_002']!=$ma_002 or $ry['ma_003']!=$ma_003 or $ry['ma_004']!=$ma_004 or $ry['ma_005']!=$ma_005 or $ry['ma_006']!=$ma_006 or $ry['ma_007']!=$ma_007 or $ry['ma_008']!=$ma_008 or $ry['ma_009']!=$ma_009 or $ry['ma_010']!=$ma_010 or $ry['ma_011']!=$ma_011 or $ry['ma_012']!=$ma_012 or $ry['ma_013']!=$ma_013 or $ry['ma_014']!=$ma_014 or $ry['ma_015']!=$ma_015 or $ry['ma_016']!=$ma_016 or $ry['ma_017']!=$ma_017 or $ry['ma_018']!=$ma_018 or $ry['ma_019']!=$ma_019 or $ry['ma_020']!=$ma_020 or $ry['ma_021']!=$ma_021 or $ry['ma_022']!=$ma_022 or $ry['ma_023']!=$ma_023 or $ry['ma_024']!=$ma_024 ){
$dfitem=mysqli_query($con,"DELETE FROM `fix_item` WHERE fix_no='$fno' ");//刪除fix_item
if($ry['ma_001']=='✓' and $ry['ma_002']=='✓' and $ry['ma_003']=='✓' and $ry['ma_004']=='✓' and $ry['ma_005']=='✓' and $ry['ma_006']=='✓' and $ry['ma_007']=='✓' and $ry['ma_008']=='✓' and $ry['ma_009']=='✓' and $ry['ma_010']=='✓' and $ry['ma_011']=='✓' and $ry['ma_012']=='✓' and $ry['ma_013']=='✓' and $ry['ma_014']=='✓' and $ry['ma_015']=='✓' and $ry['ma_016']=='✓' and $ry['ma_017']=='✓' and $ry['ma_018']=='✓' and $ry['ma_019']=='✓' and $ry['ma_020']=='✓' and $ry['ma_021']=='✓' and $ry['ma_022']=='✓' and $ry['ma_023']=='✓' and $ry['ma_024']=='✓' ){
$sql2=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$mnum','$id','$time2','1')");
$sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='需維修' WHERE m_no='$id'");
}  
$data3=mysqli_query($con,"SELECT * FROM `fix` WHERE m_no='$id'"); 
while($r=mysqli_fetch_array($data3)){
$fno=$r['fix_no'];}
    if($ma_001!='✓' and $ma_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','注意事項項目','$ma_001')");
    }
    if($ma_002!='✓' and $ma_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','承載存放限制','$ma_002')");
    }
    if($ma_003!='✓' and $ma_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','各式按鈕檢視','$ma_003')");
    }
    if($ma_004!='✓' and $ma_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','設備運轉測試','$ma_004')");
    }
    if($ma_005!='✓' and $ma_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車台定位檢視','$ma_005')");
    }
    if($ma_006!='✓' and $ma_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車台水平檢視','$ma_006')");
    }
    if($ma_007!='✓' and $ma_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','警(指)是裝置檢視','$ma_007')");
    }
    if($ma_008!='✓' and $ma_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','升降、橫移連鎖裝置檢視','$ma_008')");
    }
    if($ma_009!='✓' and $ma_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','光電開關檢視','$ma_009')");
    }
    if($ma_010!='✓' and $ma_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','限動、檢測開關檢視','$ma_010')");
    }
    if($ma_011!='✓' and $ma_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','驅動元件檢視','$ma_011')");
    }
    if($ma_012!='✓' and $ma_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','各式傳動元件檢視','$ma_012')");
    }
    if($ma_013!='✓' and $ma_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','油壓元件檢視','$ma_013')");
    }
    if($ma_014!='✓' and $ma_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','鍊條、鋼索檢視','$ma_014')");
    }
    if($ma_015!='✓' and $ma_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電控系統檢視','$ma_015')");
    }
    if($ma_016!='✓' and $ma_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機械結構、置車板機廂檢視','$ma_016')");
    }
    if($ma_017!='✓' and $ma_017!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','安全扣元件檢視','$ma_017')");
    }
    if($ma_018!='✓' and $ma_018!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','油壓防爆閥檢視','$ma_018')");
    }
    if($ma_019!='✓' and $ma_019!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','防落裝置檢視','$ma_019')");
    }
    if($ma_020!='✓' and $ma_020!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','照明裝置檢視','$ma_020')");
    }
    if($ma_021!='✓' and $ma_021!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機械式檢視','$ma_021')");
    }
    if($ma_022!='✓' and $ma_022!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','區格防護規定(欄杆)','$ma_022')");
    }
    if($ma_023!='✓' and $ma_023!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機坑積水檢視','$ma_023')");
    }
    if($ma_024!='✓' and $ma_024!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','停放之車輛符合承載規範','$ma_024')");
    }
    if($m_remarks!=null){
    $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','$m_remarks','')");
    }
if($ma_001=='✓' and $ma_002=='✓' and $ma_003=='✓' and $ma_004=='✓' and $ma_005=='✓' and $ma_006=='✓' and $ma_007=='✓' and $ma_008=='✓' and $ma_009=='✓' and $ma_010=='✓' and $ma_011=='✓' and $ma_012=='✓' and $ma_013=='✓' and $ma_014=='✓' and $ma_015=='✓' and $ma_016=='✓' and $ma_017=='✓' and $ma_018=='✓' and $ma_019=='✓' and $ma_020=='✓' and $ma_021=='✓' and $ma_022=='✓' and $ma_023=='✓' and $ma_024=='✓' ){
$dfix=mysqli_query($con,"DELETE FROM `fix` WHERE fix_no='$fno' ");
$nofix=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
}   
$sql3=mysqli_query($con,"UPDATE `month_attached_item` SET `ma_001`='$ma_001',`ma_002`='$ma_002',`ma_003`='$ma_003',`ma_004`='$ma_004',`ma_005`='$ma_005',`ma_006`='$ma_006',`ma_007`='$ma_007',`ma_008`='$ma_008',`ma_009`='$ma_009',`ma_010`='$ma_010',`ma_011`='$ma_011',`ma_012`='$ma_012',`ma_013`='$ma_013',`ma_014`='$ma_014',`ma_015`='$ma_015',`ma_016`='$ma_016',`ma_017`='$ma_017',`ma_018`='$ma_018',`ma_019`='$ma_019',`ma_020`='$ma_020',`ma_021`='$ma_021',`ma_022`='$ma_022',`ma_023`='$ma_023',`ma_024`='$ma_024' WHERE m_no='$id'");

}
if($m_in_time!='' or $m_out_time!='' or $m_p_end_date!='' ){
$sql=mysqli_query($con,"UPDATE `maintain` SET`m_in_time`='$m_in_time',`m_out_time`='$m_out_time' ,`m_p_end_date`='$m_p_end_date' WHERE m_no='$id'");
  
  if($nofix){
    echo "<script language=javascript>
    alert('已經儲存'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type& price_no=$price_no';
    </script>";
    }
else {
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$fno';
    </script>"
    ;}
   /*if($sql){
    
    echo "<script language=javascript>
    alert('已經儲存'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type& price_no=$price_no';
    </script>";
    }
     else{ 
    echo mysqli_error($con);
    } */

}
}
else if($p_name=='停車設備'){

$data=mysqli_query($con,"select * from `month_machine_item` where m_no='$id'");
$ry=mysqli_fetch_array($data);
$data2=mysqli_query($con,"SELECT * FROM `fix` WHERE m_no='$id'"); 
while($r=mysqli_fetch_array($data2)){
$fno=$r['fix_no'];}

if($ry['mm_001']!=$mm_001 or $ry['mm_002']!=$mm_002 or $ry['mm_003']!=$mm_003 or $ry['mm_004']!=$mm_004 or $ry['mm_005']!=$mm_005 or $ry['mm_006']!=$mm_006 or $ry['mm_007']!=$mm_007 or $ry['mm_008']!=$mm_008 or $ry['mm_009']!=$mm_009 or $ry['mm_010']!=$mm_010 or $ry['mm_011']!=$mm_011 or $ry['mm_012']!=$mm_012 or $ry['mm_013']!=$mm_013 or $ry['mm_014']!=$mm_014 or $ry['mm_015']!=$mm_015 or $ry['mm_016']!=$mm_016 or $ry['mm_017']!=$mm_017 or $ry['mm_018']!=$mm_018 or $ry['mm_019']!=$mm_019 or $ry['mm_020']!=$mm_020 or $ry['mm_021']!=$mm_021 or $ry['mm_022']!=$mm_022 or $ry['mm_023']!=$mm_023 or $ry['mm_024']!=$mm_024 ){
$dfitem=mysqli_query($con,"DELETE FROM `fix_item` WHERE fix_no='$fno' ");//刪除fix_item
if($ry['mm_001']=='✓' and $ry['mm_002']=='✓' and $ry['mm_003']=='✓' and $ry['mm_004']=='✓' and $ry['mm_005']=='✓' and $ry['mm_006']=='✓' and $ry['mm_007']=='✓' and $ry['mm_008']=='✓' and $ry['mm_009']=='✓' and $ry['mm_010']=='✓' and $ry['mm_011']=='✓' and $ry['mm_012']=='✓' and $ry['mm_013']=='✓' and $ry['mm_014']=='✓' and $ry['mm_015']=='✓' and $ry['mm_016']=='✓' and $ry['mm_017']=='✓' and $ry['mm_018']=='✓' and $ry['mm_019']=='✓' and $ry['mm_020']=='✓' and $ry['mm_021']=='✓' and $ry['mm_022']=='✓' and $ry['mm_023']=='✓' and $ry['mm_024']=='✓' ){
$sql2=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$mnum','$id','$time2','1')");
$sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='需維修' WHERE m_no='$id'");
}  
$data3=mysqli_query($con,"SELECT * FROM `fix` WHERE m_no='$id'"); 
while($r=mysqli_fetch_array($data3)){
$fno=$r['fix_no'];}
if($mm_001!='✓' and $mm_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','注意事項項目','$mm_001')");
    }
    if($mm_002!='✓' and $mm_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','承載存放限制','$mm_002')");
    }
    if($mm_003!='✓' and $mm_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','各式按鈕檢視','$mm_003')");
    }
    if($mm_004!='✓' and $mm_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','設備運轉測試','$mm_004')");
    }
    if($mm_005!='✓' and $mm_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車台定位檢視','$mm_005')");
    }
    if($mm_006!='✓' and $mm_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','車台水平檢視','$mm_006')");
    }
    if($mm_007!='✓' and $mm_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','警(指)是裝置檢視','$mm_007')");
    }
    if($mm_008!='✓' and $mm_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','升降、橫移連鎖裝置檢視','$mm_008')");
    }
    if($mm_009!='✓' and $mm_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','光電開關檢視','$mm_009')");
    }
    if($mm_010!='✓' and $mm_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','限動、檢測開關檢視','$mm_010')");
    }
    if($mm_011!='✓' and $mm_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','驅動元件檢視','$mm_011')");
    }
    if($mm_012!='✓' and $mm_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','各式傳動元件檢視','$mm_012')");
    }
    if($mm_013!='✓' and $mm_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','油壓元件檢視','$mm_013')");
    }
    if($mm_014!='✓' and $mm_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','鍊條、鋼索檢視','$mm_014')");
    }
    if($mm_015!='✓' and $mm_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','電控系統檢視','$mm_015')");
    }
    if($mm_016!='✓' and $mm_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機械結構、置車板機廂檢視','$mm_016')");
    }
    if($mm_017!='✓' and $mm_017!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','安全扣元件檢視','$mm_017')");
    }
    if($mm_018!='✓' and $mm_018!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','油壓防爆閥檢視','$mm_018')");
    }
    if($mm_019!='✓' and $mm_019!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','防落裝置檢視','$mm_019')");
    }
    if($mm_020!='✓' and $mm_020!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','照明裝置檢視','$mm_020')");
    }
    if($mm_021!='✓' and $mm_021!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機械式檢視','$mm_021')");
    }
    if($mm_022!='✓' and $mm_022!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','區格防護規定(欄杆)','$mm_022')");
    }
    if($mm_023!='✓' and $mm_023!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','機坑積水檢視','$mm_023')");
    }
    if($mm_024!='✓' and $mm_024!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','停放之車輛符合承載規範','$mm_024')");
    }    
    if($m_remarks!=null){
    $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$fno','$m_remarks','')");
    }
if($mm_001=='✓' and $mm_002=='✓' and $mm_003=='✓' and $mm_004=='✓' and $mm_005=='✓' and $mm_006=='✓' and $mm_007=='✓' and $mm_008=='✓' and $mm_009=='✓' and $mm_010=='✓' and $mm_011=='✓' and $mm_012=='✓' and $mm_013=='✓' and $mm_014=='✓' and $mm_015=='✓' and $mm_016=='✓' and $mm_017=='✓' and $mm_018=='✓' and $mm_019=='✓' and $mm_020=='✓' and $mm_021=='✓' and $mm_022=='✓' and $mm_023=='✓' and $mm_024=='✓' ){
$dfix=mysqli_query($con,"DELETE FROM `fix` WHERE fix_no='$fno' ");
$nofix=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
}  

$sql4=mysqli_query($con,"UPDATE `month_machine_item` SET `mm_001`='$mm_001',`mm_002`='$mm_002',`mm_003`='$mm_003',`mm_004`='$mm_004',`mm_005`='$mm_005',`mm_006`='$mm_006',`mm_007`='$mm_007',`mm_008`='$mm_008',`mm_009`='$mm_009',`mm_010`='$mm_010',`mm_011`='$mm_011',`mm_012`='$mm_012',`mm_013`='$mm_013',`mm_014`='$mm_014',`mm_015`='$mm_015',`mm_016`='$mm_016',`mm_017`='$mm_017',`mm_018`='$mm_018',`mm_019`='$mm_019',`mm_020`='$mm_020',`mm_021`='$mm_021',`mm_022`='$mm_022',`mm_023`='$mm_023',`mm_024`='$mm_024' WHERE m_no='$id'");

}
if($m_in_time!='' or $m_out_time!='' or $m_p_end_date!='' ){
$sql=mysqli_query($con,"UPDATE `maintain` SET`m_in_time`='$m_in_time',`m_out_time`='$m_out_time' ,`m_p_end_date`='$m_p_end_date' WHERE m_no='$id'");
  if($nofix){
    echo "<script language=javascript>
    alert('已經儲存'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type& price_no=$price_no';
    </script>";
    }
else {
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$fno';
    </script>"
    ;}
   /*if($sql){
    
    echo "<script language=javascript>
    alert('已經儲存'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type& price_no=$price_no';
    </script>";
    }
     else{ 
    echo mysqli_error($con);
    } */

}
}
/*if($m_in_time!='' and $m_out_time!='' and $m_p_end_date!='' ){
$sql=mysqli_query($con,"UPDATE `maintain` SET`m_in_time`='$m_in_time',`m_out_time`='$m_out_time' ,`m_p_end_date`='$m_p_end_date' WHERE m_no='$id'");



   if($sql){
    
    echo "<script language=javascript>
    alert('已經儲存'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type& price_no=$price_no';
    </script>";
    }
     else{ 
    echo mysqli_error($con);
    } 

}
else if($m_in_time!='' or $m_out_time!='' or $m_p_end_date!=''){
$sql=mysqli_query($con,"UPDATE `maintain` SET`m_in_time`='$m_in_time',`m_out_time`='$m_out_time' ,`m_p_end_date`='$m_p_end_date' WHERE m_no='$id'");


}
    */

}
if(isset($_POST['button'])){
 $data2=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_status='已結束' and  m.m_no='$id' ");
}else{
  $data2=mysqli_query($con,"select * from maintain m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_status='已結束'and m.m_no='$id'");
}



$ma =mysqli_query($con,"SELECT * FROM `maintain` m join quote q on (m.price_no=q.price_no) join client c on(q.c_no=c.c_no) join order_recode o on (o.p_id=m.p_id) join produce pro on(o.p_no=pro.p_no) join month_attached_item ma on(ma.m_no=m.m_no)where m.m_no='$id'");
$mm =mysqli_query($con,"SELECT * FROM `maintain` m join quote q on (m.price_no=q.price_no) join client c on(q.c_no=c.c_no) join order_recode o on (o.p_id=m.p_id) join produce pro on(o.p_no=pro.p_no) join month_machine_item mm on(mm.m_no=m.m_no) where m.m_no='$id'");


$ye =mysqli_query($con,"SELECT * FROM `maintain` m join quote q on (m.price_no=q.price_no) join client c on(q.c_no=c.c_no) join order_recode o on (o.p_id=m.p_id) join produce pro on(o.p_no=pro.p_no)join year_elevator ye on(ye.m_no=m.m_no) where m.m_no='$id'");





$data = mysqli_query($con,"SELECT * FROM `maintain`m join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no)  where m.m_no='$id'");

//$fstardate=@$_POST[fstardate];
//and f.f_star_date like'%$fstardate%' 
 if(isset($_POST['fix'])){
        $data5=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.f_statue='0' and m.m_no='$id'");
    } 
    else{
        $data5=mysqli_query($con,"select * from fix f join maintain m on (f.m_no=m.m_no) join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where f.f_statue='0' and m.m_no='$id'");
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
    <script type="text/javascript">
        function printdiv(printpage) { //宣告控制列印的函式 引數是一個物件的內容將要被列印
            var newstr = printpage.innerHTML; //獲取要列印的內容
            var oldstr = document.body.innerHTML; //原來body中的內容
            document.body.innerHTML = newstr; //用將要列印的內容替換原來body中的內容
            window.print(); //開始列印
            document.body.innerHTML = oldstr; //再將原來body中的內容還原
            return false;
        }
        window.onload = function() {
            var bt = document.getElementById("bt");
            var div_print = document.getElementById("div_print");
            bt.onclick = function() {
                printdiv(div_print);
            }
        }
        /*function 
        $('input[type="radio"]
        ).on("click",function(){
        			   alert('ok');

        });*/


        function editdata() {
            var edit_elements = document.getElementsByClassName("readonly")
            for (i = 0; i < edit_elements.length; i++) {
                edit_elements[i].removeAttribute("readonly");
                edit_elements[i].style = "border:inline";
              
            };

            document.getElementById('b').style.display = "inline";
            document.getElementById('a').style.display = "none";
            document.getElementById('done').style.display = "inline";
            document.getElementById('me_003').style.display = "inline";
            document.getElementById('s').style.display = "none";
        }
    </script>

</head>

<body>

<?php include("home.php");?>
  <aside id="aside">
          <ul class="" onclick="location.href='homepage.php'">
        <i class="fa fa-calendar" aria-hidden="true"></i><span class="span">首頁</span>
    </ul>
    <ul class="select">
        <li class=""  onclick="location.href='maintain.php'"><span class="span">保養紀錄</span>
        </li>
        <li class="select" onclick="location.href='maintain_record.php'"><i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養歷史</span></li>
     </ul>
          
    <ul class="" onclick="location.href='fix.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修</span></ul>
    <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span></ul>
    
    <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span>
    </ul>
    
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
    
  </aside>
<div id='content' id="medit_table1">
<div class="card">
<div class='card-header'><?php echo $m_pno;?>保養紀錄</div>
<table id="medit_table" class='table'>
<?php
    while ($rs=mysqli_fetch_array($data)){
     //$type=$rs['m_type'];
     //setcookie("type",$type,time()+3600);     
?>
    <tr>
    <td >保養日期</td>
    <td ><?php echo $rs['m_date'];?></td>
    <td >保養時間</td>
    <td ><?php echo $rs['m_type'];?></td>
    </tr>
    <tr>
    <td  colspan="2">產品名稱</td>
    <td  colspan="2"><?php echo $rs['p_name'];?></td>
    </tr>
    <tr>
    <td>機械停車設備</td>
    <td><?php echo $rs['p_device'];?></td>
    <td>驅動方式</td>
    <td><?php echo $rs['p_drive'];?></td>
    </tr>
    <tr>
    <td>傳動元件</td>
    <td><?php echo $rs['p_trans'];?></td>
    <td>旋轉台</td>
    <td><?php echo $rs['p_rotary'];?></td>
    </tr>
    <tr>
    <td >大樓名稱</td>
    <td ><?php echo $rs['c_name'];?></td>
    <td >大樓地址</td>
    <td ><?php echo $rs['c_address'];?></td>
    </tr>
    <tr>
    <td >聯絡電話</td>
    <td ><?php echo $rs['c_phone'];?></td>
    <td >使用許可證有效日期</td>
    <td ><?php echo $rs['m_license'];?></td>
    </tr>
    <tr>
    <td >進入時間</td>
    <td><input type="time" name="m_in_time" value="<?php echo $rs['m_in_time'];?>" form="form2" class="table-input"></td>
    <td >出去時間</td>
    <td><input type="time" name="m_out_time" value="<?php echo $rs['m_out_time'];?>" form="form2" class="table-input"></td>
    </tr>
    <tr>
    <td >實際施工日期</td>
    <td><input type="date" name="m_p_end_date" value="<?php echo $rs['m_p_end_date'];?>" form="form2" class="table-input"></td>
    <td >預計施工時間</td>
    <td><?php echo $rs['m_pretime'];?></td>
    </tr>

<?php
    }
?>
</table>

<p>
<h4>維護檢視項目</h4>
<?php 
        
        if($p_name=='附屬設備' ){$rs=mysqli_fetch_array($ma);}
        
        else if ($p_name=='停車設備' ){$rs=mysqli_fetch_array($mm);}
        
        else if ($p_name=='電梯'){$rs=mysqli_fetch_array($ye );}
        


?>
<div id="month" class="item">
<div class="item-head">月保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >機械式環境狀況:</td>
<td  >
<select  form="form2" id="me_001" name="me_001">
<?php
$me_001=$rs['me_001'];

if($me_001=='✓'){

echo"<option value='$me_001'  selected>✓</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_001=='✕'){
print("<option value='$me_001'  selected>✕</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_001=='Δ'){
print("<option value='$me_001' selected>Δ</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_001=='Ν'){
print("<option value='$me_001'  selected>Ν</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select>
</td>
    </tr>
    <tr>
    <td  >受電盤、抑御盤、信號盤：</td>
    <td  > 
   <select  form="form2" id="me_002" name="me_002">
<?php
$me_002=$rs['me_002'];

if($me_002=='✓'){

echo"<option value='$me_002'  selected>$me_002</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_002=='✕'){
print("<option value='$me_002'  selected>$me_002</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_002=='Δ'){
print("<option value='$me_002' selected>$me_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_002=='Ν'){
print("<option value='$me_002'  selected>$me_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >電動機、牽引機：</td>
    <td  >   
 <select  form="form2" id="me_003" name="me_003">
<?php
$me_003=$rs['me_003'];

if($me_003=='✓'){

echo"<option value='$me_003'  selected>$me_003</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_003=='✕'){
print("<option value='$me_003'  selected>$me_003</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_003=='Δ'){
print("<option value='$me_003' selected>$me_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_002=='Ν'){
print("<option value='$me_003'  selected>$me_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select>
    </tr>
    <tr>
    <td  >電動發電機、啟動盤：</td>
    <td  > <select  form="form2" id="me_004" name="me_004">
<?php
$me_004=$rs['me_004'];

if($me_004=='✓'){

echo"<option value='$me_004'  selected>$me_004</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_004=='✕'){
print("<option value='$me_004'  selected>$me_004</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_004=='Δ'){
print("<option value='$me_004' selected>$me_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_004=='Ν'){
print("<option value='$me_004'  selected>$me_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >車廂走行狀態：</td>
    <td  > <select  form="form2" id="me_005" name="me_005">
<?php
$me_005=$rs['me_005'];

if($me_005=='✓'){

echo"<option value='$me_005'  selected>$me_005</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_005=='✕'){
print("<option value='$me_005'  selected>$me_005</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_005=='Δ'){
print("<option value='$me_005' selected>$me_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_005=='Ν'){
print("<option value='$me_005'  selected>$me_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >對外外部聯絡裝置：</td>
    <td  > <select  form="form2" id="me_006" name="me_006">
<?php
$me_006=$rs['me_006'];

if($me_006=='✓'){

echo"<option value='$me_006'  selected>$me_006</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_06=='✕'){
print("<option value='$me_006'  selected>$me_006</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_006=='Δ'){
print("<option value='$me_006' selected>$me_006</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_006=='Ν'){
print("<option value='$me_006'  selected>$me_006</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >停電燈裝置：</td>
    <td  > <select  form="form2" id="me_007" name="me_007">
<?php
$me_007=$rs['me_007'];

if($me_007=='✓'){

echo"<option value='$me_007'  selected>$me_007</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_007=='✕'){
print("<option value='$me_007'  selected>$me_007</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_007=='Δ'){
print("<option value='$me_007' selected>$me_007</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_007=='Ν'){
print("<option value='$me_007'  selected>$me_007</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >車廂內裝、照明、通風扇：</td>
    <td  > <select  form="form2" id="me_008" name="me_008">
<?php
$me_008=$rs['me_008'];

if($me_008=='✓'){

echo"<option value='$me_008'  selected>$me_008</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_008=='✕'){
print("<option value='$me_008'  selected>$me_008</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_008=='Δ'){
print("<option value='$me_008' selected>$me_008</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_008=='Ν'){
print("<option value='$me_008'  selected>$me_008</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >車廂上環境裝置：</td>
    <td  > <select  form="form2" id="me_009" name="me_009">
<?php
$me_009=$rs['me_009'];

if($me_009=='✓'){

echo"<option value='$me_009'  selected>$me_009</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_009=='✕'){
print("<option value='$me_009'  selected>$me_009</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_009=='Δ'){
print("<option value='$me_009' selected>$me_009</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_009=='Ν'){
print("<option value='$me_009'  selected>$me_009</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >門之開閉裝置：</td>
    <td  > <select  form="form2" id="me_010" name="me_010">
<?php
$me_010=$rs['me_010'];

if($me_010=='✓'){

echo"<option value='$me_010'  selected>$me_010</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_010=='✕'){
print("<option value='$me_010'  selected>$me_010</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_010=='Δ'){
print("<option value='$me_010' selected>$me_010</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_010=='Ν'){
print("<option value='$me_010'  selected>$me_010</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  > 車廂著床狀態：</td>
    <td  > <select  form="form2" id="me_011" name="me_011">
<?php
$me_011=$rs['me_011'];

if($me_011=='✓'){

echo"<option value='$me_011'  selected>$me_011</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_011=='✕'){
print("<option value='$me_011'  selected>$me_011</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_011=='Δ'){
print("<option value='$me_011' selected>$me_011</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_011=='Ν'){
print("<option value='$me_011'  selected>$me_011</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >門開閉狀態：</td>
    <td  > <select  form="form2" id="me_012" name="me_012">
<?php
$me_012=$rs['me_012'];

if($me_012=='✓'){

echo"<option value='$me_012'  selected>$me_012</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_012=='✕'){
print("<option value='$me_012'  selected>$me_012</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_012=='Δ'){
print("<option value='$me_012' selected>$me_012</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_012=='Ν'){
print("<option value='$me_012'  selected>$me_012</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  > 導滑器、導論：</td>
    <td  > <select  form="form2" id="me_013" name="me_013">
<?php
$me_013=$rs['me_013'];

if($me_013=='✓'){

echo"<option value='$me_013'  selected>$me_013</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_013=='✕'){
print("<option value='$me_013'  selected>$me_013</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_013=='Δ'){
print("<option value='$me_013' selected>$me_013</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_013=='Ν'){
print("<option value='$me_013'  selected>$me_013</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >給油器：</td>
    <td  > <select  form="form2" id="me_014" name="me_014">
<?php
$me_014=$rs['me_014'];

if($me_014=='✓'){

echo"<option value='$me_014'  selected>$me_014</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_014=='✕'){
print("<option value='$me_014'  selected>$me_014</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_014=='Δ'){
print("<option value='$me_014' selected>$me_014</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_014=='Ν'){
print("<option value='$me_014'  selected>$me_014</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >乘車門、門踏板：</td>
    <td  > <select  form="form2" id="me_015" name="me_015">
<?php
$me_015=$rs['me_015'];

if($me_015=='✓'){

echo"<option value='$me_015'  selected>$me_015</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_015=='✕'){
print("<option value='$me_015'  selected>$me_015</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_015=='Δ'){
print("<option value='$me_015' selected>$me_015</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_015=='Ν'){
print("<option value='$me_015'  selected>$me_015</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >乘場按鈕、指示燈：</td>
    <td  > <select  form="form2" id="me_016" name="me_016">
<?php
$me_016=$rs['me_016'];

if($me_016=='✓'){

echo"<option value='$me_016'  selected>$me_016</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($me_016=='✕'){
print("<option value='$me_016'  selected>$me_016</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($me_016=='Δ'){
print("<option value='$me_016' selected>$me_016</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($me_016=='Ν'){
print("<option value='$me_016'  selected>$me_016</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

</table>
</div>

<div id="season" class="item">
<div class="item-head">季保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >車廂操作盤：</td>
    <td  ><select  form="form2" id="se_001" name="se_001">
<?php
$se_001=$rs['se_001'];

if($se_001=='✓'){

echo"<option value='$se_001'  selected>$se_001</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($se_001=='✕'){
print("<option value='$se_001'  selected>$se_001</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($se_001=='Δ'){
print("<option value='$se_001' selected>$se_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($se_001=='Ν'){
print("<option value='$se_001'  selected>$se_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >車廂門、門踏板：</td>
    <td ><select  form="form2" id="se_002" name="se_002">
<?php
$se_002=$rs['se_002'];

if($se_002=='✓'){

echo"<option value='$se_002'  selected>$se_002</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($se_002=='✕'){
print("<option value='$se_002'  selected>$se_002</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($se_002=='Δ'){
print("<option value='$se_002' selected>$se_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($se_002=='Ν'){
print("<option value='$se_002'  selected>$se_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >閉門安全裝置：</td>
    <td ><select  form="form2" id="se_003" name="se_003">
<?php
$se_003=$rs['se_003'];

if($se_003=='✓'){

echo"<option value='$se_003'  selected>$se_003</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($se_003=='✕'){
print("<option value='$se_003'  selected>$se_003</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($se_003=='Δ'){
print("<option value='$se_003' selected>$se_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($se_003=='Ν'){
print("<option value='$se_003'  selected>$se_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >門手動開放：</td>
    <td ><select  form="form2" id="se_004" name="se_004">
<?php
$se_004=$rs['se_004'];

if($se_004=='✓'){

echo"<option value='$se_004'  selected>$se_004</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($se_004=='✕'){
print("<option value='$se_004'  selected>$se_004</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($se_004=='Δ'){
print("<option value='$se_004' selected>$se_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($se_004=='Ν'){
print("<option value='$se_004'  selected>$se_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
</table>

</div>

<div id="half_year" class="item">
<div class="item-head">半年保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >電磁煞車器：</td>
    <td  ><select  form="form2" id="hye_001" name="hye_001">
<?php
$hye_001=$rs['hye_001'];

if($hye_001=='✓'){

echo"<option value='$hye_001'  selected>$hye_001</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_001=='✕'){
print("<option value='$hye_001'  selected>$hye_001</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_001=='Δ'){
print("<option value='$hye_001' selected>$hye_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_001=='Ν'){
print("<option value='$hye_001'  selected>$hye_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >乘場選擇器：</td>
    <td ><select  form="form2" id="hye_002" name="hye_002">
<?php
$hye_002=$rs['hye_002'];

if($hye_002=='✓'){

echo"<option value='$hye_002'  selected>$hye_002</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_002=='✕'){
print("<option value='$hye_002'  selected>$hye_002</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_002=='Δ'){
print("<option value='$hye_002' selected>$hye_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_002=='Ν'){
print("<option value='$hye_002'  selected>$hye_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >調速器：</td>
    <td ><select  form="form2" id="hye_003" name="hye_003">
<?php
$hye_003=$rs['hye_003'];

if($hye_003=='✓'){

echo"<option value='$hye_003'  selected>$hye_003</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_003=='✕'){
print("<option value='$hye_003'  selected>$hye_003</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_003=='Δ'){
print("<option value='$hye_003' selected>$hye_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_003=='Ν'){
print("<option value='$hye_003'  selected>$hye_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >升降路內、機坑內環境狀況：</td>
    <td ><select  form="form2" id="hye_004" name="hye_004">
<?php
$hye_004=$rs['hye_004'];

if($hye_004=='✓'){

echo"<option value='$hye_004'  selected>$hye_004</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_004=='✕'){
print("<option value='$hye_004'  selected>$hye_004</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_004=='Δ'){
print("<option value='$hye_004' selected>$hye_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_004=='Ν'){
print("<option value='$hye_004'  selected>$hye_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >車廂、配重之轉向輪：</td>
    <td  ><select  form="form2" id="hye_005" name="hye_005">
<?php
$hye_005=$rs['hye_005'];

if($hye_005=='✓'){

echo"<option value='$hye_005'  selected>$hye_005</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_005=='✕'){
print("<option value='$hye_005'  selected>$hye_005</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_005=='Δ'){
print("<option value='$hye_005' selected>$hye_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_005=='Ν'){
print("<option value='$hye_005'  selected>$hye_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >主鋼索、調速鋼索、檢點：</td>
    <td ><select  form="form2" id="hye_006" name="hye_006">
<?php
$hye_006=$rs['hye_006'];

if($hye_006=='✓'){

echo"<option value='$hye_006'  selected>$hye_006</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_006=='✕'){
print("<option value='$hye_006'  selected>$hye_006</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_006=='Δ'){
print("<option value='$hye_006' selected>$hye_006</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_006=='Ν'){
print("<option value='$hye_006'  selected>$hye_006</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >導軌檢點、鋼帶檢點：</td>
    <td ><select  form="form2" id="hye_007" name="hye_007">
<?php
$hye_007=$rs['hye_007'];

if($hye_007=='✓'){

echo"<option value='$hye_007'  selected>$hye_007</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_007=='✕'){
print("<option value='$hye_007'  selected>$hye_007</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_007=='Δ'){
print("<option value='$hye_007' selected>$hye_007</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_007=='Ν'){
print("<option value='$hye_007'  selected>$hye_007</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >配重器：</td>
    <td ><select  form="form2" id="hye_008" name="hye_008">
<?php
$hye_008=$rs['hye_008'];

if($hye_008=='✓'){

echo"<option value='$hye_008'  selected>$hye_008</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_008=='✕'){
print("<option value='$hye_008'  selected>$hye_008</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_008=='Δ'){
print("<option value='$hye_008' selected>$hye_008</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_008=='Ν'){
print("<option value='$hye_008'  selected>$hye_008</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  > DrSW動作、Dr Lock機構檢點：</td>
    <td ><select  form="form2" id="hye_009" name="hye_009">
<?php
$hye_009=$rs['hye_009'];

if($hye_009=='✓'){

echo"<option value='$hye_009'  selected>$hye_009</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($hye_009=='✕'){
print("<option value='$hye_009'  selected>$hye_009</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_009=='Δ'){
print("<option value='$hye_009' selected>$hye_009</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($hye_009=='Ν'){
print("<option value='$hye_009'  selected>$hye_009</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

</table>
</div>

<div id="year" class="item">
<div class="item-head">年保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >上、下部極限開關動作確認：</td>
    <td  ><select  form="form2" id="ye_001" name="ye_001">
<?php
$ye_001=$rs['ye_001'];

if($ye_001=='✓'){

echo"<option value='$ye_001'  selected>$ye_001</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ye_001=='✕'){
print("<option value='$ye_001'  selected>$ye_001</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_001=='Δ'){
print("<option value='$ye_001' selected>$ye_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_001=='Ν'){
print("<option value='$ye_001'  selected>$ye_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >緊急停止裝置檢點：</td>
    <td ><select  form="form2" id="ye_002" name="ye_002">
<?php
$ye_002=$rs['ye_002'];

if($ye_002=='✓'){

echo"<option value='$ye_002'  selected>$ye_002</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ye_002=='✕'){
print("<option value='$ye_002'  selected>$ye_002</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_002=='Δ'){
print("<option value='$ye_002' selected>$ye_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_002=='Ν'){
print("<option value='$ye_002'  selected>$ye_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >移動電纜：</td>
    <td ><select  form="form2" id="ye_003" name="ye_003">
<?php
$ye_003=$rs['ye_003'];

if($ye_003=='✓'){

echo"<option value='$ye_003'  selected>$ye_003</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ye_003=='✕'){
print("<option value='$ye_003'  selected>$ye_003</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_003=='Δ'){
print("<option value='$ye_003' selected>$ye_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_003=='Ν'){
print("<option value='$ye_003'  selected>$ye_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >緩衝器檢點：</td>
    <td ><select  form="form2" id="ye_004" name="ye_004">
<?php
$ye_004=$rs['ye_004'];

if($ye_004=='✓'){

echo"<option value='$ye_004'  selected>$ye_004</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ye_004=='✕'){
print("<option value='$ye_004'  selected>$ye_004</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_004=='Δ'){
print("<option value='$ye_004' selected>$ye_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_004=='Ν'){
print("<option value='$ye_004'  selected>$ye_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >各張力輪：</td>
    <td  ><select  form="form2" id="ye_005" name="ye_005">
<?php
$ye_005=$rs['ye_005'];

if($ye_005=='✓'){

echo"<option value='$ye_005'  selected>$ye_005</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ye_005=='✕'){
print("<option value='$ye_005'  selected>$ye_005</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_005=='Δ'){
print("<option value='$ye_005' selected>$ye_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ye_005=='Ν'){
print("<option value='$ye_005'  selected>$ye_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
</table>
</div>

<div id="park" class="item">
<div class="item-head">停車設備</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td  >注意事項項目：</td>
    <td  ><select  form="form2" id="mm_001" name="mm_001">
<?php
$mm_001=$rs['mm_001'];

if($mm_001=='✓'){

echo"<option value='$mm_001'  selected>$mm_001</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_001=='✕'){
print("<option value='$mm_001'  selected>$mm_001</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_001=='Δ'){
print("<option value='$mm_001' selected>$mm_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_001=='Ν'){
print("<option value='$mm_001'  selected>$mm_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >承載存放限制：</td>
    <td ><select  form="form2" id="mm_002" name="mm_002">
<?php
$mm_002=$rs['mm_002'];

if($mm_002=='✓'){

echo"<option value='$mm_002'  selected>$mm_002</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_002=='✕'){
print("<option value='$mm_002'  selected>$mm_002</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_002=='Δ'){
print("<option value='$mm_002' selected>$mm_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_002=='Ν'){
print("<option value='$mm_002'  selected>$mm_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >各式按鈕檢視：</td>
    <td ><select  form="form2" id="mm_003" name="mm_003">
<?php
$mm_003=$rs['mm_003'];

if($mm_003=='✓'){

echo"<option value='$mm_003'  selected>$mm_003</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_003=='✕'){
print("<option value='$mm_003'  selected>$mm_003</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_003=='Δ'){
print("<option value='$mm_003' selected>$mm_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_003=='Ν'){
print("<option value='$mm_003'  selected>$mm_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  > 設備運轉測試：</td>
    <td ><select  form="form2" id="mm_004" name="mm_004">
<?php
$mm_004=$rs['mm_004'];

if($mm_004=='✓'){

echo"<option value='$mm_004'  selected>$mm_004</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_004=='✕'){
print("<option value='$mm_004'  selected>$mm_004</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_004=='Δ'){
print("<option value='$mm_004' selected>$mm_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_004=='Ν'){
print("<option value='$mm_004'  selected>$mm_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >車台定位檢視：</td>
    <td  ><select  form="form2" id="mm_005" name="mm_005">
<?php
$mm_005=$rs['mm_005'];

if($mm_005=='✓'){

echo"<option value='$mm_005'  selected>$mm_005</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_005=='✕'){
print("<option value='$mm_005'  selected>$mm_005</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_005=='Δ'){
print("<option value='$mm_005' selected>$mm_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_005=='Ν'){
print("<option value='$mm_005'  selected>$mm_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  > 車台水平檢視：</td>
    <td ><select  form="form2" id="mm_006" name="mm_006">
<?php
$mm_006=$rs['mm_006'];

if($mm_006=='✓'){

echo"<option value='$mm_006'  selected>$mm_006</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_006=='✕'){
print("<option value='$mm_006'  selected>$mm_006</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_006=='Δ'){
print("<option value='$mm_006' selected>$mm_006</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_006=='Ν'){
print("<option value='$mm_006'  selected>$mm_006</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >警(指)是裝置檢視：</td>
    <td  ><select  form="form2" id="mm_007" name="mm_007">
<?php
$mm_007=$rs['mm_007'];

if($mm_007=='✓'){

echo"<option value='$mm_007'  selected>$mm_007</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_007=='✕'){
print("<option value='$mm_007'  selected>$mm_007</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_007=='Δ'){
print("<option value='$mm_007' selected>$mm_007</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_007=='Ν'){
print("<option value='$mm_007'  selected>$mm_007</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  > 升降、橫移連鎖裝置檢視：</td>
    <td ><select  form="form2" id="mm_008" name="mm_008">
<?php
$mm_008=$rs['mm_008'];

if($mm_008=='✓'){

echo"<option value='$mm_008'  selected>$mm_008</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_008=='✕'){
print("<option value='$mm_008'  selected>$mm_008</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_008=='Δ'){
print("<option value='$mm_008' selected>$mm_008</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_008=='Ν'){
print("<option value='$mm_008'  selected>$mm_008</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >光電開關檢視： </td>
    <td  ><select  form="form2" id="mm_009" name="mm_009">
<?php
$mm_009=$rs['mm_009'];

if($mm_009=='✓'){

echo"<option value='$mm_009'  selected>$mm_009</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_009=='✕'){
print("<option value='$mm_009'  selected>$mm_009</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_009=='Δ'){
print("<option value='$mm_009' selected>$mm_009</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_009=='Ν'){
print("<option value='$mm_009'  selected>$mm_009</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >限動、檢測開關檢視：</td>
    <td ><select  form="form2" id="mm_010" name="mm_010">
<?php
$mm_010=$rs['mm_010'];

if($mm_010=='✓'){

echo"<option value='$mm_010'  selected>$mm_010</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_010=='✕'){
print("<option value='$mm_010'  selected>$mm_010</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_010=='Δ'){
print("<option value='$mm_010' selected>$mm_010</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_010=='Ν'){
print("<option value='$mm_010'  selected>$mm_010</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >驅動元件檢視：</td>
    <td  ><select  form="form2" id="mm_011" name="mm_011">
<?php
$mm_011=$rs['mm_011'];

if($mm_011=='✓'){

echo"<option value='$mm_011'  selected>$mm_011</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_011=='✕'){
print("<option value='$mm_011'  selected>$mm_011</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_011=='Δ'){
print("<option value='$mm_011' selected>$mm_011</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_011=='Ν'){
print("<option value='$mm_011'  selected>$mm_011</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >各式傳動元件檢視：：</td>
    <td ><select  form="form2" id="mm_012" name="mm_012">
<?php
$mm_012=$rs['mm_012'];

if($mm_012=='✓'){

echo"<option value='$mm_012'  selected>$mm_012</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_012=='✕'){
print("<option value='$mm_012'  selected>$mm_012</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_012=='Δ'){
print("<option value='$mm_012' selected>$mm_012</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_012=='Ν'){
print("<option value='$mm_012'  selected>$mm_012</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >油壓元件檢視：</td>
    <td  ><select  form="form2" id="mm_013" name="mm_013">
<?php
$mm_013=$rs['mm_013'];

if($mm_013=='✓'){

echo"<option value='$mm_013'  selected>$mm_013</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_013=='✕'){
print("<option value='$mm_013'  selected>$mm_013</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_013=='Δ'){
print("<option value='$mm_013' selected>$mm_013</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_013=='Ν'){
print("<option value='$mm_013'  selected>$mm_013</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >鍊條、鋼索檢視：</td>
    <td ><select  form="form2" id="mm_014" name="mm_014">
<?php
$mm_014=$rs['mm_014'];

if($mm_014=='✓'){

echo"<option value='$mm_014'  selected>$mm_014</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_014=='✕'){
print("<option value='$mm_014'  selected>$mm_014</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_014=='Δ'){
print("<option value='$mm_014' selected>$mm_014</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_014=='Ν'){
print("<option value='$mm_014'  selected>$mm_014</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >電控系統檢視：</td>
    <td  ><select  form="form2" id="mm_015" name="mm_015">
<?php
$mm_015=$rs['mm_015'];

if($mm_015=='✓'){

echo"<option value='$mm_015'  selected>$mm_015</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_015=='✕'){
print("<option value='$mm_015'  selected>$mm_015</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_015=='Δ'){
print("<option value='$mm_015' selected>$mm_015</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_015=='Ν'){
print("<option value='$mm_015'  selected>$mm_015</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >機械結構、置車板機廂檢視：</td>
    <td  ><select  form="form2" id="mm_016" name="mm_016">
<?php
$mm_016=$rs['mm_016'];

if($mm_016=='✓'){

echo"<option value='$mm_016'  selected>$mm_016</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_016=='✕'){
print("<option value='$mm_016'  selected>$mm_016</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_016=='Δ'){
print("<option value='$mm_016' selected>$mm_016</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_016=='Ν'){
print("<option value='$mm_016'  selected>$mm_016</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >安全扣元件檢視：</td>
    <td  ><select  form="form2" id="mm_017" name="mm_017">
<?php
$mm_017=$rs['mm_017'];

if($mm_017=='✓'){

echo"<option value='$mm_017'  selected>$mm_017</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_017=='✕'){
print("<option value='$mm_017'  selected>$mm_017</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_017=='Δ'){
print("<option value='$mm_017' selected>$mm_017</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_017=='Ν'){
print("<option value='$mm_017'  selected>$mm_017</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >油壓防爆閥檢視：</td>
    <td  ><select  form="form2" id="mm_018" name="mm_018">
<?php
$mm_018=$rs['mm_018'];

if($mm_018=='✓'){

echo"<option value='$mm_018'  selected>$mm_018</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_018=='✕'){
print("<option value='$mm_018'  selected>$mm_018</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_018=='Δ'){
print("<option value='$mm_018' selected>$mm_018</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_018=='Ν'){
print("<option value='$mm_018'  selected>$mm_018</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >防落裝置檢視：</td>
    <td  ><select  form="form2" id="mm_019" name="mm_019">
<?php
$mm_019=$rs['mm_019'];

if($mm_019=='✓'){

echo"<option value='$mm_019'  selected>$mm_019</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_019=='✕'){
print("<option value='$mm_019'  selected>$mm_019</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_019=='Δ'){
print("<option value='$mm_019' selected>$mm_019</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_019=='Ν'){
print("<option value='$mm_019'  selected>$mm_019</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >照明裝置檢視：</td>
    <td  ><select  form="form2" id="mm_020" name="mm_020">
<?php
$mm_020=$rs['mm_020'];

if($mm_020=='✓'){

echo"<option value='$mm_020'  selected>$mm_020</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_020=='✕'){
print("<option value='$mm_020'  selected>$mm_020</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_020=='Δ'){
print("<option value='$mm_020' selected>$mm_020</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_020=='Ν'){
print("<option value='$mm_020'  selected>$mm_020</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >機械式檢視：</td>
    <td  ><select  form="form2" id="mm_021" name="mm_021">
<?php
$mm_021=$rs['mm_021'];

if($mm_021=='✓'){

echo"<option value='$mm_021'  selected>$mm_021</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_021=='✕'){
print("<option value='$mm_021'  selected>$mm_021</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_021=='Δ'){
print("<option value='$mm_021' selected>$mm_021</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_021=='Ν'){
print("<option value='$mm_021'  selected>$mm_021</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >機械式檢視：</td>
    <td  ><select  form="form2" id="mm_022" name="mm_022">
<?php
$mm_022=$rs['mm_022'];

if($mm_022=='✓'){

echo"<option value='$mm_022'  selected>$mm_022</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_022=='✕'){
print("<option value='$mm_022'  selected>$mm_022</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_022=='Δ'){
print("<option value='$mm_022' selected>$mm_022</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_022=='Ν'){
print("<option value='$mm_022'  selected>$mm_022</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >機坑積水檢視：</td>
    <td  ><select  form="form2" id="mm_023" name="mm_023">
<?php
$mm_023=$rs['mm_023'];

if($mm_023=='✓'){

echo"<option value='$mm_023'  selected>$mm_023</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_023=='✕'){
print("<option value='$mm_023'  selected>$mm_023</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_023=='Δ'){
print("<option value='$mm_023' selected>$mm_023</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_023=='Ν'){
print("<option value='$mm_023'  selected>$mm_023</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >停放之車輛符合承載規範：</td>
    <td  ><select  form="form2" id="mm_024" name="mm_024">
<?php
$mm_024=$rs['mm_024'];

if($mm_024=='✓'){

echo"<option value='$mm_024'  selected>$mm_024</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($mm_024=='✕'){
print("<option value='$mm_024'  selected>$mm_024</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_024=='Δ'){
print("<option value='$mm_024' selected>$mm_024</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($mm_024=='Ν'){
print("<option value='$mm_024'  selected>$mm_024</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
</table>
</div>

<div id="subsidiary" class="item">
<div class="item-head">附屬設備</div>
<table class='item-table' cellspacing="0">

    <tr>
    <td  >注意事項項目：</td>
    <td  ><select  form="form2" id="ma_001" name="ma_001">
<?php
$ma_001=$rs['ma_001'];

if($ma_001=='✓'){

echo"<option value='$ma_001'  selected>$ma_001</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_001=='✕'){
print("<option value='$ma_001'  selected>$ma_001</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_001=='Δ'){
print("<option value='$ma_001' selected>$ma_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_001=='Ν'){
print("<option value='$ma_001'  selected>$ma_001</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >承載存放限制：</td>
    <td ><select  form="form2" id="ma_002" name="ma_002">
<?php
$ma_002=$rs['ma_002'];

if($ma_002=='✓'){

echo"<option value='$ma_002'  selected>$ma_002</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_002=='✕'){
print("<option value='$ma_002'  selected>$ma_002</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_002=='Δ'){
print("<option value='$ma_002' selected>$ma_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_002=='Ν'){
print("<option value='$ma_002'  selected>$ma_002</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >各式按鈕檢視：</td>
    <td ><select  form="form2" id="ma_003" name="ma_003">
<?php
$ma_003=$rs['ma_003'];

if($ma_003=='✓'){

echo"<option value='$ma_003'  selected>$ma_003</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_003=='✕'){
print("<option value='$ma_003'  selected>$ma_003</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_003=='Δ'){
print("<option value='$ma_003' selected>$ma_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_003=='Ν'){
print("<option value='$ma_003'  selected>$ma_003</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  > 設備運轉測試：</td>
    <td ><select  form="form2" id="ma_004" name="ma_004">
<?php
$ma_004=$rs['ma_004'];

if($ma_004=='✓'){

echo"<option value='$ma_004'  selected>$ma_004</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_004=='✕'){
print("<option value='$ma_004'  selected>$ma_004</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_004=='Δ'){
print("<option value='$ma_004' selected>$ma_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_004=='Ν'){
print("<option value='$ma_004'  selected>$ma_004</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >車台定位檢視：</td>
    <td  ><select  form="form2" id="ma_005" name="ma_005">
<?php
$ma_005=$rs['ma_005'];

if($ma_005=='✓'){

echo"<option value='$ma_005'  selected>$ma_005</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_005=='✕'){
print("<option value='$ma_005'  selected>$ma_005</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_005=='Δ'){
print("<option value='$ma_005' selected>$ma_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_005=='Ν'){
print("<option value='$ma_005'  selected>$ma_005</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  > 車台水平檢視：</td>
    <td ><select  form="form2" id="ma_006" name="ma_006">
<?php
$ma_006=$rs['ma_006'];

if($ma_006=='✓'){

echo"<option value='$ma_006'  selected>$ma_006</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_006=='✕'){
print("<option value='$ma_006'  selected>$ma_006</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_006=='Δ'){
print("<option value='$ma_006' selected>$ma_006</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_006=='Ν'){
print("<option value='$ma_006'  selected>$ma_006</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >警(指)是裝置檢視：</td>
    <td  ><select  form="form2" id="ma_007" name="ma_007">
<?php
$ma_007=$rs['ma_007'];

if($ma_007=='✓'){

echo"<option value='$ma_007'  selected>$ma_007</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_007=='✕'){
print("<option value='$ma_007'  selected>$ma_007</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_007=='Δ'){
print("<option value='$ma_007' selected>$ma_007</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_007=='Ν'){
print("<option value='$ma_007'  selected>$ma_007</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  > 升降、橫移連鎖裝置檢視：</td>
    <td ><select  form="form2" id="ma_008" name="ma_008">
<?php
$ma_008=$rs['ma_008'];

if($ma_008=='✓'){

echo"<option value='$ma_008'  selected>$ma_008</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_008=='✕'){
print("<option value='$ma_008'  selected>$ma_008</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_008=='Δ'){
print("<option value='$ma_008' selected>$ma_008</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_008=='Ν'){
print("<option value='$ma_008'  selected>$ma_008</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >光電開關檢視： </td>
    <td  ><select  form="form2" id="ma_009" name="ma_009">
<?php
$ma_009=$rs['ma_009'];

if($ma_009=='✓'){

echo"<option value='$ma_009'  selected>$ma_009</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_009=='✕'){
print("<option value='$ma_009'  selected>$ma_009</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_009=='Δ'){
print("<option value='$ma_009' selected>$ma_009</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_009=='Ν'){
print("<option value='$ma_009'  selected>$ma_009</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >限動、檢測開關檢視：</td>
    <td ><select  form="form2" id="ma_010" name="ma_010">
<?php
$ma_010=$rs['ma_010'];

if($ma_010=='✓'){

echo"<option value='$ma_010'  selected>$ma_010</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_010=='✕'){
print("<option value='$ma_010'  selected>$ma_010</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_010=='Δ'){
print("<option value='$ma_010' selected>$ma_010</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_010=='Ν'){
print("<option value='$ma_010'  selected>$ma_010</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >驅動元件檢視：</td>
    <td  ><select  form="form2" id="ma_011" name="ma_011">
<?php
$ma_011=$rs['ma_011'];

if($ma_011=='✓'){

echo"<option value='$ma_011'  selected>$ma_011</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_011=='✕'){
print("<option value='$ma_011'  selected>$ma_011</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_011=='Δ'){
print("<option value='$ma_011' selected>$ma_011</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_011=='Ν'){
print("<option value='$ma_011'  selected>$ma_011</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >各式傳動元件檢視：：</td>
    <td ><select  form="form2" id="ma_012" name="ma_012">
<?php
$ma_012=$rs['ma_012'];

if($ma_012=='✓'){

echo"<option value='$ma_012'  selected>$ma_012</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_012=='✕'){
print("<option value='$ma_012'  selected>$ma_012</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_012=='Δ'){
print("<option value='$ma_012' selected>$ma_012</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_012=='Ν'){
print("<option value='$ma_012'  selected>$ma_012</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >油壓元件檢視：</td>
    <td  ><select  form="form2" id="ma_013" name="ma_013">
<?php
$ma_013=$rs['ma_013'];

if($ma_013=='✓'){

echo"<option value='$ma_013'  selected>$ma_013</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_013=='✕'){
print("<option value='$ma_013'  selected>$ma_013</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_013=='Δ'){
print("<option value='$ma_013' selected>$ma_013</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_013=='Ν'){
print("<option value='$ma_013'  selected>$ma_013</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >鍊條、鋼索檢視：</td>
    <td ><select  form="form2" id="ma_014" name="ma_014">
<?php
$ma_014=$rs['ma_014'];

if($ma_014=='✓'){

echo"<option value='$ma_014'  selected>$ma_014</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_014=='✕'){
print("<option value='$ma_014'  selected>$ma_014</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_014=='Δ'){
print("<option value='$ma_014' selected>$ma_014</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_014=='Ν'){
print("<option value='$ma_014'  selected>$ma_014</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >電控系統檢視：</td>
    <td  ><select  form="form2" id="ma_015" name="ma_015">
<?php
$ma_015=$rs['ma_015'];

if($ma_015=='✓'){

echo"<option value='$ma_015'  selected>$ma_015</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_015=='✕'){
print("<option value='$ma_015'  selected>$ma_015</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_015=='Δ'){
print("<option value='$ma_015' selected>$ma_015</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_015=='Ν'){
print("<option value='$ma_015'  selected>$ma_015</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >機械結構、置車板機廂檢視：</td>
    <td  ><select  form="form2" id="ma_016" name="ma_016">
<?php
$ma_016=$rs['ma_016'];

if($ma_016=='✓'){

echo"<option value='$ma_016'  selected>$ma_016</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_016=='✕'){
print("<option value='$ma_016'  selected>$ma_016</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_016=='Δ'){
print("<option value='$ma_016' selected>$ma_016</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_016=='Ν'){
print("<option value='$ma_016'  selected>$ma_016</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >安全扣元件檢視：</td>
    <td  ><select  form="form2" id="ma_017" name="ma_017">
<?php
$ma_017=$rs['ma_017'];

if($ma_017=='✓'){

echo"<option value='$ma_017'  selected>$ma_017</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_017=='✕'){
print("<option value='$ma_017'  selected>$ma_017</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_017=='Δ'){
print("<option value='$ma_017' selected>$ma_017</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_017=='Ν'){
print("<option value='$ma_017'  selected>$ma_017</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >油壓防爆閥檢視：</td>
    <td  ><select  form="form2" id="ma_018" name="ma_018">
<?php
$ma_018=$rs['ma_018'];

if($ma_018=='✓'){

echo"<option value='$ma_018'  selected>$ma_018</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_018=='✕'){
print("<option value='$ma_018'  selected>$ma_018</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_018=='Δ'){
print("<option value='$ma_018' selected>$ma_018</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_018=='Ν'){
print("<option value='$ma_018'  selected>$ma_018</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >防落裝置檢視：</td>
    <td  ><select  form="form2" id="ma_019" name="ma_019">
<?php
$ma_019=$rs['ma_019'];

if($ma_019=='✓'){

echo"<option value='$ma_019'  selected>$ma_019</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_019=='✕'){
print("<option value='$ma_019'  selected>$ma_019</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_019=='Δ'){
print("<option value='$ma_019' selected>$ma_019</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_019=='Ν'){
print("<option value='$ma_019'  selected>$ma_019</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >照明裝置檢視：</td>
    <td  ><select  form="form2" id="ma_020" name="ma_020">
<?php
$ma_020=$rs['ma_020'];

if($ma_020=='✓'){

echo"<option value='$ma_020'  selected>$ma_020</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_020=='✕'){
print("<option value='$ma_020'  selected>$ma_020</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_020=='Δ'){
print("<option value='$ma_020' selected>$ma_020</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_020=='Ν'){
print("<option value='$ma_020'  selected>$ma_020</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>

    <tr>
    <td  >機械式檢視：</td>
    <td  ><select  form="form2" id="ma_021" name="ma_021">
<?php
$ma_021=$rs['ma_021'];

if($ma_021=='✓'){

echo"<option value='$ma_021'  selected>$ma_021</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_021=='✕'){
print("<option value='$ma_021'  selected>$ma_021</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_021=='Δ'){
print("<option value='$ma_021' selected>$ma_021</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_021=='Ν'){
print("<option value='$ma_021'  selected>$ma_021</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >區格防護規定(欄杆)：</td>
    <td  ><select  form="form2" id="ma_022" name="ma_022">
<?php
$ma_022=$rs['ma_022'];

if($ma_022=='✓'){

echo"<option value='$ma_022'  selected>$ma_022</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_022=='✕'){
print("<option value='$ma_022'  selected>$ma_022</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_022=='Δ'){
print("<option value='$ma_022' selected>$ma_022</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_022=='Ν'){
print("<option value='$ma_022'  selected>$ma_022</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >機坑積水檢視：</td>
    <td  ><select  form="form2" id="ma_023" name="ma_023">
<?php
$ma_023=$rs['ma_023'];

if($ma_023=='✓'){

echo"<option value='$ma_023'  selected>$ma_023</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_023=='✕'){
print("<option value='$ma_023'  selected>$ma_023</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_023=='Δ'){
print("<option value='$ma_023' selected>$ma_023</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_023=='Ν'){
print("<option value='$ma_023'  selected>$ma_023</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>
    <tr>
    <td  >停放之車輛符合承載規範：</td>
    <td  ><select  form="form2" id="ma_024" name="ma_024">
<?php
$ma_024=$rs['ma_024'];

if($ma_024=='✓'){

echo"<option value='$ma_024'  selected>$ma_024</option>\n";
echo"<option >✕</option>\n";
echo"<option >Δ</option>\n";
echo"<option >Ν</option>\n";
}

if ($ma_024=='✕'){
print("<option value='$ma_024'  selected>$ma_024</option>\n");
print("<option >✓</option>\n");
print("<option >Δ</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_024=='Δ'){
print("<option value='$ma_024' selected>$ma_024</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Ν</option>\n");
}

if ($ma_024=='Ν'){
print("<option value='$ma_024'  selected>$ma_024</option>\n");
print("<option >✓</option>\n");
print("<option >✕</option>\n");
print("<option >Δ</option>\n");
}
?>
</select></td>
    </tr>


</table>
</div>


<div class="item-end">

<textarea  name="m_remarks"  form="form2" placeholder="備註" Wrap="Virtual" class="item-mark">
<?php echo $rs['m_remarks'];?>
</textarea>

<form id="form2" name="form2" method="post" action="" class='item-end'>
<button id="b" name="save" type="sumbit" class="end-btn bt-3 bt-y">儲存</button>
</form>
</div>

<?php 

                      //for($i=1;$i<=mysqli_num_rows($data1);$i++){
                      //$rs=mysqli_fetch_row($data1);
?>

                          
<table class='table'>
<caption>保養歷史列表</caption>
    <tr>
    <th >保養日期</th>
    <th >保養狀態</th>
    <th >保養時間</th>
    <th >產品名稱</th>
    <th >保養詳細</th>
    </tr>

<?php
if(mysqli_num_rows($data2) > 0){    
for($i=1;$i<=mysqli_num_rows($data2);$i++){
$rs=mysqli_fetch_array($data2);
?>

    <tr>
    <td ><?php echo $rs['m_date'];?></td>
    <td ><?php echo $rs['m_status'];?></td>
    <td ><?php echo $rs['m_type'];?></td>
    <td ><?php echo $rs['p_name'];?></td>
    <td ><input class="btn bt-3" type="button" value="詳細 " onclick="location.href='maintain_medit.php?id=<?php echo $rs['m_no']?>&p_name=<?php echo $rs['p_name']?>&m_type=<?php echo $rs['m_type']?>&price_no=<?php echo $rs['price_no']?>&m_pno=<?php echo $rs['m_pno']?>'"></td>
    </tr>

<?php
}
}
else
{
echo '
    <tr>
	   <td colspan=5 align=center height=100px>No  Data found</td>
    </tr>
    ';
}
                ?>

</table>

<table class='table'>
<caption>維修歷史列表</caption>
    <tr>
    <th>維修日期</th>
    <th>大樓名稱</th>
    <th>產品類型</th>
    <th>維修詳細</th>
    </tr>
<?php
    if(mysqli_num_rows($data) > 0){
    for($i=1;$i<=mysqli_num_rows($data5);$i++){
    $rs=mysqli_fetch_array($data5);
?>

    <tr>
    <td ><?php echo $rs['f_star_date']?></td>
    <td ><?php echo $rs['c_name']?></td>
    <td ><?php echo $rs['m_pno']?></td>
    <td ><input class="btn bt-3" type="button" value="詳細 " onclick="location.href='fix_medit.php?id=<?php echo $rs['fix_no']?>&p_name=<?php echo $rs['p_name']?>&m_no=<?php echo $rs['m_no']?>&m_pno=<?php echo $rs['m_pno']?>&price_no=<?php echo $rs['price_no']?>'"></td>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/project/js/maintain.js"></script>
    <script src="/project/js/list.js"></script>
</body>

</html>