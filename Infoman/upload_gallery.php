<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $image_name = $_FILES["image"]["name"];
    $image_tmp = $_FILES["image"]["tmp_name"];
    $description = $_POST["description"];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image_name);
    move_uploaded_file($image_tmp, $target_file);

    $sql = "INSERT INTO gallery (image_url, description) VALUES ('$target_file', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>