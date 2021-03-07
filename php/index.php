<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
//$con=mysqli_connect("163.17.9.127","root","cyutim10514","test");
//mysqli_query($con,"set names utf8");
include("connect.php");
$id = @$_POST['id'];
$pw = @$_POST['pw'];
$errmsg='';

//搜尋資料庫資料
$sql = "SELECT * FROM user where user = '$id' ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);




//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
//預設帳號:user 密碼:ru04ru/32000


if($id != null && $pw != null && $row['user'] == $id && $row['password'] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        //echo '登入成功!';
        //echo '<meta http-equiv=REFRESH CONTENT=1;url=homepage.php>';
        
        echo "<script language=javascript>
        //alert('登入成功'); 
        location.href='homepage.php';
        </script>";
        
}else if(  $id != null && $row['user'] != $id){
    $errmsg='<font color="red">帳號錯誤！</font>';

}else if( $pw != null  && $row['password'] != $pw){
    $errmsg='<font color="red">密碼錯誤！</font>';

}else{

}


?>
<!-- 設定網頁編碼為UTF-8 -->
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
  body {
  margin: 0;
  background-color: #1d2124;
  }

.card {
text-align: center;
border-radius: 20px;
width: 450px;
height: 300px;
padding: 50px 15px 15px 15px;
position: absolute;
left: 50%;
top: 50%;
margin-left: -200px;
margin-top: -200px;
background-color: rgba(240, 255, 255, 0.5);
}
form input > * {
    display: inline-block;
    vertical-align: middle;
}
.card-search{
height: calc(1.5em + 0.75rem + 2px);
padding: 0.375rem 0.75rem;
font-size: 1rem;
color: #495057;
border: 1px solid #ced4da;
border-radius: 0.25rem;
margin: 10px;
}
.card-search:focus{
outline:none ;
border: 2px solid 	#479AC7;
border-radius: 0.25rem;
}
.card-search:focus::placeholder{
color: 	#479AC7;
}
.card-btn{
padding: 0.375rem 0.375rem;
font-size: 0.5rem;
color: #fff;
border: 1px solid #ced4da;
border-radius: 0.25rem;
background-color: 	#2894ff;
font-size: 1rem;
padding: 10px;
}
.card-btn:hover{
color: #495057;
background-color:#0080ff;
}
.card-btn:focus{
color: #fff;
box-shadow: 0;
background-color:#0072e3;
outline:none;
}
.img{
width: 92px;
height: 100px;
}


</style>
<script type="text/javascript">
function Login(form){

if($("#user").val()==""){
errmsg.innerHTML="<font color="+"'red'"+">帳號未填!</font>";
eval("document.form['user'].focus()");
return (false);
}else if($("#pw").val()==""){
errmsg.innerHTML="<font color="+"'red'"+">密碼未填!</font>";
eval("document.form['pw'].focus()");
return (false);
}else {
    return (true);
    //alert("報價單完成囉~");
    document.form2.submit();
}

}

</script>
<head>
<link rel="icon" href="../img/jj.ico" type="image/x-icon" />
<title>健璟內部管理系統</title>
</head>
<body>
<div class="card">
<form id="form" name="form" method="post" action="">
<img  src="../img/ja.png" class="img"><br>

<input type="text" name="id" id='user' placeholder="帳號" class="card-search"/><br>
<input type="password" name="pw" id='pw' placeholder="密碼" class="card-search"/><br>
<span id='errmsg'></span>
<?PHP
 if(isset($errmsg)){
  echo $errmsg;
 }
?>

<input type="submit" name="button" value="登入" class="card-btn" onclick="return  Login(this.form)"/>
<!--a href="register.php">申請帳號</a-->
</form>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</body>
</html>