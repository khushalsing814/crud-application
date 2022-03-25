<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$database="records";

$conn= mysqli_connect($servername,$username,$password,$database,);
if($conn){
    echo 
    "";
}
else{
    echo "<font color:red>('Failed')
    </font>";
}

 $us= $_POST['user'];
 $em= $_POST['email'];
 $gn= $_POST['gen'];
 $ln= implode(",",$_POST['lang']);          //array to string
 $filename = $_FILES['uploadfile']['name'];
 $tempname = $_FILES['uploadfile']['temp_name'];
 $folder="images/".$filename;
 move_uploaded_file($tempname,$folder);
 $pass= $_POST['password'];
$sql="INSERT INTO students_id (Username,Email,Gender,Languages,postimage,userpswd) VALUES ('$us','$em','$gn','$ln','$folder','$pass')";
$result= mysqli_query($conn, $sql);
if($result){
    echo "Data Send in Database Successfully";
}else{
    echo "fail";
}
?>