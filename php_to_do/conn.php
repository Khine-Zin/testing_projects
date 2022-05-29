<?php
$conn=mysqli_connect("127.0.0.1","root","","to_do");
if(!$conn){
    echo "connection fail:".mysqli_connect_error();
}
?>