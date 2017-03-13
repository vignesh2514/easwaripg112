<?php
include 'myconn.php';
$monum=$_POST['monum'];
$newamt=$_POST['amtng'];
$otp=$_POST['otp'];
$result = array();
$sql = "SELECT oamt FROM  epg_mem WHERE monum='$monum' AND otp='$otp'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);
$result2 = mysqli_query($con,"SELECT * FROM  eswaripghome WHERE monum='$monum' AND otp='$otp'") or die(mysql_error());
$no_of_rows=mysqli_num_rows($result2);
$idca=$row['oamt'];

$medica=$newamt+$idca;

if($no_of_rows>0)
{
  echo "success";
s
  $sqlup ="UPDATE eswaripghome SET amt='$medica' where monum='$monum' AND otp='$otp'";
  $resup = mysqli_query($con,$sqlup);
  $sqlmn ="UPDATE epg_mem SET oamt='$medica',passme='1' where monum='$monum' AND otp='$otp'";
  $resup = mysqli_query($con,$sqlmn);

}
else {
echo "failure";
}
mysqli_close($con);

?>
