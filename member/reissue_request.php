<?php
require('../db/conn.php');

$id = $_GET['id'];

$roll = $_SESSION['RollNo'];

$sql = "insert into renew (RollNo,BookId) values ('$roll','$id')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
    header("Refresh:0.01; url=currently_issued.php", true, 303);
} else {
    echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header("Refresh:0.01; url=currently_issued.php", true, 303);
}
