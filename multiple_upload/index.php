<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
.show_photo img{
    width: 100px;
    height: 100px;
}


</style>
</head>
<body>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <label>Multiple Upload</label>
        <br>
        <br>
        <input type="file" name="upload[]" multiple>
        <button>Upload</button>
        <div class="show_photo">
            <?php
$conn=mysqli_connect("127.0.0.1","root","","to_do");
$sql="SELECT * FROM photos";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query)){

            ?>
            <img src="<?php echo $row['photo_link'] ?>">
         
            <a href="delete.php?id=<?php echo $row['id'] ?>" >Delete</a>
            <?php
             } 
            ?>
       
</div>
</form>
</body>
</html>