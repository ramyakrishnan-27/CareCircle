<?php
session_start();
include 'db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM content WHERE id = :id");
$stmt->execute(['id' => $id]);
header("Location: dashboard.php");
exit();
?>