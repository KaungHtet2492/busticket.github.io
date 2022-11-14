<?php
include "configure.php";
$pid = $_GET['id'];
$sql = 'DELETE FROM payment WHERE pid=?';
$stmt = $connection->prepare($sql);
$stmt->execute([$pid]);
header("Location: admin_payment.php");

?>