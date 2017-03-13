<?php
include 'myconn.php';
$roomno=$_POST['rn'];
$name=$_POST['na'];
$monum=$_POST['mn'];
$cre_at=$_POST['ca'];

date_default_timezone_set("Asia/Calcutta");
$today_date=date("Y-m-d");
$sql = "insert into eswaripghome (roomno,name,monum,created_at) values ('$roomno','$name','$monum','$today_date')";
$res = mysqli_query($con,$sql);
mysqli_close($con);

?>
