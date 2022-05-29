<?php

$conn=mysqli_connect("127.0.0.1","root","","to_do");

$tempfileArr=$_FILES['upload']['tmp_name'];
$filenameArr=$_FILES['upload']['name'];
// echo $tempfile;
$savefolder="store/";
// if(move_uploaded_file($tempfile,$savefolder.uniqid()."_".$filename){
//     header("location:index.php")
// });
foreach($filenameArr as $key=>$fn){
    $newname=$savefolder.uniqid()."_".$filenameArr[$key];
    move_uploaded_file($tempfileArr[$key],$newname);
    $sql="INSERT INTO photos(photo_link) VALUES('$newname')";
    mysqli_query($conn,$sql);
}
header("location:index.php")
?>