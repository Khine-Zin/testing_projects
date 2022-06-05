<?php

function alert($data,$color="danger"){
    return "<p class='alert alert-$color'>$data</p>";
};

function runQuery($sql){
    if(mysqli_query(conn(),$sql)){
        return true;
    }else{
        alert("Db error");
    }
};

function fetch($sql){
    $query=mysqli_query(conn(),$sql);
    $row=mysqli_fetch_assoc($query);
        return $row;
    

}

function fetchAll($sql){
    $query=mysqli_query(conn(),$sql);
    $rows=[];
    while($row=mysqli_fetch_assoc($query)){
        array_push($rows,$row);
    }
        return $rows;
    
    
}

function redirect($l){
header("location:$l");
};

function linkTo($l){
    echo "<script>location.href='$l'</script>";
}

function textfilter($text){
    $text=trim($text);
    $text=htmlentities($text,ENT_QUOTES);
    $text=stripcslashes($text);
    return $text;
}

function register(){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword){
    $spass=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO users(name,email,password) VALUES('$name','$email','$spass')";
    if(runQuery($sql)){
        redirect("login.php");
    }else{

    };
}else{
  
}

}

function countTotal($table,$condition=1){
    $sql="SELECT COUNT(id) FROM $table WHERE $condition";
    $total=fetch(($sql));
    return $total['COUNT(id)'];
}

function short($str,$length="70"){
    return substr($str,0,$length)."....";
}

function login(){
    $email=$_POST['email'];
    $password=$_POST['password'];  
    $sql="SELECT * FROM users WHERE email='$email'";
    $query=mysqli_query(conn(),$sql);
    $row=mysqli_fetch_assoc($query);

    if(!$row){
        return alert("Email or Password don't match");
    }else{
        if(!password_verify($password,$row['password'])){
            return alert("Email or Password don't match");
        }else{
            session_start();
            $_SESSION['user']=$row;
            redirect("dashboard.php");
        }
    }
};

function user($id){
    $sql="SELECT * FROM users WHERE id=$id";
    return fetch($sql);  
}

function users(){
    $sql="SELECT * FROM users";
    return fetchAll($sql);
}

function categoryAdd(){
    $title=$_POST['title'];
    $userId=$_SESSION['user']['id'];
    $sql="INSERT INTO Category(title,user_id) VALUES ('$title','$userId')";
    if(runQuery($sql)){
        linkTo("category_add.php");
    }
};

function category($id){
    $sql="SELECT * FROM Category WHERE id=$id";
    return fetch($sql);
}

function categories(){
    $sql="SELECT * FROM Category ORDER BY ordering DESC";
    return fetchAll($sql);
}

function categoryDel($id){
    $sql="DELETE FROM Category WHERE id=$id";
    return runQuery($sql);
}

function categoryUpdate(){
    $title=$_POST['title'];
    $id=$_POST['id'];
    $sql="UPDATE Category SET title='$title' WHERE id=$id";
    return runQuery($sql);
    
    
}

function categoryPin($id){
    $sql="UPDATE Category SET ordering='0'";
    mysqli_query(conn(),$sql);

    $sql="UPDATE Category SET ordering='1' WHERE id=$id";
    return runQuery($sql);
}

function categoryRemovepin(){
    $sql="UPDATE Category SET ordering='0'";
    return runQuery($sql);

}

function postAdd(){
    $title=textfilter($_POST['title']);
    $description=textfilter($_POST['description']);
    $categoryId=$_POST['category_id'];
    $userId=$_SESSION['user']['id'];
    $sql="INSERT INTO posts(title,description,category_id,user_id) VALUES ('$title','$description','$categoryId','$userId')";
    if(runQuery($sql)){
        linkTo("post_add.php");
    }
}

function post($id){
    $sql="SELECT * FROM posts WHERE id=$id";
    return fetch($sql);
}

function posts(){
    if($_SESSION['user']['role']==2){
        $current_user_id=$_SESSION['user']['id'];
        $sql="SELECT * FROM posts WHERE user_id='$current_user_id'";
    }else{
        $sql="SELECT * FROM posts ORDER BY id DESC";
    }
    
    return fetchAll($sql);
}

function postDel($id){
    $sql="DELETE FROM posts WHERE id=$id";
    return runQuery($sql);
}

function postUpdate(){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $categoryId=$_POST['category_id'];
    $userId=$_SESSION['user']['id'];
    $sql="UPDATE posts SET title='$title' , category_id='$categoryId' , description='$description' WHERE id=$id";
    return runQuery($sql);
    
    
}

function fpostByCat($category_id,$limit="9999999",$post_id=0){
    $sql="SELECT * FROM posts WHERE category_id=$category_id AND id != $post_id ORDER BY id DESC LIMIT $limit";
    return fetchAll($sql);
}

function fsearch($search_key){
    $sql="SELECT * FROM posts WHERE title LIKE '%$search_key%' OR description LIKE '%$search_key%' ORDER BY id DESC ";
    return fetchAll($sql);
}

function ads(){
    $sql="SELECT * FROM ads";
    return fetchAll($sql);

}

