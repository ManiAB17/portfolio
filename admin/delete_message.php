<?php
session_start();
include "../db.php";

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);

    mysqli_query($conn, "DELETE FROM contact_messages WHERE id='$id'");

    header("Location: dashboard.php");
    exit();
}
?>
