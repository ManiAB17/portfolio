<?php
include "../db.php";

if(isset($_POST['upload'])){

    $resume = $_FILES['resume']['name'];
    $tmp = $_FILES['resume']['tmp_name'];

    $folder = "../uploads/resume/";

    if(!is_dir($folder)){
        mkdir($folder, 0777, true);
    }

    $newName = time() . "_" . $resume;

    if(move_uploaded_file($tmp, $folder . $newName)){
        mysqli_query($conn, "INSERT INTO tbl_resume (resume_file) VALUES ('$newName')");
        echo "<script>alert('Resume Uploaded Successfully');</script>";
    } else {
        echo "<script>alert('Upload Failed');</script>";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
  <h3>Upload Resume</h3>
  <input type="file" name="resume" required class="form-control mb-3">
  <button type="submit" name="upload" class="btn btn-primary">Upload</button>
</form>
