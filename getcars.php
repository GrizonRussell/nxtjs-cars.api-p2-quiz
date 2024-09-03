<?php
include "connection.php";
include "headers.php";
$sql = "select * from tblcars";
$stmt = $conn->prepare($sql);
$stmt->execute();
echo $stmt->rowCount() > 0 ? json_encode($stmt->fetchAll(PDO::FETCH_ASSOC)):0;