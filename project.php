<?php
$dbhost ="localhost";
$dbuser="root";
$dbname="elmenshawy";

if (!$con= mysqli_connect($dbhost , $dbuser ,$dbname)){
    die ("Failed to cnnect");
}

session_start();
include("connection.php");
include("functions.php");

if($_server["REQUEST_METHOD"]=="post")
{
    $name =$post['name'];
    $id=$post['id']
    $age= $post['age']
    $gender =$_POST['gender'];
    if (!empty($name) && !empty($id) && !empty($age) && !empty($gender))
    {
        $query = "insert into users(Name , Id ,Age , Gender) values ('$name' , '$id', '$age','$gender')";

        mysqli_query($con,  $query);

        header("location :project3.html" );
        die;
    }
    else
    {
        echo"ارجو إدخال المعلومات بشكل صحيح";
    }
}
?>