<?php
$con = mysqli_connect("localhost", "root", "", "dbmhs");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Membersihkan dan menghindari SQL Injection
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('$firstname', '$lastname', '$age')";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

echo "1 record added";

mysqli_close($con);
?>
