<html>
    <head>
        <title> Select data</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <h1> USERINFO DETAILS</h1>
</div>
<?php
require "connection.php";
//$sql= "update userinfo set uname='user1' where uid=1101 ";  //update query

//delete query
$sql=" delete  from userinfo where uid=1106";

if($conn->query($sql)==TRUE)
{
    echo"record updated";
}
else{
    echo"error";
}

// $conn->close();
?>
</body>
</html>