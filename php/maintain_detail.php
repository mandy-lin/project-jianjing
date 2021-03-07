<?php
include("login_connect.php");
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");//連結伺服器
//mysqli_select_db($con,"client");//選擇資料庫
//mysqli_query($con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

$id=$_GET["id"];
$p_name=$_GET['p_name'];
$m_type=$_GET['m_type'];
$m_pno=$_GET['m_pno'];
$price_no=$_GET['price_no'];

/*$data1 = mysqli_query($con,"SELECT DISTINCT m.m_date,m.m_license,o.p_no ,c.c_no,c.c_name,c.c_address,c.c_phone,m.m_pretime,m.m_type FROM `maintain`m order by m_date join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no) where m.m_no='$id'");*/

$data = mysqli_query($con,"SELECT * FROM `maintain`m  join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no)  where m.m_no='$id' ");
$data1 = mysqli_query($con,"SELECT * FROM `maintain`m  join quote q on(q.price_no=m.price_no) join order_recode o on(o.p_id=m.p_id) join client c on (c.c_no=q.c_no) join produce pro on (o.p_no=pro.p_no)  where m.m_no='$id' ");
$data2 = mysqli_query($con,"SELECT * FROM `fix`f join maintain m on(f.m_no=m.m_no) ORDER BY fix_no DESC LIMIT 0 , 1
");
    //$result2 = mysqli_fetch_array($data2);
        //$a = $result2['fix_no'];
        //$a+=1;
$mnum=substr(date("ymdHis"),2,9);
$a=$mnum;

//$mt= mysqli_query($con,"SELECT q.o_actual_date FROM `maintain`m join quote q on (m.price_no=q.price_no) WHERE m.m_no='$id'");
//$ad=mysqli_fetch_array($mt);

//$o_actual_date=mysqli_query($con,"SELECT o_actual_date FROM quote q join maintain m on (q.price_no=m.price_no) WHERE m_no='$id'");
if(isset($_POST['sumbit'])){
    

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
                $m_in_time=@$_POST['m_in_time'];
                $m_out_time=@$_POST['m_out_time'];
                $m_p_end_date=@$_POST['m_p_end_date'];
                $m_status='已結束';
                $time2=date('Y-m-d', strtotime('+1 week'));
                
if($p_name=='附屬設備'){
    if($ma_001!='✓' or $ma_002!='✓' or $ma_003!='✓' or $ma_004!='✓' or $ma_005!='✓' or $ma_006!='✓' or $ma_007!='✓' or $ma_008!='✓' or $ma_009!='✓' or $ma_010!='✓' or $ma_011!='✓' or $ma_012!='✓' or $ma_013!='✓' or $ma_014!='✓' or $ma_015!='✓' or $ma_016!='✓' or $ma_017!='✓' or $ma_018!='✓' or $ma_019!='✓' or $ma_020!='✓' or $ma_021!='✓' or $ma_022!='✓' or $ma_023!='✓' or $ma_024!='✓'){
    $sql=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$a','$id','$time2','1')");
    $sql1=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='需維修'WHERE m_no='$id'");
    if($ma_001!='✓' and $ma_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','注意事項項目','$ma_001')");
    }
    if($ma_002!='✓' and $ma_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','承載存放限制','$ma_002')");
    }
    if($ma_003!='✓' and $ma_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','各式按鈕檢視','$ma_003')");
    }
    if($ma_004!='✓' and $ma_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','設備運轉測試','$ma_004')");
    }
    if($ma_005!='✓' and $ma_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車台定位檢視','$ma_005')");
    }
    if($ma_006!='✓' and $ma_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車台水平檢視','$ma_006')");
    }
    if($ma_007!='✓' and $ma_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','警(指)是裝置檢視','$ma_007')");
    }
    if($ma_008!='✓' and $ma_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','升降、橫移連鎖裝置檢視','$ma_008')");
    }
    if($ma_009!='✓' and $ma_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','光電開關檢視','$ma_009')");
    }
    if($ma_010!='✓' and $ma_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','限動、檢測開關檢視','$ma_010')");
    }
    if($ma_011!='✓' and $ma_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','驅動元件檢視','$ma_011')");
    }
    if($ma_012!='✓' and $ma_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','各式傳動元件檢視','$ma_012')");
    }
    if($ma_013!='✓' and $ma_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','油壓元件檢視','$ma_013')");
    }
    if($ma_014!='✓' and $ma_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','鍊條、鋼索檢視','$ma_014')");
    }
    if($ma_015!='✓' and $ma_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','電控系統檢視','$ma_015')");
    }
    if($ma_016!='✓' and $ma_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','機械結構、置車板機廂檢視','$ma_016')");
    }
    if($ma_017!='✓' and $ma_017!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','安全扣元件檢視','$ma_017')");
    }
    if($ma_018!='✓' and $ma_018!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','油壓防爆閥檢視','$ma_018')");
    }
    if($ma_019!='✓' and $ma_019!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','防落裝置檢視','$ma_019')");
    }
    if($ma_020!='✓' and $ma_020!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','照明裝置檢視','$ma_020')");
    }
    if($ma_021!='✓' and $ma_021!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','機械式檢視','$ma_021')");
    }
    if($ma_022!='✓' and $ma_022!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','區格防護規定(欄杆)','$ma_022')");
    }
    if($ma_023!='✓' and $ma_023!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','機坑積水檢視','$ma_023')");
    }
    if($ma_024!='✓' and $ma_024!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','停放之車輛符合承載規範','$ma_024')");
    }
    if($m_remarks!=null){
    $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','$m_remarks','')");
    }
    
    }
    else{
    $sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
    }
    
    
}

else if($p_name=='停車設備'){
    if($mm_001!='✓' or $mm_002!='✓' or $mm_003!='✓' or $mm_004!='✓' or $mm_005!='✓' or $mm_006!='✓' or $mm_007!='✓' or $mm_008!='✓' or $mm_009!='✓' or $mm_010!='✓' or $mm_011!='✓' or $mm_012!='✓' or $mm_013!='✓' or $mm_014!='✓' or $mm_015!='✓' or $mm_016!='✓' or $mm_017!='✓' or $mm_018!='✓' or $mm_019!='✓' or $mm_020!='✓' or $mm_021!='✓' or $mm_022!='✓' or $mm_023!='✓' or $mm_024!='✓'){
    $sql=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$a','$id','$time2','1')");
    $sql1=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='需維修'WHERE m_no='$id'");
    if($mm_001!='✓' and $mm_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','注意事項項目','$mm_001')");
    }
    if($mm_002!='✓' and $mm_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','承載存放限制','$mm_002')");
    }
    if($mm_003!='✓' and $mm_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','各式按鈕檢視','$mm_003')");
    }
    if($mm_004!='✓' and $mm_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','設備運轉測試','$mm_004')");
    }
    if($mm_005!='✓' and $mm_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車台定位檢視','$mm_005')");
    }
    if($mm_006!='✓' and $mm_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車台水平檢視','$mm_006')");
    }
    if($mm_007!='✓' and $mm_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','警(指)是裝置檢視','$mm_007')");
    }
    if($mm_008!='✓' and $mm_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','升降、橫移連鎖裝置檢視','$mm_008')");
    }
    if($mm_009!='✓' and $mm_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','光電開關檢視','$mm_009')");
    }
    if($mm_010!='✓' and $mm_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','限動、檢測開關檢視','$mm_010')");
    }
    if($mm_011!='✓' and $mm_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','驅動元件檢視','$mm_011')");
    }
    if($mm_012!='✓' and $mm_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','各式傳動元件檢視','$mm_012')");
    }
    if($mm_013!='✓' and $mm_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','油壓元件檢視','$mm_013')");
    }
    if($mm_014!='✓' and $mm_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','鍊條、鋼索檢視','$mm_014')");
    }
    if($mm_015!='✓' and $mm_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','電控系統檢視','$mm_015')");
    }
    if($mm_016!='✓' and $mm_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','機械結構、置車板機廂檢視','$mm_016')");
    }
    if($mm_017!='✓' and $mm_017!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','安全扣元件檢視','$mm_017')");
    }
    if($mm_018!='✓' and $mm_018!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','油壓防爆閥檢視','$mm_018')");
    }
    if($mm_019!='✓' and $mm_019!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','防落裝置檢視','$mm_019')");
    }
    if($mm_020!='✓' and $mm_020!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','照明裝置檢視','$mm_020')");
    }
    if($mm_021!='✓' and $mm_021!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','機械式檢視','$mm_021')");
    }
    if($mm_022!='✓' and $mm_022!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','區格防護規定(欄杆)','$mm_022')");
    }
    if($mm_023!='✓' and $mm_023!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','機坑積水檢視','$mm_023')");
    }
    if($mm_024!='✓' and $mm_024!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','停放之車輛符合承載規範','$mm_024')");
    }    
    if($m_remarks!=null){
    $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','$m_remarks','')");
    }
        }

    else{
    $sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
    }
    
}
else if($p_name=='電梯'){
    if($me_001!='✓' or $me_002!='✓' or $me_003!='✓' or $me_004!='✓' or $me_005!='✓' or $me_006!='✓' or $me_007!='✓' or $me_008!='✓' or $me_009!='✓' or $me_010!='✓' or $me_011!='✓' or $me_012!='✓' or $me_013!='✓' or $me_014!='✓' or $me_015!='✓' or $me_016!='✓' or $se_001!='✓' or $se_002!='✓' or $se_003!='✓' or $se_004!='✓' or $hye_001!='✓' or $hye_002!='✓' or $hye_003!='✓' or $hye_004!='✓' or $hye_005!='✓' or $hye_006!='✓' or $hye_007!='✓' or $hye_008!='✓' or $hye_009!='✓' or $ye_001!='✓' or $ye_002!='✓' or $ye_003!='✓' or $ye_004!='✓' or $ye_005!='✓'){
    $sql=mysqli_query($con,"INSERT INTO `fix`(`fix_no`,`m_no`,`f_star_date`,`f_statue`) VALUES('$a','$id','$time2','1')");
    $sql1=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='需維修'WHERE m_no='$id'");
    if($me_001!='✓' and $me_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','機械式環境狀況','$me_001')");
    }
    if($me_002!='✓' and $me_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','受電盤、制御盤、信號盤','$me_002')");
    }
    if($me_003!='✓' and $me_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','電動機、牽引機','$me_003')");
    }
    if($me_004!='✓' and $me_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','電動發電機、啟動盤','$me_004')");
    }
    if($me_005!='✓' and $me_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車廂走行狀態','$me_005')");
    }
    if($me_006!='✓' and $me_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','對外部聯絡裝置','$me_006')");
    }
    if($me_007!='✓' and $me_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','停車燈裝置','$me_007')");
    }
    if($me_008!='✓' and $me_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車廂內裝、照明、通風扇','$me_008')");
    }
    if($me_009!='✓' and $me_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車廂上環境狀況','$me_009')");
    }
    if($me_010!='✓' and $me_010!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','門之開閉裝置','$me_010')");
    }
    if($me_011!='✓' and $me_011!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車廂著床狀態','$me_011')");
    }
    if($me_012!='✓' and $me_012!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','門開閉狀態','$me_012')");
    }
    if($me_013!='✓' and $me_013!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','導滑器、導論','$me_013')");
    }
    if($me_014!='✓' and $me_014!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','給油器','$me_014')");
    }
    if($me_015!='✓' and $me_015!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','乘車門、門踏板','$me_015')");
    }
    if($me_016!='✓' and $me_016!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','乘場按鈕、指示燈','$me_016')");
    }   
    if($se_001!='✓' and $se_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車廂操作盤、指示燈','$se_001')");
    }
    if($se_002!='✓' and $se_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車廂門、門踏板','$se_002')");
    }
    if($se_003!='✓' and $se_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','閉門安全裝置','$se_003')");
    }
    if($se_004!='✓' and $se_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','門手動開放','$se_004')");
    }
    if($hye_001!='✓' and $hye_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','電磁煞車器','$hye_001')");
    }
    if($hye_002!='✓' and $hye_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','乘場選擇器','$hye_002')");
    }
    if($hye_003!='✓' and $hye_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','調速器','$hye_003')");
    }
    if($hye_004!='✓' and $hye_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','升降路內、機坑內環境狀況','$hye_004')");
    }
    if($hye_005!='✓' and $hye_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','車廂、配重之轉向輪','$hye_005')");
    }
    if($hye_006!='✓' and $hye_006!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','主鋼索、調速鋼索、檢點','$hye_006')");
    }
    if($hye_007!='✓' and $hye_007!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','導軌檢點、鋼帶檢點','$hye_007')");
    }
    if($hye_008!='✓' and $hye_008!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','配重器','$hye_008')");
    }
    if($hye_009!='✓' and $hye_009!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','DrSW動作、DrLock機構檢點','$hye_009')");
    }
    if($ye_001!='✓' and $ye_001!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','上、下部極限開關動作確認','$ye_001')");
    }
    if($ye_002!='✓' and $ye_002!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','緊急停止裝置檢點','$ye_002')");
    }
    if($ye_003!='✓' and $ye_003!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','移動電纜','$ye_003')");
    }
    if($ye_004!='✓' and $ye_004!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','緩衝器檢點','$ye_004')");
    }
    if($ye_005!='✓' and $ye_005!='Ν'){
        $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','各張力輪','$ye_005')");
    }
    if($m_remarks!=null){
    $sql1=mysqli_query($con,"INSERT INTO `fix_item`( `fix_no`, `f_work_item`, `fi_statue`) VALUES ('$a','$m_remarks','')");
    }
        }

    else{
    $sql=mysqli_query($con,"UPDATE `maintain` SET `mf_sataue`='無須維修' WHERE m_no='$id'");
    }
   
}               
                

$sql=mysqli_query($con,"UPDATE `maintain` SET 
`m_p_end_date`='$m_p_end_date',`m_status`='$m_status',`m_in_time`='$m_in_time',`m_out_time`='$m_out_time',`m_remarks`='$m_remarks'WHERE m_no='$id'");
 //if($sql){echo '更新成功';}else{echo'更新失敗'.mysqli_error();alert('新增失敗');}
 




    
if($p_name=='附屬設備' ){
 
$sql=mysqli_query($con,"INSERT INTO `month_attached_item`(`ma_001`, `ma_002`, `ma_003`, `ma_004`, `ma_005`, `ma_006`, `ma_007`, `ma_008`, `ma_009`, `ma_010`, `ma_011`, `ma_012`, `ma_013`, `ma_014`, `ma_015`, `ma_016`, `ma_017`, `ma_018`, `ma_019`, `ma_020`, `ma_021`, `ma_022`, `ma_023`, `ma_024`, `m_no`) VALUES('$ma_001','$ma_002','$ma_003','$ma_004','$ma_005','$ma_006','$ma_007','$ma_008','$ma_009','$ma_010','$ma_011','$ma_012','$ma_013','$ma_014','$ma_015','$ma_016','$ma_017','$ma_018','$ma_019','$ma_020','$ma_021','$ma_022','$ma_023','$ma_024','$id')");

if(sql){
if($ma_001=='✓' and $ma_002=='✓'and $ma_003=='✓'and $ma_004=='✓'and $ma_005=='✓'and $ma_006=='✓'and $ma_007=='✓'and $ma_008=='✓'and $ma_009=='✓'and $ma_010=='✓'and $ma_011=='✓'and $ma_012=='✓'and $ma_013=='✓'and $ma_014=='✓'and $ma_015=='✓'and $ma_016=='✓'and $ma_017=='✓'and $ma_018=='✓'and $ma_019=='✓'and $ma_020=='✓'and $ma_021=='✓'and $ma_022=='✓'and $ma_023=='✓'and $ma_024=='✓'){
  echo "<script language=javascript>
    alert('新增成功'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type&price_no=$price_no&m_pno=$m_pno';
    </script>";
}
else{
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$a';
    </script>"
    ;}
    }
    else{
    echo'新增失敗'.mysqli_error($con);}
 

    }
    
    
    

    
else if ($p_name=='停車設備' ){

$sql=mysqli_query($con,"INSERT INTO `month_machine_item`(`mm_001`, `mm_002`, `mm_003`, `mm_004`, `mm_005`, `mm_006`, `mm_007`, `mm_008`, `mm_009`, `mm_010`, `mm_011`, `mm_012`, `mm_013`, `mm_014`, `mm_015`, `mm_016`, `mm_017`, `mm_018`, `mm_019`, `mm_020`, `mm_021`, `mm_022`, `mm_023`, `mm_024`, `m_no`) VALUES('$mm_001','$mm_002','$mm_003','$mm_004','$mm_005','$mm_006','$mm_007','$mm_008','$mm_009','$mm_010','$mm_011','$mm_012','$mm_013','$mm_014','$mm_015','$mm_016','$mm_017','$mm_018','$mm_019','$mm_020','$mm_021','$mm_022','$mm_023','$mm_024','$id')");
if(sql){
if($mm_001=='✓' and $mm_002=='✓'and $mm_003=='✓'and $mm_004=='✓'and $mm_005=='✓'and $mm_006=='✓'and $mm_007=='✓'and $mm_008=='✓'and $mm_009=='✓'and $mm_010=='✓'and $mm_011=='✓'and $mm_012=='✓'and $mm_013=='✓'and $mm_014=='✓'and $mm_015=='✓'and $mm_016=='✓'and $mm_017=='✓'and $mm_018=='✓'and $mm_019=='✓'and $mm_020=='✓'and $mm_021=='✓'and $mm_022=='✓'and $mm_023=='✓'and $mm_024=='✓'){
  echo "<script language=javascript>
    alert('新增成功'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type&price_no=$price_no&m_pno=$m_pno';
    </script>";
}
else{
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$a';
    </script>"
    ;}
    }
    else{
    echo'新增失敗'.mysqli_error($con);}
 

    }
    
 
    
    
    
else if ($p_name=='電梯')
{
    if ($m_type == '月保養'){
    
$sql=mysqli_query($con,"INSERT INTO `year_elevator`(`m_no`, `me_001`, `me_002`, `me_003`, `me_004`, `me_005`, `me_006`, `me_007`, `me_008`, `me_009`, `me_010`, `me_011`, `me_012`, `me_013`, `me_014`, `me_015`, `me_016`) VALUES('$id','$me_001','$me_002','$me_003','$me_004','$me_005','$me_006','$me_007','$me_008','$me_009','$me_010','$me_011','$me_012','$me_013','$me_014','$me_015','$me_016')");

if(sql){
if($me_001=='✓' and $me_002=='✓'and $me_003=='✓'and $me_004=='✓'and $me_005=='✓'and $me_006=='✓'and $me_007=='✓'and $me_008=='✓'and $me_009=='✓'and $me_010=='✓'and $me_011=='✓'and $me_012=='✓'and $me_013=='✓'and $me_014=='✓'and $me_015=='✓'and $me_016=='✓'){
  echo "<script language=javascript>
    alert('新增成功'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type&price_no=$price_no&m_pno=$m_pno';
    </script>";
}
else{
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$a';
    </script>"
    ;}
    }
    else{
    echo'新增失敗'.mysqli_error($con);}
 
}

else if($m_type == '季保養'){

$sql2=mysqli_query($con,"INSERT INTO `year_elevator`(`m_no`, `me_001`, `me_002`, `me_003`, `me_004`, `me_005`, `me_006`, `me_007`, `me_008`, `me_009`, `me_010`, `me_011`, `me_012`, `me_013`, `me_014`, `me_015`, `me_016`, `se_001`, `se_002`, `se_003`, `se_004`) VALUES('$id','$me_001','$me_002','$me_003','$me_004','$me_005','$me_006','$me_007','$me_008','$me_009','$me_010','$me_011','$me_012','$me_013','$me_014','$me_015','$me_016','$se_001','$se_002','$se_003','$se_004')");

if(sql){
if($me_001=='✓' and $me_002=='✓'and $me_003=='✓'and $me_004=='✓'and $me_005=='✓'and $me_006=='✓'and $me_007=='✓'and $me_008=='✓'and $me_009=='✓'and $me_010=='✓'and $me_011=='✓'and $me_012=='✓'and $me_013=='✓'and $me_014=='✓'and $me_015=='✓'and $me_016=='✓'and $se_001=='✓' and $se_002=='✓'and $se_003=='✓'and $se_004=='✓'){
  echo "<script language=javascript>
    alert('新增成功'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type&price_no=$price_no&m_pno=$m_pno';
    </script>";
}
else{
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$a';
    </script>"
    ;}
    }
    else{
    echo'新增失敗'.mysqli_error($con);}
 

}


else if($m_type == '半年保養'){
    
$sql3=mysqli_query($con,"INSERT INTO `year_elevator`(`m_no`, `me_001`, `me_002`, `me_003`, `me_004`, `me_005`, `me_006`, `me_007`, `me_008`, `me_009`, `me_010`, `me_011`, `me_012`, `me_013`, `me_014`, `me_015`, `me_016`, `se_001`, `se_002`, `se_003`, `se_004`, `hye_001`, `hye_002`, `hye_003`, `hye_004`, `hye_005`, `hye_006`, `hye_007`, `hye_008`, `hye_009`) VALUES('$id','$me_001','$me_002','$me_003','$me_004','$me_005','$me_006','$me_007','$me_008','$me_009','$me_010','$me_011','$me_012','$me_013','$me_014','$me_015','$me_016','$se_001','$se_002','$se_003','$se_004','$hye_001','$hye_002','$hye_003','$hye_004','$hye_005','$hye_006','$hye_007','$hye_008','$hye_009')");

if(sql){
if($me_001=='✓' and $me_002=='✓'and $me_003=='✓'and $me_004=='✓'and $me_005=='✓'and $me_006=='✓'and $me_007=='✓'and $me_008=='✓'and $me_009=='✓'and $me_010=='✓'and $me_011=='✓'and $me_012=='✓'and $me_013=='✓'and $me_014=='✓'and $me_015=='✓'and $me_016=='✓'and $se_001=='✓' and $se_002=='✓'and $se_003=='✓'and $se_004=='✓'and $hye_001=='✓' and $hye_002=='✓'and $hye_003=='✓'and $hye_004=='✓'and $hye_005=='✓'and $hye_006=='✓'and $hye_007=='✓'and $hye_008=='✓'and $hye_009=='✓'){
  echo "<script language=javascript>
    alert('新增成功'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type&price_no=$price_no&m_pno=$m_pno';
    </script>";
}
else{
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$a';
    </script>"
    ;}
    }
    else{
    echo'新增失敗'.mysqli_error($con);}
 
}

else if($m_type == '年保養'){

/*$sql=mysqli_query($con,"INSERT INTO `month_elevator_item`(`me_001`, `me_002`, `me_003`, `me_004`, `me_005`, `me_006`, `me_007`, `me_008`, `me_009`, `me_010`, `me_011`, `me_012`, `me_013`, `me_014`, `me_015`, `me_016`, `m_no`) VALUES('$me_001','$me_002','$me_003','$me_004','$me_005','$me_006','$me_007','$me_008','$me_009','$me_010','$me_011','$me_012','$me_013','$me_014','$me_015','$me_016',$id)");

$sql2=mysqli_query($con,"INSERT INTO `season_elevator`(`m_no`, `se_001`, `se_002`, `se_003`, `se_004`) VALUES('$id','$se_001','$se_002','$se_003','$se_004')");    
    
$sql3=mysqli_query($con,"INSERT INTO `half_yea_elevator`(`m_no`, `hye_001`, `hye_002`, `hye_003`, `hye_004`, `hye_005`, `hye_006`, `hye_007`, `hye_008`, `hye_009`) VALUES('$id','$hye_001','$hye_002','$hye_003','$hye_004','$hye_005','$hye_006','$hye_007','$hye_008','$hye_009')");

$sql4=mysqli_query($con,"INSERT INTO `year_elevator`( `m_no`, `ye_001`, `ye_002`, `ye_003`, `ye_004`, `ye_005`) VALUES('$id','$ye_001','$ye_002','$ye_003','$ye_004','$ye_005')");*/

$sql4=mysqli_query($con,"INSERT INTO `year_elevator`(`m_no`, `me_001`, `me_002`, `me_003`, `me_004`, `me_005`, `me_006`, `me_007`, `me_008`, `me_009`, `me_010`, `me_011`, `me_012`, `me_013`, `me_014`, `me_015`, `me_016`, `se_001`, `se_002`, `se_003`, `se_004`, `hye_001`, `hye_002`, `hye_003`, `hye_004`, `hye_005`, `hye_006`, `hye_007`, `hye_008`, `hye_009`, `ye_001`, `ye_002`, `ye_003`, `ye_004`, `ye_005`) VALUES('$id','$me_001','$me_002','$me_003','$me_004','$me_005','$me_006','$me_007','$me_008','$me_009','$me_010','$me_011','$me_012','$me_013','$me_014','$me_015','$me_016','$se_001','$se_002','$se_003','$se_004','$hye_001','$hye_002','$hye_003','$hye_004','$hye_005','$hye_006','$hye_007','$hye_008','$hye_009','$ye_001','$ye_002','$ye_003','$ye_004','$ye_005')");

if(sql){
if($me_001=='✓' and $me_002=='✓'and $me_003=='✓'and $me_004=='✓'and $me_005=='✓'and $me_006=='✓'and $me_007=='✓'and $me_008=='✓'and $me_009=='✓'and $me_010=='✓'and $me_011=='✓'and $me_012=='✓'and $me_013=='✓'and $me_014=='✓'and $me_015=='✓'and $me_016=='✓'and $se_001=='✓' and $se_002=='✓'and $se_003=='✓'and $se_004=='✓'and $hye_001=='✓' and $hye_002=='✓'and $hye_003=='✓'and $hye_004=='✓'and $hye_005=='✓' and $hye_006=='✓'and $hye_007=='✓'and $hye_008=='✓'and $hye_009=='✓' and $ye_001=='✓' and $ye_002=='✓'and $ye_003=='✓'and $ye_004=='✓'and $ye_005=='✓'){
  echo "<script language=javascript>
    alert('新增成功'); 
    location.href='maintain_medit.php?id=$id&p_name=$p_name&m_type=$m_type&price_no=$price_no&m_pno=$m_pno';
    </script>";
}
else{
    echo "<script language=javascript>
    alert('新增成功'); 
    location.href='job_fix.php?id=$price_no&mno=$id&fix=$a';
    </script>"
    ;}
    }
    else{
    echo'新增失敗'.mysqli_error($con);}
 

}      
}
            

 
        
    
        
       

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
 <script language="javascript"> 
function handler(e){
  //alert(e.target.value);
  document.getElementById('m_out_time').min = e.target.value;
}
 
 function complete(form){
//alert($("#p_end_date").val());

        

         if($("#m_in_time").val()==""){
            alert("你尚未填寫進入時間");
            eval("document.form1['m_in_time'].focus()");
            return (false);   
        }else if($("#m_out_time").val()==""){
            alert("你尚未填寫出去時間");
            eval("document.form1['m_out_time'].focus()"); 
            return (false);
        }else if($("#m_p_end_date").val()==""){
            alert("你尚未填寫實際施工日期");
            eval("document.form1['m_p_end_date'].focus()"); 
            return (false);
        }/*else {
            
            return (true);
            alert("訂單完成囉~");
            document.form1.submit();*/

            
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
        <li class="select"  onclick="location.href='maintain.php'"><i class="fa fa-cogs" aria-hidden="true"></i><span class="span">保養紀錄</span>
        </li>
        <li class="" onclick="location.href='maintain_record.php'"><span class="span">保養歷史</span></li>
     </ul>
          
    <ul class="" onclick="location.href='fix.php'"><i class="fa fa-wrench" aria-hidden="true"></i><span class="span">維修</span></ul>
    <ul class="" onclick="location.href='job.php'"><i class="fa fa-briefcase" aria-hidden="true"></i><span class="span">派工</span></ul>
    <ul class="" onclick="location.href='price.php'"><i class="fa fa-calculator" aria-hidden="true"></i><span class="span">報價</span></ul>
    
    <ul class="" onclick="location.href='order.php'"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="span">訂單</span>
    </ul>
    
     <ul class="" onclick="location.href='product.php'"><i class="fa fa-car" aria-hidden="true"></i><span class="span">產品</span></ul>
     <ul class="" onclick="location.href='client.php'"><i class="fa fa-user" aria-hidden="true"></i><span class="span">客戶</span></ul>
     
  </aside>
  <div id='content'>
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

<?php
    }
?>
    </table>

<?php
   
   
  /* $date30DaysAdded = date('Y-m-d', strtotime("+1 month"));
   echo "Days added: ".$date30DaysAdded;*/
?>
    <form action="" method="post" name="form1">
    <p class="card-date">進入時間 <input id="m_in_time" onchange="handler(event);" type="time"  id="m_in_time" name="m_in_time" class='date-input'>
    出去時間 <input type="time" id="m_out_time" name="m_out_time" class='date-input'><br>
    實際施工日期 <input type="date" id="m_p_end_date" name="m_p_end_date" class='date-input'></p>
    
    
    
    <h4>維護檢視項目</h4>
<div id="month" class="item">
<div class="item-head">月保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td >機械式環境狀況：</td>
    <td >
    <input type="radio" name="me_001" value="✓" checked="true" class='item-radio r1 ' id='me_001-i1'/><label for="me_001-i1">&#10003;</label><input type="radio" name="me_001" value="✕" class='item-radio r2' id='me_001-i2'/><label for='me_001-i2'>&#10005;</label><input type="radio" name="me_001" value="Δ" class='item-radio r3' id='me_001-i3'/><label for='me_001-i3'>&#916;</label><input type="radio" name="me_001" value="Ν" class='item-radio r4 ' id='me_001-i4'/><label for='me_001-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >受電盤、抑御盤、信號盤：</td>
    <td >
    <input type="radio" name="me_002" value="✓" checked="true" class='item-radio r1 ' id='me_002-i1'/><label for="me_002-i1">&#10003;</label><input type="radio" name="me_002" value="✕" class='item-radio r2' id='me_002-i2'/><label for='me_002-i2'>&#10005;</label><input type="radio" name="me_002" value="Δ" class='item-radio r3' id='me_002-i3'/><label for='me_002-i3'>&#916;</label><input type="radio" name="me_002" value="Ν" class='item-radio r4 ' id='me_002-i4'/><label for='me_002-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >電動機、牽引機：</td>
    <td >
    <input type="radio" name="me_003" value="✓" checked="true" class='item-radio r1 ' id='me_003-i1'/><label for="me_003-i1">&#10003;</label><input type="radio" name="me_003" value="✕" class='item-radio r2' id='me_003-i2'/><label for='me_003-i2'>&#10005;</label><input type="radio" name="me_003" value="Δ" class='item-radio r3' id='me_003-i3'/><label for='me_003-i3'>&#916;</label><input type="radio" name="me_003" value="Ν" class='item-radio r4 ' id='me_003-i4'/><label for='me_003-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >電動發電機、啟動盤：</td>
    <td >
    <input type="radio" name="me_004" value="✓" checked="true"  class='item-radio r1 ' id='me_004-i1'/><label for="me_004-i1">&#10003;</label><input type="radio" name="me_004" value="✕" class='item-radio r2' id='me_004-i2'/><label for='me_004-i2'>&#10005;</label><input type="radio" name="me_004" value="Δ" class='item-radio r3' id='me_004-i3'/><label for='me_004-i3'>&#916;</label><input type="radio" name="me_004" value="Ν" class='item-radio r4 ' id='me_004-i4'/><label for='me_004-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td > 車廂走行狀態：</td>
    <td >
    <input type="radio" name="me_005" value="✓" checked="true"  class='item-radio r1 ' id='me_005-i1'/><label for="me_005-i1">&#10003;</label><input type="radio" name="me_005" value="✕" class='item-radio r2' id='me_005-i2'/><label for='me_005-i2'>&#10005;</label><input type="radio" name="me_005" value="Δ" class='item-radio r3' id='me_005-i3'/><label for='me_005-i3'>&#916;</label><input type="radio" name="me_005" value="Ν" class='item-radio r4 ' id='me_005-i4'/><label for='me_005-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td > 對外外部聯絡裝置：</td>
    <td >
    <input type="radio" name="me_006" value="✓" checked="true"  class='item-radio r1 ' id='me_006-i1'/><label for="me_006-i1">&#10003;</label><input type="radio" name="me_006" value="✕" class='item-radio r2' id='me_006-i2'/><label for='me_006-i2'>&#10005;</label><input type="radio" name="me_006" value="Δ" class='item-radio r3' id='me_006-i3'/><label for='me_006-i3'>&#916;</label><input type="radio" name="me_006" value="Ν" class='item-radio r4 ' id='me_006-i4'/><label for='me_006-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >停電燈裝置：</td>
    <td>
    <input type="radio" name="me_007" value="✓" checked="true"  class='item-radio r1 ' id='me_007-i1'/><label for="me_007-i1">&#10003;</label><input type="radio" name="me_007" value="✕" class='item-radio r2' id='me_007-i2'/><label for='me_007-i2'>&#10005;</label><input type="radio" name="me_007" value="Δ" class='item-radio r3' id='me_007-i3'/><label for='me_007-i3'>&#916;</label><input type="radio" name="me_007" value="Ν" class='item-radio r4 ' id='me_007-i4'/><label for='me_007-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td > 車廂內裝、照明、通風扇：</td>
    <td>
    <input type="radio" name="me_008" value="✓" checked="true"  class='item-radio r1 ' id='me_008-i1'/><label for="me_008-i1">&#10003;</label><input type="radio" name="me_008" value="✕" class='item-radio r2' id='me_008-i2'/><label for='me_008-i2'>&#10005;</label><input type="radio" name="me_008" value="Δ" class='item-radio r3' id='me_008-i3'/><label for='me_008-i3'>&#916;</label><input type="radio" name="me_008" value="Ν" class='item-radio r4 ' id='me_008-i4'/><label for='me_008-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td>車廂上環境裝置：</td>
    <td>
    <input type="radio" name="me_009" value="✓" checked="true"  class='item-radio r1 ' id='me_009-i1'/><label for="me_009-i1">&#10003;</label><input type="radio" name="me_009" value="✕" class='item-radio r2' id='me_009-i2'/><label for='me_009-i2'>&#10005;</label><input type="radio" name="me_009" value="Δ" class='item-radio r3' id='me_009-i3'/><label for='me_009-i3'>&#916;</label><input type="radio" name="me_009" value="Ν" class='item-radio r4 ' id='me_009-i4'/><label for='me_009-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td> 門之開閉裝置：</td>
    <td>
    <input type="radio" name="me_010" value="✓" checked="true"  class='item-radio r1 ' id='me_010-i1'/><label for="me_010-i1">&#10003;</label><input type="radio" name="me_010" value="✕" class='item-radio r2' id='me_010-i2'/><label for='me_010-i2'>&#10005;</label><input type="radio" name="me_010" value="Δ" class='item-radio r3' id='me_010-i3'/><label for='me_010-i3'>&#916;</label><input type="radio" name="me_010" value="Ν" class='item-radio r4 ' id='me_010-i4'/><label for='me_010-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td>車廂著床狀態：</td>
    <td>
    <input type="radio" name="me_011" value="✓" checked="true"  class='item-radio r1 ' id='me_011-i1'/><label for="me_011-i1">&#10003;</label><input type="radio" name="me_011" value="✕" class='item-radio r2' id='me_011-i2'/><label for='me_011-i2'>&#10005;</label><input type="radio" name="me_011" value="Δ" class='item-radio r3' id='me_011-i3'/><label for='me_011-i3'>&#916;</label><input type="radio" name="me_011" value="Ν" class='item-radio r4 ' id='me_011-i4'/><label for='me_011-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td>門開閉狀態：</td>
    <td>
    <input type="radio" name="me_012" value="✓" checked="true"  class='item-radio r1 ' id='me_012-i1'/><label for="me_012-i1">&#10003;</label><input type="radio" name="me_012" value="✕" class='item-radio r2' id='me_012-i2'/><label for='me_012-i2'>&#10005;</label><input type="radio" name="me_012" value="Δ" class='item-radio r3' id='me_012-i3'/><label for='me_012-i3'>&#916;</label><input type="radio" name="me_012" value="Ν" class='item-radio r4 ' id='me_012-i4'/><label for='me_012-i4'>&#925;</label> </td>
    </tr>
    <tr>
    <td>導滑器、導論：</td>
    <td><input type="radio" name="me_013" value="✓" checked="true"  class='item-radio r1 ' id='me_013-i1'/><label for="me_013-i1">&#10003;</label><input type="radio" name="me_013" value="✕" class='item-radio r2' id='me_013-i2'/><label for='me_013-i2'>&#10005;</label><input type="radio" name="me_013" value="Δ" class='item-radio r3' id='me_013-i3'/><label for='me_013-i3'>&#916;</label><input type="radio" name="me_013" value="Ν" class='item-radio r4 ' id='me_013-i4'/><label for='me_013-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td>給油器：</td>
    <td><input type="radio" name="me_014" value="✓" checked="true"  class='item-radio r1 ' id='me_014-i1'/><label for="me_014-i1">&#10003;</label><input type="radio" name="me_014" value="✕" class='item-radio r2' id='me_014-i2'/><label for='me_014-i2'>&#10005;</label><input type="radio" name="me_014" value="Δ" class='item-radio r3' id='me_014-i3'/><label for='me_014-i3'>&#916;</label><input type="radio" name="me_014" value="Ν" class='item-radio r4 ' id='me_014-i4'/><label for='me_014-i4'>&#925;</label>
    </td></tr>
    <tr><td>乘車門、門踏板：</td>
    <td><input type="radio" name="me_015" value="✓" checked="true"  class='item-radio r1 ' id='me_015-i1'/><label for="me_015-i1">&#10003;</label><input type="radio" name="me_015" value="✕" class='item-radio r2' id='me_015-i2'/><label for='me_015-i2'>&#10005;</label><input type="radio" name="me_015" value="Δ" class='item-radio r3' id='me_015-i3'/><label for='me_015-i3'>&#916;</label><input type="radio" name="me_015" value="Ν" class='item-radio r4 ' id='me_015-i4'/><label for='me_015-i4'>&#925;</label></td>
    </tr>
    <tr>
    <td>乘場按鈕、指示燈：</td>
    <td><input type="radio" name="me_016" value="✓" checked="true"  class='item-radio r1 ' id='me_016-i1'/><label for="me_016-i1">&#10003;</label><input type="radio" name="me_016" value="✕" class='item-radio r2' id='me_016-i2'/><label for='me_016-i2'>&#10005;</label><input type="radio" name="me_016" value="Δ" class='item-radio r3' id='me_016-i3'/><label for='me_016-i3'>&#916;</label><input type="radio" name="me_016" value="Ν" class='item-radio r4 ' id='me_016-i4'/><label for='me_016-i4'>&#925;</label>
    </td>
    </tr>
    </table>

</div>
<div id="season" class="item">
<div class="item-head">季保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td>車廂操作盤：</td>
    <td><input type="radio" name="se_001" value="✓" checked="true" class='item-radio r1 ' id='se_001-i1'/><label for="se_001-i1">&#10003;</label><input type="radio" name="se_001" value="✕" class='item-radio r2' id='se_001-i2'/><label for='se_001-i2'>&#10005;</label><input type="radio" name="se_001" value="Δ" class='item-radio r3' id='se_001-i3'/><label for='se_001-i3'>&#916;</label><input type="radio" name="se_001" value="Ν" class='item-radio r4 ' id='se_001-i4'/><label for='se_001-i4'>&#925;</label>
    </td></tr><tr>
    <td >車廂門、門踏板：</td>
    <td ><input type="radio" name="se_002" value="✓" checked="true" class='item-radio r1 ' id='se_002-i1'/><label for="se_002-i1">&#10003;</label><input type="radio" name="se_002" value="✕" class='item-radio r2' id='se_002-i2'/><label for='se_002-i2'>&#10005;</label><input type="radio" name="se_002" value="Δ" class='item-radio r3' id='se_002-i3'/><label for='se_002-i3'>&#916;</label><input type="radio" name="se_002" value="Ν" class='item-radio r4 ' id='se_002-i4'/><label for='se_002-i4'>&#925;</label>
    </td></tr><tr>
    <td >閉門安全裝置：</td>
    <td ><input type="radio" name="se_003" value="✓" checked="true" class='item-radio r1 ' id='se_003-i1'/><label for="se_003-i1">&#10003;</label><input type="radio" name="se_003" value="✕" class='item-radio r2' id='se_003-i2'/><label for='se_003-i2'>&#10005;</label><input type="radio" name="se_003" value="Δ" class='item-radio r3' id='se_003-i3'/><label for='se_003-i3'>&#916;</label><input type="radio" name="se_003" value="Ν" class='item-radio r4 ' id='se_003-i4'/><label for='se_003-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >門手動開放：</td>
    <td ><input type="radio" name="se_004" value="✓" checked="true" class='item-radio r1 ' id='se_004-i1'/><label for="se_004-i1">&#10003;</label><input type="radio" name="se_004" value="✕" class='item-radio r2' id='se_004-i2'/><label for='se_004-i2'>&#10005;</label><input type="radio" name="se_004" value="Δ" class='item-radio r3' id='se_004-i3'/><label for='se_004-i3'>&#916;</label><input type="radio" name="se_004" value="Ν" class='item-radio r4 ' id='se_004-i4'/><label for='se_004-i4'>&#925;</label>
    </td>
    </tr>

</table>
</div>

<div id="half_year" class="item">
<div class="item-head">半年保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td >電磁煞車器：</td>
    <td ><input type="radio" name="hye_001" value="✓" checked="true" class='item-radio r1 ' id='hye_001-i1'/><label for="hye_001-i1">&#10003;</label><input type="radio" name="hye_001" value="✕" class='item-radio r2' id='hye_001-i2'/><label for='hye_001-i2'>&#10005;</label><input type="radio" name="hye_001" value="Δ" class='item-radio r3' id='hye_001-i3'/><label for='hye_001-i3'>&#916;</label><input type="radio" name="hye_001" value="Ν" class='item-radio r4 ' id='hye_001-i4'/><label for='hye_001-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >乘場選擇器：</td>
    <td ><input type="radio" name="hye_002" value="✓" checked="true" class='item-radio r1 ' id='hye_002-i1'/><label for="hye_002-i1">&#10003;</label><input type="radio" name="hye_002" value="✕" class='item-radio r2' id='hye_002-i2'/><label for='hye_002-i2'>&#10005;</label><input type="radio" name="hye_002" value="Δ" class='item-radio r3' id='hye_002-i3'/><label for='hye_002-i3'>&#916;</label><input type="radio" name="hye_002" value="Ν" class='item-radio r4 ' id='hye_002-i4'/><label for='hye_002-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >調速器：</td>
    <td >
    <input type="radio" name="hye_003" value="✓" checked="true" class='item-radio r1 ' id='hye_003-i1'/><label for="hye_003-i1">&#10003;</label><input type="radio" name="hye_003" value="✕" class='item-radio r2' id='hye_003-i2'/><label for='hye_003-i2'>&#10005;</label><input type="radio" name="hye_003" value="Δ" class='item-radio r3' id='hye_003-i3'/><label for='hye_003-i3'>&#916;</label><input type="radio" name="hye_003" value="Ν" class='item-radio r4 ' id='hye_003-i4'/><label for='hye_003-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >升降路內、機坑內環境狀況：</td>
    <td ><input type="radio" name="hye_004" value="✓" checked="true" class='item-radio r1 ' id='hye_004-i1'/><label for="hye_004-i1">&#10003;</label><input type="radio" name="hye_004" value="✕" class='item-radio r2' id='hye_004-i2'/><label for='hye_004-i2'>&#10005;</label><input type="radio" name="hye_004" value="Δ" class='item-radio r3' id='hye_004-i3'/><label for='hye_004-i3'>&#916;</label><input type="radio" name="hye_004" value="Ν" class='item-radio r4 ' id='hye_004-i4'/><label for='hye_004-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >車廂、配重之轉向輪：</td>
    <td ><input type="radio" name="hye_005" value="✓" checked="true" class='item-radio r1 ' id='hye_005-i1'/><label for="hye_005-i1">&#10003;</label><input type="radio" name="hye_005" value="✕" class='item-radio r2' id='hye_005-i2'/><label for='hye_005-i2'>&#10005;</label><input type="radio" name="hye_005" value="Δ" class='item-radio r3' id='hye_005-i3'/><label for='hye_005-i3'>&#916;</label><input type="radio" name="hye_005" value="Ν" class='item-radio r4 ' id='hye_005-i4'/><label for='hye_005-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >主鋼索、調速鋼索、檢點：</td>
    <td ><input type="radio" name="hye_006" value="✓" checked="true" class='item-radio r1 ' id='hye_006-i1'/><label for="hye_006-i1">&#10003;</label><input type="radio" name="hye_006" value="✕" class='item-radio r2' id='hye_006-i2'/><label for='hye_006-i2'>&#10005;</label><input type="radio" name="hye_006" value="Δ" class='item-radio r3' id='hye_006-i3'/><label for='hye_006-i3'>&#916;</label><input type="radio" name="hye_006" value="Ν" class='item-radio r4 ' id='hye_006-i4'/><label for='hye_006-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >導軌檢點、鋼帶檢點：</td>
    <td ><input type="radio" name="hye_007" value="✓" checked="true" class='item-radio r1 ' id='hye_007-i1'/><label for="hye_007-i1">&#10003;</label><input type="radio" name="hye_007" value="✕" class='item-radio r2' id='hye_007-i2'/><label for='hye_007-i2'>&#10005;</label><input type="radio" name="hye_007" value="Δ" class='item-radio r3' id='hye_007-i3'/><label for='hye_007-i3'>&#916;</label><input type="radio" name="hye_007" value="Ν" class='item-radio r4 ' id='hye_007-i4'/><label for='hye_007-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >配重器：</td>
    <td ><input type="radio" name="hye_008" value="✓" checked="true" class='item-radio r1 ' id='hye_008-i1'/><label for="hye_008-i1">&#10003;</label><input type="radio" name="hye_008" value="✕" class='item-radio r2' id='hye_008-i2'/><label for='hye_008-i2'>&#10005;</label><input type="radio" name="hye_008" value="Δ" class='item-radio r3' id='hye_008-i3'/><label for='hye_008-i3'>&#916;</label><input type="radio" name="hye_008" value="Ν" class='item-radio r4 ' id='hye_008-i4'/><label for='hye_008-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >DrSW動作、Dr Lock機構檢點：</td>
    <td ><input type="radio" name="hye_009" value="✓" checked="true" class='item-radio r1 ' id='hye_009-i1'/><label for="hye_009-i1">&#10003;</label><input type="radio" name="hye_009" value="✕" class='item-radio r2' id='hye_009-i2'/><label for='hye_009-i2'>&#10005;</label><input type="radio" name="hye_009" value="Δ" class='item-radio r3' id='hye_009-i3'/><label for='hye_009-i3'>&#916;</label><input type="radio" name="hye_009" value="Ν" class='item-radio r4 ' id='hye_009-i4'/><label for='hye_009-i4'>&#925;</label>
    </td>
    </tr>
</table>
</div>

<div id="year" class="item">
<div class="item-head">年保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td >上、下部極限開關動作確認：</td>
    <td ><input type="radio" name="ye_001" value="✓" checked="true" class='item-radio r1 ' id='ye_001-i1'/><label for="ye_001-i1">&#10003;</label><input type="radio" name="ye_001" value="✕" class='item-radio r2' id='ye_001-i2'/><label for='ye_001-i2'>&#10005;</label><input type="radio" name="ye_001" value="Δ" class='item-radio r3' id='ye_001-i3'/><label for='ye_001-i3'>&#916;</label><input type="radio" name="ye_001" value="Ν" class='item-radio r4 ' id='ye_001-i4'/><label for='ye_001-i4'>&#925;</label>
    </tr><tr>
    <td >緊急停止裝置檢點：</td>
    <td ><input type="radio" name="ye_002" value="✓" checked="true" class='item-radio r1 ' id='ye_002-i1'/><label for="ye_002-i1">&#10003;</label><input type="radio" name="ye_002" value="✕" class='item-radio r2' id='ye_002-i2'/><label for='ye_002-i2'>&#10005;</label><input type="radio" name="ye_002" value="Δ" class='item-radio r3' id='ye_002-i3'/><label for='ye_002-i3'>&#916;</label><input type="radio" name="ye_002" value="Ν" class='item-radio r4 ' id='ye_002-i4'/><label for='ye_002-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >移動電纜：</td>
    <td ><input type="radio" name="ye_003" value="✓" checked="true" class='item-radio r1 ' id='ye_003-i1'/><label for="ye_003-i1">&#10003;</label><input type="radio" name="ye_003" value="✕" class='item-radio r2' id='ye_003-i2'/><label for='ye_003-i2'>&#10005;</label><input type="radio" name="ye_003" value="Δ" class='item-radio r3' id='ye_003-i3'/><label for='ye_003-i3'>&#916;</label><input type="radio" name="ye_003" value="Ν" class='item-radio r4 ' id='ye_003-i4'/><label for='ye_003-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >緩衝器檢點：</td>
    <td ><input type="radio" name="ye_004" value="✓" checked="true" class='item-radio r1 ' id='ye_004-i1'/><label for="ye_004-i1">&#10003;</label><input type="radio" name="ye_004" value="✕" class='item-radio r2' id='ye_004-i2'/><label for='ye_004-i2'>&#10005;</label><input type="radio" name="ye_004" value="Δ" class='item-radio r3' id='ye_004-i3'/><label for='ye_004-i3'>&#916;</label><input type="radio" name="ye_004" value="Ν" class='item-radio r4 ' id='ye_004-i4'/><label for='ye_004-i4'>&#925;</label>
    </tr>
    <tr>
    <td >各張力輪：</td>
    <td ><input type="radio" name="ye_005" value="✓" checked="true" class='item-radio r1 ' id='ye_005-i1'/><label for="ye_005-i1">&#10003;</label><input type="radio" name="ye_005" value="✕" class='item-radio r2' id='ye_005-i2'/><label for='ye_005-i2'>&#10005;</label><input type="radio" name="ye_005" value="Δ" class='item-radio r3' id='ye_005-i3'/><label for='ye_005-i3'>&#916;</label><input type="radio" name="ye_005" value="Ν" class='item-radio r4 ' id='ye_005-i4'/><label for='ye_005-i4'>&#925;</label>
    </td>
    </tr>
</table>

</div>

<div id="park" class="item">
<div class="item-head">月保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td >注意事項項目：</td>
     <td><input type="radio" name="mm_001" value="✓" checked="true" class='item-radio r1 ' id='mm_001-i1'/><label for="mm_001-i1">&#10003;</label><input type="radio" name="mm_001" value="✕" class='item-radio r2' id='mm_001-i2'/><label for='mm_001-i2'>&#10005;</label><input type="radio" name="mm_001" value="Δ" class='item-radio r3' id='mm_001-i3'/><label for='mm_001-i3'>&#916;</label><input type="radio" name="mm_001" value="Ν" class='item-radio r4 ' id='mm_001-i4'/><label for='mm_001-i4'>&#925;</label>
     </td>
     </tr>
     <tr>
     <td>承載存放限制：</td>
     <td><input type="radio" name="mm_002" value="✓" checked="true" class='item-radio r1 ' id='mm_002-i1'/><label for="mm_002-i1">&#10003;</label><input type="radio" name="mm_002" value="✕" class='item-radio r2' id='mm_002-i2'/><label for='mm_002-i2'>&#10005;</label><input type="radio" name="mm_002" value="Δ" class='item-radio r3' id='mm_002-i3'/><label for='mm_002-i3'>&#916;</label><input type="radio" name="mm_002" value="Ν" class='item-radio r4 ' id='mm_002-i4'/><label for='mm_002-i4'>&#925;</label>
     </td>
     </tr>
     <tr>
     <td >各式按鈕檢視：</td>
     <td ><input type="radio" name="mm_003" value="✓" checked="true" class='item-radio r1 ' id='mm_003-i1'/><label for="mm_003-i1">&#10003;</label><input type="radio" name="mm_003" value="✕" class='item-radio r2' id='mm_003-i2'/><label for='mm_003-i2'>&#10005;</label><input type="radio" name="mm_003" value="Δ" class='item-radio r3' id='mm_003-i3'/><label for='mm_003-i3'>&#916;</label><input type="radio" name="mm_003" value="Ν" class='item-radio r4 ' id='mm_003-i4'/><label for='mm_003-i4'>&#925;</label>
     </td>
     </tr>
     <tr>
     <td >設備運轉測試：</td>
     <td ><input type="radio" name="mm_004" value="✓" checked="true" class='item-radio r1 ' id='mm_004-i1'/><label for="mm_004-i1">&#10003;</label><input type="radio" name="mm_004" value="✕" class='item-radio r2' id='mm_004-i2'/><label for='mm_004-i2'>&#10005;</label><input type="radio" name="mm_004" value="Δ" class='item-radio r3' id='mm_004-i3'/><label for='mm_004-i3'>&#916;</label><input type="radio" name="mm_004" value="Ν" class='item-radio r4 ' id='mm_004-i4'/><label for='mm_004-i4'>&#925;</label>
     </td>
     </tr>
     <tr><td >車台定位檢視：</td>
     <td ><input type="radio" name="mm_005" value="✓" checked="true" class='item-radio r1 ' id='mm_005-i1'/><label for="mm_005-i1">&#10003;</label><input type="radio" name="mm_005" value="✕" class='item-radio r2' id='mm_005-i2'/><label for='mm_005-i2'>&#10005;</label><input type="radio" name="mm_005" value="Δ" class='item-radio r3' id='mm_005-i3'/><label for='mm_005-i3'>&#916;</label><input type="radio" name="mm_005" value="Ν" class='item-radio r4 ' id='mm_005-i4'/><label for='mm_005-i4'>&#925;</label>
     </td>
     </tr><tr>
     <td >車台水平檢視：</td>
     <td ><input type="radio" name="mm_006" value="✓" checked="true" class='item-radio r1 ' id='mm_006-i1'/><label for="mm_006-i1">&#10003;</label><input type="radio" name="mm_006" value="✕" class='item-radio r2' id='mm_006-i2'/><label for='mm_006-i2'>&#10005;</label><input type="radio" name="mm_006" value="Δ" class='item-radio r3' id='mm_006-i3'/><label for='mm_006-i3'>&#916;</label><input type="radio" name="mm_006" value="Ν" class='item-radio r4 ' id='mm_006-i4'/><label for='mm_006-i4'>&#925;</label>
     </td>
     </tr>
     <tr>
     <td >警(指)是裝置檢視：</td>
     <td ><input type="radio" name="mm_007" value="✓" checked="true" class='item-radio r1 ' id='mm_007-i1'/><label for="mm_007-i1">&#10003;</label><input type="radio" name="mm_007" value="✕" class='item-radio r2' id='mm_007-i2'/><label for='mm_007-i2'>&#10005;</label><input type="radio" name="mm_007" value="Δ" class='item-radio r3' id='mm_007-i3'/><label for='mm_007-i3'>&#916;</label><input type="radio" name="mm_007" value="Ν" class='item-radio r4 ' id='mm_007-i4'/><label for='mm_007-i4'>&#925;</label>
     </td>
     </tr>
     <tr>
     <td >升降、橫移連鎖裝置檢視：</td>
     <td ><input type="radio" name="mm_008" value="✓" checked="true" class='item-radio r1 ' id='mm_008-i1'/><label for="mm_008-i1">&#10003;</label><input type="radio" name="mm_008" value="✕" class='item-radio r2' id='mm_008-i2'/><label for='mm_008-i2'>&#10005;</label><input type="radio" name="mm_008" value="Δ" class='item-radio r3' id='mm_008-i3'/><label for='mm_008-i3'>&#916;</label><input type="radio" name="mm_008" value="Ν" class='item-radio r4 ' id='mm_008-i4'/><label for='mm_008-i4'>&#925;</label>
     </td>
     </tr>
     <tr>
     <td >光電開關檢視：</td>
     <td ><input type="radio" name="mm_009" value="✓" checked="true" class='item-radio r1 ' id='mm_009-i1'/><label for="mm_009-i1">&#10003;</label><input type="radio" name="mm_009" value="✕" class='item-radio r2' id='mm_009-i2'/><label for='mm_009-i2'>&#10005;</label><input type="radio" name="mm_009" value="Δ" class='item-radio r3' id='mm_009-i3'/><label for='mm_009-i3'>&#916;</label><input type="radio" name="mm_009" value="Ν" class='item-radio r4 ' id='mm_009-i4'/><label for='mm_009-i4'>&#925;</label>
     </td>
     </tr>
     <tr>
     <td >限動、檢測開關檢視：</td>
     <td ><input type="radio" name="mm_010" value="✓" checked="true" class='item-radio r1 ' id='mm_010-i1'/><label for="mm_010-i1">&#10003;</label><input type="radio" name="mm_010" value="✕" class='item-radio r2' id='mm_010-i2'/><label for='mm_010-i2'>&#10005;</label><input type="radio" name="mm_010" value="Δ" class='item-radio r3' id='mm_010-i3'/><label for='mm_010-i3'>&#916;</label><input type="radio" name="mm_010" value="Ν" class='item-radio r4 ' id='mm_010-i4'/><label for='mm_010-i4'>&#925;</label>
     </td>
     </tr>
     <tr>
     <td >驅動元件檢視：</td>
     <td ><input type="radio" name="mm_011" value="✓" checked="true" class='item-radio r1 ' id='mm_011-i1'/><label for="mm_011-i1">&#10003;</label><input type="radio" name="mm_011" value="✕" class='item-radio r2' id='mm_011-i2'/><label for='mm_011-i2'>&#10005;</label><input type="radio" name="mm_011" value="Δ" class='item-radio r3' id='mm_011-i3'/><label for='mm_011-i3'>&#916;</label><input type="radio" name="mm_011" value="Ν" class='item-radio r4 ' id='mm_011-i4'/><label for='mm_011-i4'>&#925;</label>
     </td></tr><tr>
     <td >各式傳動元件檢視：</td>
     <td ><input type="radio" name="mm_012" value="✓" checked="true" class='item-radio r1 ' id='mm_012-i1'/><label for="mm_012-i1">&#10003;</label><input type="radio" name="mm_012" value="✕" class='item-radio r2' id='mm_012-i2'/><label for='mm_012-i2'>&#10005;</label><input type="radio" name="mm_012" value="Δ" class='item-radio r3' id='mm_012-i3'/><label for='mm_012-i3'>&#916;</label><input type="radio" name="mm_012" value="Ν" class='item-radio r4 ' id='mm_012-i4'/><label for='mm_012-i4'>&#925;</label>
     </td></tr><tr>
     <td >油壓元件檢視：</td>
     <td ><input type="radio" name="mm_013" value="✓" checked="true" class='item-radio r1 ' id='mm_013-i1'/><label for="mm_013-i1">&#10003;</label><input type="radio" name="mm_013" value="✕" class='item-radio r2' id='mm_013-i2'/><label for='mm_013-i2'>&#10005;</label><input type="radio" name="mm_013" value="Δ" class='item-radio r3' id='mm_013-i3'/><label for='mm_013-i3'>&#916;</label><input type="radio" name="mm_013" value="Ν" class='item-radio r4 ' id='mm_013-i4'/><label for='mm_013-i4'>&#925;</label>
    </td>
      </tr><tr>
      <td >鍊條、鋼索檢視：</td>
      <td ><input type="radio" name="mm_014" value="✓" checked="true" class='item-radio r1 ' id='mm_014-i1'/><label for="mm_014-i1">&#10003;</label><input type="radio" name="mm_014" value="✕" class='item-radio r2' id='mm_014-i2'/><label for='mm_014-i2'>&#10005;</label><input type="radio" name="mm_014" value="Δ" class='item-radio r3' id='mm_014-i3'/><label for='mm_014-i3'>&#916;</label><input type="radio" name="mm_014" value="Ν" class='item-radio r4 ' id='mm_014-i4'/><label for='mm_014-i4'>&#925;</label>
      </td>
      </tr><tr><td >電控系統檢視：</td>
      <td ><input type="radio" name="mm_015" value="✓" checked="true" class='item-radio r1 ' id='mm_015-i1'/><label for="mm_015-i1">&#10003;</label><input type="radio" name="mm_015" value="✕" class='item-radio r2' id='mm_015-i2'/><label for='mm_015-i2'>&#10005;</label><input type="radio" name="mm_015" value="Δ" class='item-radio r3' id='mm_015-i3'/><label for='mm_015-i3'>&#916;</label><input type="radio" name="mm_015" value="Ν" class='item-radio r4 ' id='mm_015-i4'/><label for='mm_015-i4'>&#925;</label>
      </td>
      </tr>
      <tr>
      <td >機械結構、置車板機廂檢視：</td>
      <td ><input type="radio" name="mm_016" value="✓" checked="true" class='item-radio r1 ' id='mm_016-i1'/><label for="mm_016-i1">&#10003;</label><input type="radio" name="mm_016" value="✕" class='item-radio r2' id='mm_016-i2'/><label for='mm_016-i2'>&#10005;</label><input type="radio" name="mm_016" value="Δ" class='item-radio r3' id='mm_016-i3'/><label for='mm_016-i3'>&#916;</label><input type="radio" name="mm_016" value="Ν" class='item-radio r4 ' id='mm_016-i4'/><label for='mm_016-i4'>&#925;</label>
      </td>
      </tr>
      <tr><td >安全扣元件檢視：</td>
      <td ><input type="radio" name="mm_017" value="✓" checked="true" class='item-radio r1 ' id='mm_017-i1'/><label for="mm_017-i1">&#10003;</label><input type="radio" name="mm_017" value="✕" class='item-radio r2' id='mm_017-i2'/><label for='mm_017-i2'>&#10005;</label><input type="radio" name="mm_017" value="Δ" class='item-radio r3' id='mm_017-i3'/><label for='mm_017-i3'>&#916;</label><input type="radio" name="mm_017" value="Ν" class='item-radio r4 ' id='mm_017-i4'/><label for='mm_017-i4'>&#925;</label>
      </td>
      </tr><tr>
      <td >油壓防爆閥檢視：</td>
      <td ><input type="radio" name="mm_018" value="✓" checked="true" class='item-radio r1 ' id='mm_018-i1'/><label for="mm_018-i1">&#10003;</label><input type="radio" name="mm_018" value="✕" class='item-radio r2' id='mm_018-i2'/><label for='mm_018-i2'>&#10005;</label><input type="radio" name="mm_018" value="Δ" class='item-radio r3' id='mm_018-i3'/><label for='mm_018-i3'>&#916;</label><input type="radio" name="mm_018" value="Ν" class='item-radio r4 ' id='mm_018-i4'/><label for='mm_018-i4'>&#925;</label>
       </td> </tr><tr>
       <td >防落裝置檢視：</td>
       <td ><input type="radio" name="mm_019" value="✓" checked="true" class='item-radio r1 ' id='mm_019-i1'/><label for="mm_019-i1">&#10003;</label><input type="radio" name="mm_019" value="✕" class='item-radio r2' id='mm_019-i2'/><label for='mm_019-i2'>&#10005;</label><input type="radio" name="mm_019" value="Δ" class='item-radio r3' id='mm_019-i3'/><label for='mm_019-i3'>&#916;</label><input type="radio" name="mm_019" value="Ν" class='item-radio r4 ' id='mm_019-i4'/><label for='mm_019-i4'>&#925;</label>
       </td>
       </tr><tr>
       <td >照明裝置檢視：</td>
       <td ><input type="radio" name="mm_020" value="✓" checked="true" class='item-radio r1 ' id='mm_020-i1'/><label for="mm_020-i1">&#10003;</label><input type="radio" name="mm_020" value="✕" class='item-radio r2' id='mm_020-i2'/><label for='mm_020-i2'>&#10005;</label><input type="radio" name="mm_020" value="Δ" class='item-radio r3' id='mm_020-i3'/><label for='mm_020-i3'>&#916;</label><input type="radio" name="mm_020" value="Ν" class='item-radio r4 ' id='mm_020-i4'/><label for='mm_020-i4'>&#925;</label>
       </td></tr> <tr>
        <td >機械式檢視：</td>
        <td ><input type="radio" name="mm_021" value="✓" checked="true" class='item-radio r1 ' id='mm_021-i1'/><label for="mm_021-i1">&#10003;</label><input type="radio" name="mm_021" value="✕" class='item-radio r2' id='mm_021-i2'/><label for='mm_021-i2'>&#10005;</label><input type="radio" name="mm_021" value="Δ" class='item-radio r3' id='mm_021-i3'/><label for='mm_021-i3'>&#916;</label><input type="radio" name="mm_021" value="Ν" class='item-radio r4 ' id='mm_021-i4'/><label for='mm_021-i4'>&#925;</label></td> </tr>
        <tr>
        <td >機械式檢視：</td>
        <td ><input type="radio" name="mm_022" value="✓" checked="true" class='item-radio r1 ' id='mm_022-i1'/><label for="mm_022-i1">&#10003;</label><input type="radio" name="mm_022" value="✕" class='item-radio r2' id='mm_022-i2'/><label for='mm_022-i2'>&#10005;</label><input type="radio" name="mm_022" value="Δ" class='item-radio r3' id='mm_022-i3'/><label for='mm_022-i3'>&#916;</label><input type="radio" name="mm_022" value="Ν" class='item-radio r4 ' id='mm_022-i4'/><label for='mm_022-i4'>&#925;</label></td></tr>
        <tr>
        <td >機坑積水檢視：</td>
        <td ><input type="radio" name="mm_023" value="✓" checked="true" class='item-radio r1 ' id='mm_023-i1'/><label for="mm_023-i1">&#10003;</label><input type="radio" name="mm_023" value="✕" class='item-radio r2' id='mm_023-i2'/><label for='mm_023-i2'>&#10005;</label><input type="radio" name="mm_023" value="Δ" class='item-radio r3' id='mm_023-i3'/><label for='mm_023-i3'>&#916;</label><input type="radio" name="mm_023" value="Ν" class='item-radio r4 ' id='mm_023-i4'/><label for='mm_023-i4'>&#925;</label></td>
        </tr>
        <tr>
        <td >停放之車輛符合承載規範：</td>
        <td ><input type="radio" name="mm_024" value="✓" checked="true" class='item-radio r1 ' id='mm_024-i1'/><label for="mm_024-i1">&#10003;</label><input type="radio" name="mm_024" value="✕" class='item-radio r2' id='mm_024-i2'/><label for='mm_024-i2'>&#10005;</label><input type="radio" name="mm_024" value="Δ" class='item-radio r3' id='mm_024-i3'/><label for='mm_024-i3'>&#916;</label><input type="radio" name="mm_024" value="Ν" class='item-radio r4 ' id='mm_024-i4'/><label for='mm_024-i4'>&#925;</label>
        </td>
        </tr>
</table>
</div>

<div id="subsidiary" class="item">
<div class="item-head">月保養</div>
<table class='item-table' cellspacing="0">
    <tr>
    <td >注意事項項目：</td>
    <td ><input type="radio" name="ma_001" value="✓" checked="true" class='item-radio r1 ' id='ma_001-i1'/><label for="ma_001-i1">&#10003;</label><input type="radio" name="ma_001" value="✕" class='item-radio r2' id='ma_001-i2'/><label for='ma_001-i2'>&#10005;</label><input type="radio" name="ma_001" value="Δ" class='item-radio r3' id='ma_001-i3'/><label for='ma_001-i3'>&#916;</label><input type="radio" name="ma_001" value="Ν" class='item-radio r4 ' id='ma_001-i4'/><label for='ma_001-i4'>&#925;</label>
    </td></tr>
    <tr><td >承載存放限制：</td>
    <td ><input type="radio" name="ma_002" value="✓" checked="true" class='item-radio r1 ' id='ma_002-i1'/><label for="ma_002-i1">&#10003;</label><input type="radio" name="ma_002" value="✕" class='item-radio r2' id='ma_002-i2'/><label for='ma_002-i2'>&#10005;</label><input type="radio" name="ma_002" value="Δ" class='item-radio r3' id='ma_002-i3'/><label for='ma_002-i3'>&#916;</label><input type="radio" name="ma_002" value="Ν" class='item-radio r4 ' id='ma_002-i4'/><label for='ma_002-i4'>&#925;</label></td>
    </tr>
    <tr><td >各式按鈕檢視：</td>
    <td ><input type="radio" name="ma_003" value="✓" checked="true" class='item-radio r1 ' id='ma_003-i1'/><label for="ma_003-i1">&#10003;</label><input type="radio" name="ma_003" value="✕" class='item-radio r2' id='ma_003-i2'/><label for='ma_003-i2'>&#10005;</label><input type="radio" name="ma_003" value="Δ" class='item-radio r3' id='ma_003-i3'/><label for='ma_003-i3'>&#916;</label><input type="radio" name="ma_003" value="Ν" class='item-radio r4 ' id='ma_003-i4'/><label for='ma_003-i4'>&#925;</label></td>
    </tr>
    <tr>
    <td >設備運轉測試：</td>
    <td ><input type="radio" name="ma_004" value="✓" checked="true" class='item-radio r1 ' id='ma_004-i1'/><label for="ma_004-i1">&#10003;</label><input type="radio" name="ma_004" value="✕" class='item-radio r2' id='ma_004-i2'/><label for='ma_004-i2'>&#10005;</label><input type="radio" name="ma_004" value="Δ" class='item-radio r3' id='ma_004-i3'/><label for='ma_004-i3'>&#916;</label><input type="radio" name="ma_004" value="Ν" class='item-radio r4 ' id='ma_004-i4'/><label for='ma_004-i4'>&#925;</label>
    </td></tr>
    <tr>
    <td >車台定位檢視：</td>
    <td ><input type="radio" name="ma_005" value="✓" checked="true" class='item-radio r1 ' id='ma_005-i1'/><label for="ma_005-i1">&#10003;</label><input type="radio" name="ma_005" value="✕" class='item-radio r2' id='ma_005-i2'/><label for='ma_005-i2'>&#10005;</label><input type="radio" name="ma_005" value="Δ" class='item-radio r3' id='ma_005-i3'/><label for='ma_005-i3'>&#916;</label><input type="radio" name="ma_005" value="Ν" class='item-radio r4 ' id='ma_005-i4'/><label for='ma_005-i4'>&#925;</label></td>
    </tr>
    <tr>
    <td >車台水平檢視：</td>
    <td ><input type="radio" name="ma_006" value="✓" checked="true" class='item-radio r1 ' id='ma_006-i1'/><label for="ma_006-i1">&#10003;</label><input type="radio" name="ma_006" value="✕" class='item-radio r2' id='ma_006-i2'/><label for='ma_006-i2'>&#10005;</label><input type="radio" name="ma_006" value="Δ" class='item-radio r3' id='ma_006-i3'/><label for='ma_006-i3'>&#916;</label><input type="radio" name="ma_006" value="Ν" class='item-radio r4 ' id='ma_006-i4'/><label for='ma_006-i4'>&#925;</label>
    </td>
    </tr>
    <tr>
    <td >警(指)是裝置檢視：</td><td ><input type="radio" name="ma_007" value="✓" checked="true" class='item-radio r1 ' id='ma_007-i1'/><label for="ma_007-i1">&#10003;</label><input type="radio" name="ma_007" value="✕" class='item-radio r2' id='ma_007-i2'/><label for='ma_007-i2'>&#10005;</label><input type="radio" name="ma_007" value="Δ" class='item-radio r3' id='ma_007-i3'/><label for='ma_007-i3'>&#916;</label><input type="radio" name="ma_007" value="Ν" class='item-radio r4 ' id='ma_007-i4'/><label for='ma_007-i4'>&#925;</label>
    </td></tr>
    <tr>
    <td >升降、橫移連鎖裝置檢視：</td>
    <td ><input type="radio" name="ma_008" value="✓" checked="true" class='item-radio r1 ' id='ma_008-i1'/><label for="ma_008-i1">&#10003;</label><input type="radio" name="ma_008" value="✕" class='item-radio r2' id='ma_008-i2'/><label for='ma_008-i2'>&#10005;</label><input type="radio" name="ma_008" value="Δ" class='item-radio r3' id='ma_008-i3'/><label for='ma_008-i3'>&#916;</label><input type="radio" name="ma_008" value="Ν" class='item-radio r4 ' id='ma_008-i4'/><label for='ma_008-i4'>&#925;</label></td>
    </tr>
    <tr><td >光電開關檢視：</td><td ><input type="radio" name="ma_009" value="✓" checked="true" class='item-radio r1 ' id='ma_009-i1'/><label for="ma_009-i1">&#10003;</label><input type="radio" name="ma_009" value="✕" class='item-radio r2' id='ma_009-i2'/><label for='ma_009-i2'>&#10005;</label><input type="radio" name="ma_009" value="Δ" class='item-radio r3' id='ma_009-i3'/><label for='ma_009-i3'>&#916;</label><input type="radio" name="ma_009" value="Ν" class='item-radio r4 ' id='ma_009-i4'/><label for='ma_009-i4'>&#925;</label>
    </td>
    </tr><tr>
    <td >限動、檢測開關檢視：</td><td ><input type="radio" name="ma_010" value="✓" checked="true" class='item-radio r1 ' id='ma_010-i1'/><label for="ma_010-i1">&#10003;</label><input type="radio" name="ma_010" value="✕" class='item-radio r2' id='ma_010-i2'/><label for='ma_010-i2'>&#10005;</label><input type="radio" name="ma_010" value="Δ" class='item-radio r3' id='ma_010-i3'/><label for='ma_010-i3'>&#916;</label><input type="radio" name="ma_010" value="Ν" class='item-radio r4 ' id='ma_010-i4'/><label for='ma_010-i4'>&#925;</label>
    </td></tr>
    <tr>
    <td >驅動元件檢視：</td><td ><input type="radio" name="ma_011" value="✓" checked="true" /class='item-radio r1 ' id='ma_011-i1'/><label for="ma_011-i1">&#10003;</label><input type="radio" name="ma_011" value="✕" class='item-radio r2' id='ma_011-i2'/><label for='ma_011-i2'>&#10005;</label><input type="radio" name="ma_011" value="Δ" class='item-radio r3' id='ma_011-i3'/><label for='ma_011-i3'>&#916;</label><input type="radio" name="ma_011" value="Ν" class='item-radio r4 ' id='ma_011-i4'/><label for='ma_011-i4'>&#925;</label>
    </tr><tr>
    <td >各式傳動元件檢視：</td>
    <td ><input type="radio" name="ma_012" value="✓" checked="true" class='item-radio r1 ' id='ma_012-i1'/><label for="ma_012-i1">&#10003;</label><input type="radio" name="ma_012" value="✕" class='item-radio r2' id='ma_012-i2'/><label for='ma_012-i2'>&#10005;</label><input type="radio" name="ma_012" value="Δ" class='item-radio r3' id='ma_012-i3'/><label for='ma_012-i3'>&#916;</label><input type="radio" name="ma_012" value="Ν" class='item-radio r4 ' id='ma_012-i4'/><label for='ma_012-i4'>&#925;</label>
    </td></tr>
    <tr>
    <td >油壓元件檢視：</td>
    <td ><input type="radio" name="ma_013" value="✓" checked="true" class='item-radio r1 ' id='ma_013-i1'/><label for="ma_013-i1">&#10003;</label><input type="radio" name="ma_013" value="✕" class='item-radio r2' id='ma_013-i2'/><label for='ma_013-i2'>&#10005;</label><input type="radio" name="ma_013" value="Δ" class='item-radio r3' id='ma_013-i3'/><label for='ma_013-i3'>&#916;</label><input type="radio" name="ma_013" value="Ν" class='item-radio r4 ' id='ma_013-i4'/><label for='ma_013-i4'>&#925;</label>
    </td>
    </tr>
    <tr><td >鍊條、鋼索檢視：</td>
    <td ><input type="radio" name="ma_014" value="✓" checked="true" class='item-radio r1 ' id='ma_014-i1'/><label for="ma_014-i1">&#10003;</label><input type="radio" name="ma_014" value="✕" class='item-radio r2' id='ma_014-i2'/><label for='ma_014-i2'>&#10005;</label><input type="radio" name="ma_014" value="Δ" class='item-radio r3' id='ma_014-i3'/><label for='ma_014-i3'>&#916;</label><input type="radio" name="ma_014" value="Ν" class='item-radio r4 ' id='ma_014-i4'/><label for='ma_014-i4'>&#925;</label>
    </td></tr>
    <tr><td >電控系統檢視：</td>
    <td ><input type="radio" name="ma_015" value="✓" checked="true" class='item-radio r1 ' id='ma_015-i1'/><label for="ma_015-i1">&#10003;</label><input type="radio" name="ma_015" value="✕" class='item-radio r2' id='ma_015-i2'/><label for='ma_015-i2'>&#10005;</label><input type="radio" name="ma_015" value="Δ" class='item-radio r3' id='ma_015-i3'/><label for='ma_015-i3'>&#916;</label><input type="radio" name="ma_015" value="Ν" class='item-radio r4 ' id='ma_015-i4'/><label for='ma_015-i4'>&#925;</label></td>
    </tr>
    <tr><td >機械結構、置車板機廂檢視：</td><td ><input type="radio" name="ma_016" value="✓" checked="true" class='item-radio r1 ' id='ma_016-i1'/><label for="ma_016-i1">&#10003;</label><input type="radio" name="ma_016" value="✕" class='item-radio r2' id='ma_016-i2'/><label for='ma_016-i2'>&#10005;</label><input type="radio" name="ma_016" value="Δ" class='item-radio r3' id='ma_016-i3'/><label for='ma_016-i3'>&#916;</label><input type="radio" name="ma_016" value="Ν" class='item-radio r4 ' id='ma_016-i4'/><label for='ma_016-i4'>&#925;</label>
    </td>
    </tr>
    <tr><td >安全扣元件檢視：</td>
    <td ><input type="radio" name="ma_017" value="✓" checked="true" class='item-radio r1 ' id='ma_017-i1'/><label for="ma_017-i1">&#10003;</label><input type="radio" name="ma_017" value="✕" class='item-radio r2' id='ma_017-i2'/><label for='ma_017-i2'>&#10005;</label><input type="radio" name="ma_017" value="Δ" class='item-radio r3' id='ma_017-i3'/><label for='ma_017-i3'>&#916;</label><input type="radio" name="ma_017" value="Ν" class='item-radio r4 ' id='ma_017-i4'/><label for='ma_017-i4'>&#925;</label></td>
    </tr>
    <tr>
    <td >油壓防爆閥檢視：</td><td ><input type="radio" name="ma_018" value="✓" checked="true" class='item-radio r1 ' id='ma_018-i1'/><label for="ma_018-i1">&#10003;</label><input type="radio" name="ma_018" value="✕" class='item-radio r2' id='ma_018-i2'/><label for='ma_018-i2'>&#10005;</label><input type="radio" name="ma_018" value="Δ" class='item-radio r3' id='ma_018-i3'/><label for='ma_018-i3'>&#916;</label><input type="radio" name="ma_018" value="Ν" class='item-radio r4 ' id='ma_018-i4'/><label for='ma_018-i4'>&#925;</label>
    </td></tr>
    <tr>
    <td >防落裝置檢視：</td>
    <td ><input type="radio" name="ma_019" value="✓" checked="true" class='item-radio r1 ' id='ma_019-i1'/><label for="ma_019-i1">&#10003;</label><input type="radio" name="ma_019" value="✕" class='item-radio r2' id='ma_019-i2'/><label for='ma_019-i2'>&#10005;</label><input type="radio" name="ma_019" value="Δ" class='item-radio r3' id='ma_019-i3'/><label for='ma_019-i3'>&#916;</label><input type="radio" name="ma_019" value="Ν" class='item-radio r4 ' id='ma_019-i4'/><label for='ma_019-i4'>&#925;</label>
    </td>
    </tr>
    <tr><td >照明裝置檢視：</td><td ><input type="radio" name="ma_020" value="✓" checked="true" class='item-radio r1 ' id='ma_020-i1'/><label for="ma_020-i1">&#10003;</label><input type="radio" name="ma_020" value="✕" class='item-radio r2' id='ma_020-i2'/><label for='ma_020-i2'>&#10005;</label><input type="radio" name="ma_020" value="Δ" class='item-radio r3' id='ma_020-i3'/><label for='ma_020-i3'>&#916;</label><input type="radio" name="ma_020" value="Ν" class='item-radio r4 ' id='ma_020-i4'/><label for='ma_020-i4'>&#925;</label></td>
    </tr>
    <tr>
    <td >機械式檢視：</td>
    <td ><input type="radio" name="ma_021" value="✓" checked="true" class='item-radio r1 ' id='ma_021-i1'/><label for="ma_021-i1">&#10003;</label><input type="radio" name="ma_021" value="✕" class='item-radio r2' id='ma_021-i2'/><label for='ma_021-i2'>&#10005;</label><input type="radio" name="ma_021" value="Δ" class='item-radio r3' id='ma_021-i3'/><label for='ma_021-i3'>&#916;</label><input type="radio" name="ma_021" value="Ν" class='item-radio r4 ' id='ma_021-i4'/><label for='ma_021-i4'>&#925;</label>
    </td></tr>
    <tr>
    <td >區格防護規定(欄杆)：</td>
    <td ><input type="radio" name="ma_022" value="✓" checked="true" class='item-radio r1 ' id='ma_022-i1'/><label for="ma_022-i1">&#10003;</label><input type="radio" name="ma_022" value="✕" class='item-radio r2' id='ma_022-i2'/><label for='ma_022-i2'>&#10005;</label><input type="radio" name="ma_022" value="Δ" class='item-radio r3' id='ma_022-i3'/><label for='ma_022-i3'>&#916;</label><input type="radio" name="ma_022" value="Ν" class='item-radio r4 ' id='ma_022-i4'/><label for='ma_022-i4'>&#925;</label>
    </td>
    </tr>
    <tr><td >機坑積水檢視：</td><td ><input type="radio" name="ma_023" value="✓" checked="true" class='item-radio r1 ' id='ma_023-i1'/><label for="ma_023-i1">&#10003;</label><input type="radio" name="ma_023" value="✕" class='item-radio r2' id='ma_023-i2'/><label for='ma_023-i2'>&#10005;</label><input type="radio" name="ma_023" value="Δ" class='item-radio r3' id='ma_023-i3'/><label for='ma_023-i3'>&#916;</label><input type="radio" name="ma_023" value="Ν" class='item-radio r4 ' id='ma_023-i4'/><label for='ma_023-i4'>&#925;</label>
    </td>
    </tr>
    <tr><td >停放之車輛符合承載規範：</td><td ><input type="radio" name="ma_024" value="✓" checked="true" class='item-radio r1 ' id='ma_024-i1'/><label for="ma_024-i1">&#10003;</label><input type="radio" name="ma_024" value="✕" class='item-radio r2' id='ma_024-i2'/><label for='ma_024-i2'>&#10005;</label><input type="radio" name="ma_024" value="Δ" class='item-radio r3' id='ma_024-i3'/><label for='ma_024-i3'>&#916;</label><input type="radio" name="ma_024" value="Ν" class='item-radio r4 ' id='ma_024-i4'/><label for='ma_024-i4'>&#925;</label>
    </td></tr>
</table>
</div>

<p class="item-end"><textarea name="m_remarks" placeholder="備註" class="item-mark"></textarea>
<input type="submit" name="sumbit" value="新增" onClick="return complete(this.form)" class='end-btn bt-3 bt-g'/></p>
</form>


</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/project/js/maintain.js"></script>
    <script src="/project/js/list.js"></script>
</body>

</html>
