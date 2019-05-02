<?php
/*已不使用的語法
mysqli_connect("127.0.0.1/phpmyadmin","root","123456"); //連結資料庫
mysql_select_db("contact"); //選擇留言板資料庫
mysql_query("set names utf8"); //用utf8讀取資料 */

$conn = mysqli_connect("localhost","root","","contact");
mysqli_query($conn, 'SET NAMES utf8');
?>