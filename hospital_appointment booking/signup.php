<?php
$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="users";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn)
{
    echo "connection filed".mysqli_connect_error();
    exit;
}
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];
$sql="INSERT INTO `usersdetails`(`FirstName`, `LastName`, `email`, `password`, `number`) VALUES ('$fname','$lname','$email','$password','$number')";
if(mysqli_query($conn,$sql))
{
   echo '<script>alert("you signup is done")</script>';
     header("Location:login.html");
   
}
mysqli_close($conn);

?>