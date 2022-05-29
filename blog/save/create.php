
<?php

require_once "conn.php";

if(isset($_GET['addBtn'])){
    
$title=$_GET['title'];
$sql="INSERT INTO news(title) VALUES('$title')";
if(mysqli_query($conn,$sql)){
    header("location:create.php");
}else{
    echo "fail";
}
}


?>
<?php include "nav.php"
?>

<form action="get">

<input type="text" name="title" required>
<button name="addBtn">add</button>

</form>