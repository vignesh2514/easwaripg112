<?php
include 'myconn.php';
$monum=$_POST['monum'];
$oldamt=$_POST['amt'];
$newamt=$_POST['newamt'];
date_default_timezone_set("Asia/Calcutta");
$today_date=date("Y-m-d");
$timeg=date("h:i:s");
$authKey = "134249A6IlxT7kUYev585778f2";

$otp=rand(1000,9999);
//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "ESPGOP";

//Your message to send, Add URL encoding here.
$message = urlencode("
Your Request Amount:$newamt.Your OTP is :$otp.");

//Define route
$route = "4";
//Prepare you post parameters
$postData = array(
   'authkey' => $authKey,
   'mobiles' => $monum,
   'message' => $message,
   'sender' => $senderId,
   'route' => $route
);

//API URL
$url="https://control.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
   CURLOPT_URL => $url,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_POST => true,
   CURLOPT_POSTFIELDS => $postData
   //,CURLOPT_FOLLOWLOCATION => true
));
//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//get response
$output = curl_exec($ch);
  $sql = "insert into epg_mem (monum,oamt,namt,otp,cr_at,timeg) values ('$monum','$oldamt','$newamt','$otp','$today_date','$timeg')";
  $res = mysqli_query($con,$sql);
  $sqlup ="UPDATE eswaripghome SET otp='$otp' where monum='$monum'";
  $resup = mysqli_query($con,$sqlup);
mysqli_close($con);


?>
