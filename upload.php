<?php
include '_Nav.php';
include './conn.php';

$targetDir = "uploads/"; // Directory to store uploaded files

// Check if the directory exists, if not, create it
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true); // Creates the directory with permissions
}

if (isset($_POST['upload'])) {
    $fileName = basename($_FILES['file']['name']);
    $targetFilePath = $targetDir . $fileName;

    // Check if file was uploaded
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
        // Escape the filename and path to prevent SQL injection
        $fileNameEscaped = $conn->real_escape_string($fileName);
        $targetFilePathEscaped = $conn->real_escape_string($targetFilePath);

        // Insert file info into the database
        $sql = "INSERT INTO uploads (file_name, file_path) VALUES ('$fileNameEscaped', '$targetFilePathEscaped')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('The file " . htmlspecialchars($fileName) . " has been uploaded successfully!');</script>";
            header('location:view_files.php');
        } else {
            echo "Database error: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "There was an error uploading your file.";
    }
}
include './_Footer.php'; ?>
