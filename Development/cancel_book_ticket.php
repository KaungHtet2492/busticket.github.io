<?php
include "configure.php";
$tid = $_GET['id'];
$sql = 'DELETE FROM booking_ticket WHERE tid=?';
$stmt = $connection->prepare($sql);
$stmt->execute([$tid]);
header("Location: look_book_ticket.php");

?>