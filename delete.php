<?php
include './conn.php';

if (isset($_GET['id'])) {
    $fileId = $_GET['id'];



    // Fetch file information
    $sql = "SELECT file_path FROM uploads WHERE id = $fileId";
    $result = $conn->query($sql);
    $file = $result->fetch_assoc();

    if ($file) {
        // Delete file from server
        if (unlink($file['file_path'])) {
            // Delete record from database
            $deleteSql = "DELETE FROM uploads WHERE id = $fileId";
            $conn->query($deleteSql);
            echo "<script>alert('File deleted successfully!');</script>";
            header('location:view_files.php');

        } else {
            echo "Error deleting file.";
        }
    } else {
        echo "File not found.";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "No file ID specified.";
}
?>
