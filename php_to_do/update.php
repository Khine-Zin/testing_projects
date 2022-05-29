<?php

require_once "conn.php";
$id=$_GET['id'];

$sql="SELECT * FROM news WHERE id=$id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
if(isset($_GET['updateBtn'])){
    
    $title=$_GET['title'];
    $id=$_GET['id'];
    $sql="UPDATE news SET title='$title' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header("location:create.php");
    }else{
        echo "fail";
    }
    }
    

?>
<form action="get">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
<input type="text" name="title" value="<?php echo $row['title'] ?>" required>
<button name="updateBtn">update</button>

</form>