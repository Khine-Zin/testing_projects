<?php

require_once "core/conn.php";
$id = $_GET['id'];
$sql="DELETE FROM news WHERE id=$id";
if(!mysqli_query($conn,$sql)){
    echo "delete fail:".mysqli_error();
}else{
    header("location:item_list.php");

}



?>
    
