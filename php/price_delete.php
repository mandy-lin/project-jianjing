<?php
if(isset($_POST['del_id']))
{
	// declaring a output variable for showing data
	$output='';
	$id = $_POST['del_id'];
	// creating database connection
	//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");
    //mysqli_query($con,"set names utf8");
include('connect.php');
	if(!$con)
	{
		die('connection not establish');
	}
	$del = "DELETE FROM `quote` where `price_no`='".$id."'";
    $del1 = "DELETE FROM `order_recode` where `price_no`='".$id."'";
	
    $query1 = mysqli_query($con,$del1);
    $query = mysqli_query($con,$del);
    
	if($query and $query1)
	{
		 $output.='
        <table id="table" class="table">
      <caption>未確認報價單</caption>
    <tr>
      <th>報價日期</th>
      <th>客戶名稱</th>
      <th>預計完工日期</th>
      <th>備註</th>
    </tr>';
		
		
        
        $data = mysqli_query($con,"SELECT price_no,p_date,c_name,p_comp_date FROM `quote` q join client c on(q.c_no=c.c_no) WHERE `p_status`='未確認'");
      
       while ($rs=mysqli_fetch_array($data)){

 $output.='<tr>
      <td>'. $rs['p_date'].'</td>
      <td>'. $rs['c_name'].'</td>
      <td>'. $rs['p_comp_date'].'</td>
      <td>
      <input class="btn bt-1" type="button" value="詳細 " onclick='.'location.href='.'"price_detail.php?id='.$rs['price_no'].'"><input type="button" class="btn bt-2 delete" id='.$rs['price_no'].' value="刪除">
      </td>
    </tr>';
}

		$output.='</table>';
	}
	else
	{
		$output.='Problem in Inserting data';
	}
echo $output;
}
?>