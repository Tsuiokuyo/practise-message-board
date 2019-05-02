<title>留言版</title>
<?php
//連到資料庫
require("login.php");
//從guest全選資料並由dest新到舊order by排序
$data = mysqli_query($conn,"SELECT * FROM guest order by guestTime desc");

?>
<body>
<?php
//如果資料庫返回的留言數大於現在的表格 那麼產生一個表格
for($i=1;$i<mysqli_num_rows($data);$i++){
	$rs=mysqli_fetch_assoc($data);
?>
<hr>
 <table>
            <tr>
              <td><?php echo $rs['guestSubject']?></td>
            </tr>
            <tr>
              <td>暱稱</td>
              <td><?php echo $rs['guestName']?></td>
            </tr>
            <tr>
              <td>信箱</td>
              <td><?php echo $rs['guestEmail']?></td>
            </tr>
            <tr>
              <td>性別</td>
              <td><?php echo $rs['guestGender']?></td>
            </tr>
            <tr>
              <td>留言內容</td>
              <td><?php echo $rs['guestContent']?></td>
            </tr>
        </table>
<div align=right><?php echo $rs['guestTime']?></div>
<?php
}
?>