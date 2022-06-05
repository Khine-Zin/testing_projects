<?php

function conn(){
    return mysqli_connect("127.0.0.1","root","","blog");
}

$info=array(
    "name"=>"MMS IT",
    "short_name"=>"MMS",
);
$role=["Admin","Editor","User"];

$url="https://{$_SERVER['HTTP_HOST']}/phptest/Admin_Dashboard/";

?>