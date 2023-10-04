<?php
$name = $_POST["name"];
$age= $_POST["age"];
$address= $_POST["address"];
$telephone = $_POST["telephone"];

// 1. connect db
$host = "localhost";
$dbname = "bai_thi_php";
$dbuser = "root";
$dbpass = "root"; // Xampp: ""   Mamp: "root"

$conn = new mysqli($host,$dbuser,$dbpass,$dbname); // host user pass dbname
if($conn->connect_error){
    die("Connection refused!");
}
$sql_check = "SELECT * FROM Student WHERE name='$name' AND telephone='$telephone'";
$result_check = $conn->query($sql_check);
if ($result_check->num_rows > 0) {
    die("This student already exists");
}

$sql = "insert into Student(name,age,address,telephone) values  ('$name', '$age','$address', '$telephone')";
$conn-> query($sql);
header("Location: Students.php");