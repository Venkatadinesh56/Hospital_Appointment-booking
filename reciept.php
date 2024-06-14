<?php
$date = $_POST['date'];
$time = $_POST['time'];
$pname = $_POST['pname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$d = $_POST['doctname'];
$ds = $_POST['doctsp'];
$hospital = $_POST['hosn'];
$pnum=$_POST['pnum'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        #container {
            margin: 50px auto;
            padding: 20px;
            width: 400px;
            background-color: #fff;
            border: 2px solid #3498db;
            border-radius: 5px;
        }

        h1 {
            color: #3498db;
            text-align: center;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div id="container">
        <h1>Receipt</h1>
        <table>
            <tr>
                <td><strong>Hospital:</strong></td>
                <td><?php echo $hospital ?></td>
            </tr>
            <tr>
                <td><strong>Doctor Name:</strong></td>
                <td><?php echo $d ?></td>
            </tr>
            <tr>
                <td><strong>Specialization:</strong></td>
                <td><?php echo $ds ?></td>
            </tr>
            <tr>
                <td><strong>Appointment Date:</strong></td>
                <td><?php echo $date ?></td>
            </tr>
            <tr>
                <td><strong>Appointment Time:</strong></td>
                <td><?php echo $time ?></td>
            </tr>
            <tr>
                <td><strong>Fee:</strong></td>
                <td>$400</td>
            </tr>
            
            <tr>
                <td><strong>Patient Name:</strong></td>
                <td><?php echo $pname ?></td>
            </tr>
              <tr>
                <td><strong>Mobile Number:</strong></td>
                <td><?php echo $pnum ?></td>
            </tr>
            <tr>
                <td><strong>Gender:</strong></td>
                <td><?php echo $gender ?></td>
            </tr>
            <tr>
                <td><strong>Age:</strong></td>
                <td><?php echo $age ?></td>
            </tr>
        </table>
        <button onclick="window.print()">Print</button>
    </div>
</body>

</html>

<?php


$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "users";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "connection failed:" . mysqli_connect_error();
    exit;
}

$date = $_POST['date'];
$time = $_POST['time'];
$pname = $_POST['pname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$d = $_POST['doctname'];
$ds = $_POST['doctsp'];
$hospital = $_POST['hosn'];
$pnum=$_POST['pnum'];

if($hospital=="Birds Hospital"){
$sql="INSERT INTO `birdshospital`(`Doctor_name`, `Appointment_date`, `Appointment_Time`, `Patient_name`, `Mobile_number`, `Gender`, `Age`) VALUES ('$d','$date','$time','$pname','$pnum','$gender','$age')";

}
else if($hospital=="Aravind Eye Hospital"){
    
   $sql="INSERT INTO `aravind_hospital`(`Doctor_name`, `Appointment_date`, `Appointment_Time`, `Patient_name`, `Mobile_number`, `Gender`, `Age`) VALUES ('$d','$date','$time','$pname','$pnum','$gender','$age')";


}
else if($hospital=="SVIMS Hospital"){
      $sql="INSERT INTO `svims_hospital`(`Doctor_name`, `Appointment_date`, `Appointment_Time`, `Patient_name`, `Mobile_number`, `Gender`, `Age`) VALUES ('$d','$date','$time','$pname','$pnum','$gender','$age')";

}
else if($hospital=="Sankalpa Hospital")
{
          $sql="INSERT INTO `sankalpa_hospital`(`Doctor_name`, `Appointment_date`, `Appointment_Time`, `Patient_name`, `Mobile_number`, `Gender`, `Age`) VALUES ('$d','$date','$time','$pname','$pnum','$gender','$age')";

}
else if($hospital=="Aster Hospital")
{
    $sql="INSERT INTO `aster_hospital`(`Doctor_name`, `Appointment_date`, `Appointment_Time`, `Patient_name`, `Mobile_number`, `Gender`, `Age`) VALUES ('$d','$date','$time','$pname','$pnum','$gender','$age')";

}
else{
     echo '<script> alert("your appointment is not booked")</script>';
}


if(mysqli_query($conn,$sql))
{
    echo '<script> alert(" your appointment is cofirmed")</script>';
}
else{
    echo '<script> alert("your appointment is not booked")</script>';
}
mysqli_close($conn);
?>


