<?php
 $db_hostname="localhost";
 $db_username="root";
 $db_password="";
 $db_name="users";
  $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
  if(!$conn){
    echo "connection failed" .mysqli_connect_error();
    exit;
  }
  $email=$_POST["email"];
  $sql="SELECT * FROM usersdetails WHERE email='$email'";
  $result=mysqli_query($conn,$sql);
  if(!$result)
  {
    echo "Query failed ".mysqli_error($conn);
    exit;
  }
  $user=mysqli_fetch_assoc($result);

  $password=$_POST["password"];
  $sql2="SELECT * FROM usersdetails WHERE password='$password'";
  $result2=mysqli_query($conn,$sql2);
  if(!$result2)
  {
    echo "Query failed:".mysqli_error($conn);
  }
  $user2=mysqli_fetch_assoc($result2);
  if($user && $user2)
  {
    echo "your login is successfully completed";
    header("Location:home.html");
  }
  else{
   echo '<script>alert("invalid")</script>';
   
  }
  mysqli_close($conn);

?>