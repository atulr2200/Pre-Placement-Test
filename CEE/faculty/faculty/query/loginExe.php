<?php 
session_start();
 include("../../../conn.php");
 

extract($_POST);

$selAcc = $conn->query("SELECT * FROM faculty_acc WHERE faculty_user='$username' AND faculty_pass='$pass'  ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if($selAcc->rowCount() > 0)
{
  $_SESSION['faculty'] = array(
  	 'faculty_id' => $selAccRow['faculty_id'],
  	 'adminnakalogin' => true
  );
  $res = array("res" => "success");

}
else
{
  $res = array("res" => "invalid");
}




 echo json_encode($res);
 ?>