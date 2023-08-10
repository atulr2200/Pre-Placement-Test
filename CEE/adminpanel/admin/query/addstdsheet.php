<?php
use SimpleExcel\SimpleExcel;

if(isset($_POST['import'])){

if(move_uploaded_file($_FILES['excel_file']['tmp_name'],$_FILES['excel_file']['name'])){
    require_once('SimpleExcel/SimpleExcel.php'); 
    
    $excel = new SimpleExcel('csv');                  
    
    $excel->parser->loadFile($_FILES['excel_file']['name']);           
    
    $foo = $excel->parser->getField(); 

    $count = 1;
    $db = mysqli_connect('localhost:3366','root','','cee_db2');

    while(count($foo)>$count){
        $fullname = $foo[$count][0];
        $course = $foo[$count][1];
        $gender = $foo[$count][2];
        $bdate = $foo[$count][3];
        $year_level = $foo[$count][4];
        $email = $foo[$count][5];
        $password = $foo[$count][6];
        

        $query = "INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,exmne_password) VALUES('$fullname','$course','$gender','$bdate','$year_level','$email','$password')  ");
        mysqli_query($db,$query);
        $count++;
    }

    echo "<script>window.location.href='upload_sheet.php';</script>";
               
    
    
               
    
    
  }
       
?>