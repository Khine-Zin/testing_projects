<?php
require_once "core/auth.php";
require_once "core/base.php";
require_once "core/function.php";


if(categoryRemovepin()){
    linkTo("category_add.php");
}

?>
    
