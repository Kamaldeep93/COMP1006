<?php

 include "connection.php";
 $id=$_POST['id'];
    $name=$_POST['name'];
   $email=$_POST['email'];

   //validate user name
   if(empty($name))
   {
    echo"Name is required";
   }
    elseif(!preg_match("/^[a-zA-Z]*$/",$name))
    {
        echo"Only alpahbets and whitespaces are allowed";
    }

   else{
    $sql= "INSERT INTO userinfo(uid,uname,email )VALUES('$id','$name','$email')";
    if($conn->query($sql)===True)
    {
        echo"Record inserted successfully";
     }
     else{
        echo"Error".$sql."<br>".$conn->error;
     }
    
}
   





?>