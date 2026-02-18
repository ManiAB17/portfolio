<?php
include "db.php"; // change based on your connection file

$query = mysqli_query($conn, "SELECT resume_file FROM tbl_resume ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_assoc($query);

if (!$data || empty($data['resume_file'])) {
    echo "<h3>Resume not uploaded yet!</h3>";
    exit;
}

$filePath = "uploads/resume/" . $data['resume_file'];

if (!file_exists($filePath)) {
    echo "<h3>Resume file not found!</h3>";
    exit;
}

header("Content-Type: application/pdf");
header("Content-Disposition: attachment; filename=Manikandan_Resume.pdf");
readfile($filePath);
exit;
?>
