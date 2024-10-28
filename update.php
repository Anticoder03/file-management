<?php
include '_Nav.php';
include './conn.php';

// Check if an ID is provided in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch the existing file information from the database
    $sql = "SELECT file_name, file_path FROM uploads WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $oldFileName = $row['file_name'];
        $oldFilePath = $row['file_path'];
    } else {
        echo "File not found.";
        exit;
    }
} else {
    echo "No file specified.";
    exit;
}

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a file has been uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $newFileName = basename($_FILES['file']['name']);
        $targetDir = "uploads/";
        $targetFilePath = $targetDir . $newFileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            // Update the database with the new file information
            $sql = "UPDATE uploads SET file_name = '$newFileName', file_path = '$targetFilePath' WHERE id = $id";

            if ($conn->query($sql) === TRUE) {
                // Delete the old file from the server
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
                echo "<div class='alert alert-success'>The file has been updated successfully!</div>";
            } else {
                echo "<div class='alert alert-danger'>Database error: " . $conn->error . "</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>There was an error uploading your file.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>No file uploaded or there was an upload error.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update File</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Update File</h2>
        <div class="alert alert-info">
            Current File: <strong><?php echo htmlspecialchars($oldFileName); ?></strong>
        </div>
        <form action="update.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Select New File</label>
                <input type="file" name="file" class="form-control-file" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update File</button>
        </form>
        <div class="mt-3">
            <a href="view_files.php" class="btn btn-secondary">Back to Uploaded Files</a>
        </div>
    </div>

   
</body>
</html>
<?php include './_Footer.php'; ?>
