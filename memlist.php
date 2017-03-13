<?php
include 'myconn.php';
$sql = "SELECT * FROM eswaripghome ORDER BY name";
$res = mysqli_query($con,$sql);
$result = array();
while($row = mysqli_fetch_array($res)){
array_push($result,
array('id'=>$row[0],
'roomno'=>$row[1],
'name'=>$row[2],
'monum'=>$row[3],
'amt'=>$row[7]


));
}

echo json_encode(array("result"=>$result));

mysqli_close($con);

?>
