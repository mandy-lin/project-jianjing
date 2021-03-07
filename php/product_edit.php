<?php

if(isset($_POST['edit']))
{
	// creating database connection
	//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");
   // mysqli_query($con,"set names utf8");
   include('connect.php');
	if(!$con)
	{
		die('connection not establish');
	}
	// declaring a output variable for showing data
	$output='';
	if($_POST['edit'] == 'show_edit_data')
	{
		$id = $_POST['id'];
		$update = "SELECT * FROM `produce` where p_no='".$id."'";
		$update_query = mysqli_query($con,$update);
		if($update_query)
		{
			$update_data = mysqli_fetch_array($update_query);
			$output.='
				<table name="product" border="1px" id="table">
        <tr>
                <th>產品名稱</th>
                <th>機械設備or升降梯</th>
                <th>驅動方式</th>
                <th>傳動元件</th>
                <th>旋轉台</th>
                <th>價格</th>
                <th>&nbsp;</th>
        </tr>';
        
            $number=10;
            $page=@$_POST['page'];
            if(isset($_POST['page'])){
                 $page=$_POST['page'];
            }else{
                $page=1;
            }
            
            $type=@$_POST['type'];
            $p_device=@$_POST['p_device'];
            $drive=@$_POST['drive'];
            $transmission=@$_POST['transmission'];
           $roll=@$_POST['roll'];
            
            $start=($page-1)*$number;
            $sel="SELECT * FROM `produce`  where p_name like '%$type%' 
       and p_device like '%$p_device%'
       and p_drive like '%$drive%'
       and p_trans like '%$transmission%'
       and p_rotary like '%$roll%' ORDER BY `produce`.`p_name` DESC  limit $start, $number "; 
        
			//$sel = "SELECT * FROM `produce` ORDER BY `produce`.`p_name` DESC";
			$query = mysqli_query($con,$sel);
			while($data = mysqli_fetch_array($query))
			{
				if($data['p_no'] == $id)
				{
					$output.='
					<tr>
                            <td>'. $data['p_name'].'</td>
                            <td>'. $data['p_device'].'</td>
                            <td>'. $data['p_drive'].'</td>
                            <td>'. $data['p_trans'].'</td>
                            <td>'. $data['p_rotary'].'</td>
                            <td><input class="table-input" type="number" id="new_price" class="form-control" value="'.$update_data['p_price'].'" /></td>
                            <td>
                            <input id='.$update_data['p_no'].' type="button" value="更新" class="btn bt-3 update" >
 
					</tr>
					';
				}
				else
				{
					$output.='
						<tr>
                        <td>'. $data['p_name'].'</td>
                        <td>'. $data['p_device'].'</td>
                        <td>'. $data['p_drive'].'</td>
                        <td>'. $data['p_trans'].'</td>
                        <td>'. $data['p_rotary'].'</td>
                        <td>'.$data['p_price'].'</td>
                        <td><input id='. $data['p_no'].' type="button" value="編輯" class="btn bt-3 edit">
                    </tr>';
				}
			}
			$output.='</table>';
		}
		else
		{
			$output.='Problem in Fetching data1';
		}
	}
	else
	{
		$p_price = $_POST['p_price'];
		$id = $_POST['update_id'];
        $page=$_POST['page'];
		$update = "UPDATE `produce` SET
        p_price='".$p_price."' where p_no='".$id."'";
		$update_query = mysqli_query($con,$update);
		
            
            
        if($update_query)
		{
			$output.='
				<table name="product" border="1px" id="table">
        <tr>
                <th>產品名稱</th>
                <th>機械設備or升降梯</th>
                <th>驅動方式</th>
                <th>傳動元件</th>
                <th>旋轉台</th>
                <th>價格</th>
                <th>&nbsp;</th>
        </tr>';
        
			//$sel = "SELECT * FROM `produce` ORDER BY `produce`.`p_name` DESC";
            $number=10;
            $page=$_POST['page'];
            if(isset($_POST['page'])){
                 $page=$_POST['page'];
            }else{
                $page=1;
            }
            
            $type=@$_POST['type'];
            $p_device=@$_POST['p_device'];
            $drive=@$_POST['drive'];
            $transmission=@$_POST['transmission'];
           $roll=@$_POST['roll'];
            
            $start=($page-1)*$number;
            $sel="SELECT * FROM `produce`  where p_name like '%$type%' 
       and p_device like '%$p_device%'
       and p_drive like '%$drive%'
       and p_trans like '%$transmission%'
       and p_rotary like '%$roll%' ORDER BY `produce`.`p_name` DESC  limit $start, $number "; 
            
            
            //echo 'editstart='.$start.'page='.$page;
            
			$query = mysqli_query($con,$sel);
			while($data = mysqli_fetch_array($query))
			{
				$output.='
					<tr>
                        <td>'. $data['p_name'].'</td>
                        <td>'. $data['p_device'].'</td>
                        <td>'. $data['p_drive'].'</td>
                        <td>'. $data['p_trans'].'</td>
                        <td>'. $data['p_rotary'].'</td>
                        <td>'.$data['p_price'].'</td>
                        <td><input id='. $data['p_no'].' type="button" value="編輯" class="btn bt-3 edit">
                    
            </tr>';
			}
			$output.='</table>';
		}
		else
		{
			$output.='Problem in Updating data2';
		}
	}
echo $output;
}
?>