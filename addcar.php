<?php
include "connection.php";
include "headers.php";
$json = isset($_POST["json"]) ? $_POST["json"]:"0";
$data = json_decode($json,true);
$sql = "insert into tblcars(make, model, year)
        values(:make, :model, :year)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":make", $data["make"]);
$stmt->bindParam(":model", $data["model"]);
$stmt->bindParam(":year", $data["year"]);
$stmt->execute();
echo $stmt->rowCount()>0 ? 1 :0;