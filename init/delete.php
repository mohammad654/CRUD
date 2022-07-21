<?php
include_once('config.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = "DELETE FROM crud WHERE id='$id'";
$stmt = $connection->prepare($query);
$stmt->execute();
echo '<body style="background-color:#fd1010;"></body>';
header("refresh:.8;../index.php");

