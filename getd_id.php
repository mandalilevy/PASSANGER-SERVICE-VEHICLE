<?php

$connection = mysqli_connect("localhost", "root", "", "vehicle");

$sql = "SELECT * FROM assign";
$result = mysqli_query($connection, $sql);

$data = array();

while ($row = mysqli_fetch_object($result))
    array_push($data, $row);

echo json_encode($data);
?>