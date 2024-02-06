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
    $id = $_POST['uid'];
      $name = $_POST['uname'];  
      $email= $_POST['email']; 
         
      $sql="insert into userinfo values('$id','$name','$email')";

      if($conn->query($sql)===TRUE)
      {
        echo"records inserted";
      }
      else{
        echo"error: ".$sql. "<br>".$conn->error;
      }

      $conn->close();
 ?>
        