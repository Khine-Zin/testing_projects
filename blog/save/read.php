<?php

require_once "conn.php";
$sql="SELECT * FROM news";
$query=mysqli_query($conn,$sql);
include "nav.php";
// print_r($query);
while($row=mysqli_fetch_assoc($query)){
    echo "<li>{$row['title']} [<a href='delete.php?id={$row['id']}'>delete</a>] [<a href='update.php?id={$row['id']}'>update</a>]</li>";
}

?>