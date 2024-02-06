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
$servername="localhost";
$username="root";
$password="";
$database="mydb";
//create connection
$conn=new mysqli($servername,$username,$password,$database);

//checking connection

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
else{
    echo"connected to the database <br>";
}
// selecting data from the database

//$sql= "select * from userinfo";
$sql= "select * from userinfo ORDER BY uid desc ";
//$sql= "select uid, uname from userinfo";
//$sql= "select * from userinfo where uid=1102";
$result= $conn->query($sql);

if($result->num_rows>0)
{  echo"<table>";
    echo"<tr>";
    echo"<th> USER ID</th>";
    echo"<th> NAME </th>";
    echo"<th>EMAIL </th>";
    echo"</tr>";
    
while($row= $result->fetch_assoc()){
        echo"<tr>";
        echo"<td>" .$row["uid"]."</td>";
        echo"<td>".$row["uname"]. "</td>";
        echo"<td>".$row["email"]. "</td>";
        echo"</tr>";

   //echo" id :".$row["uid"]. "Name : ".$row["uname"]. "Email: ".$row["email"]."<br>";
    }
}
else{
   echo"0 result found";
}

?>











</body>

</html>