<?php 
 include("../../../conn.php");


extract($_POST);

$selExamineeFullname = $conn->query("SELECT * FROM faculty_acc WHERE faculty_fullname='$fullname' ");
$selExamineeEmail = $conn->query("SELECT * FROM faculty_acc WHERE faculty_user='$email' ");


if($gender == "0")
{
  $res = array("res" => "noGender");
}
else if($course == "0")
{
  $res = array("res" => "noCourse");
}
else if($year_level == "0")
{
  $res = array("res" => "noLevel");
}
else if($selExamineeFullname->rowCount() > 0)
{
  $res = array("res" => "fullnameExist", "msg" => $fullname);
}
else if($selExamineeEmail->rowCount() > 0)
{
  $res = array("res" => "emailExist", "msg" => $email);
}
else
{
  $insData = $conn->query("INSERT INTO faculty_acc(faculty_fullname,faculty_course,faculty_gender,faculty_birthdate,faculty_year_level,faculty_user,faculty_pass) VALUES('$fullname','$course','$gender','$bdate','$year_level','$email','$password')  ");
  if($insData)
  {
    $res = array("res" => "success", "msg" => $email);
  }
  else
  {
    $res = array("res" => "failed");
  }
}


echo json_encode($res);
 ?>