<?php
$servername="localhost";
$username="root";
$password="";
$database="myDB";

//create connection
$conn= new mysqli($servername,$username,$password,$database);
//checking connection
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
else{
    echo" Connected Successfully";
}

// //CREATE TABLE

// $sql= "create table Userinfo(uid int, uname varchar(30),email varchar(30))";
// if($conn->query($sql)===TRUE)
//  {
//     echo"Table userinfo created Successfully";
//  }
//  else{
//     echo" error creating table : ".$conn->error;
//  }





// //Create Database
//  $sql="create database myDB";
// //Checking
// if($conn->query($sql)===TRUE)
//  {
//     echo"Database myDB created Successfully";
//  }
//  else{
//     echo" error creating database : ".$conn->error;
//  }

 //$conn->close();

?>