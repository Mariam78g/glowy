<?php
$Username=$_REQUEST ['username'];
$password=$_REQUEST ['password'];
if (isset ($_POST ['btn']))
{
$host="localhost";
$user ="root";
$password="";
$db="products";
$conn = mysqli_connect ($host, $user, $Password, $db) ;
$insert= "insert into users values ('$username', '$password')";

mysqli_query ($conn, $insert);

If ($conn){
    header("Location:http://localhost/mariam%20project/mariamproj2.html");
    exit();}
    
else{
    echo("<h1 style='color:red;'> Your Registration Is Failed! </h1>");
}
}
?>