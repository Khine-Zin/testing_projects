<?php   

header("Content-Type:application/json; charset=UFT-8");

require_once "../core/base.php";
require_once "../core/function.php";

$sql="SELECT * FROM posts WHERE 1";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql  .= " AND id=$id";
}

if(isset($_GET['limit'])){
    $limit=$_GET['limit'];
    $sql  .= " LIMIT $limit";
}

if(isset($_GET['offset'])){
    $offset=$_GET['offset'];
    $sql  .= " OFFSET $offset";
}

// die($sql);
$rows=[];
$query=mysqli_query(conn(),$sql);
while($row=mysqli_fetch_assoc($query)){
    $arr=[
        "id"=> $row['id'],
        "title"=> $row['title'],
        "description"=> $row['description'],
    ];
    array_push($rows,$arr);
}

apiOutput($rows);

?>