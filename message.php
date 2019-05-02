<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言區</title>
</head>

<!-- //action="message.php" 將資料送入message.php 也可使用$_SERVER['PHP_SELF'] //method="post" 方式  -->
<form action="message.php" method="post">
暱稱: <input type="text" name="guestName"><br>
信箱: <input type="text" name="guestEmail"><br>
性別: <input type="radio" name="guestGender" id="radio" value="男" /> 男
	<input type="radio" name="guestGender" id="radio2" value="女" />女<br>
留言主題: <input type="text" name="guestSubject"><br>
留言內容:<textarea name="guestContent" rows="2" cols="20"> </textarea><br>
<input type="submit" value="送出" >
</form>

<?php
require("login.php");//引入外部php 用來登入SQL

// 抓取所有從post.php鍵入的資料
if(isset($_POST["guestName"])){
$guestName=$_POST['guestName'];
$guestEmail=$_POST['guestEmail'];
$guestGender=$_POST['guestGender'];
$guestSubject=$_POST['guestSubject'];
$guestContent=$_POST['guestContent'];
date_default_timezone_set("Asia/Taipei");
$guestTime = date("Y:m:d H:i:s",time());
}

/*已不使用的語法
mysql_query("insert into guest value('','$guestName','$guestEmail','$guestGender','$guestSubject','guestTime','$guestContent','','')"); */


//如果guestName不為空，那麼存入資料庫
if(isset($guestName)){
mysqli_query($conn,"insert into guest values ('','$guestName','$guestEmail','$guestGender','$guestSubject','$guestTime','$guestContent')");
header("location:show.php"); //導向show頁面
}
?>

</body>
</html>