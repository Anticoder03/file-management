<?php
include '_Nav.php';
include './conn.php';
// Fetch uploaded files
$sql = "SELECT id, file_name, file_path, uploaded_at FROM uploads ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Files</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
        }
        .container {
            margin-top: 50px;
        }
        img {
            max-width: 100px; 
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Uploaded Files</h2>
        <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Preview</th>
                        <th>Uploaded At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <?php if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $row['file_name'])): ?>
                                    <img src="<?php echo htmlspecialchars($row['file_path']); ?>" alt="<?php echo htmlspecialchars($row['file_name']); ?>">
                                <?php else: ?>
                                    <span>No preview available</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo htmlspecialchars($row['uploaded_at']); ?></td>
                            <td>
                                <a href="<?php echo htmlspecialchars($row['file_path']); ?>" class="btn btn-primary btn-sm" download>Download</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this file?');">Delete</a>
                                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Update</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No files found.</p>
        <?php endif; ?>

        <?php $conn->close(); ?>
    </div>
   
</body>
</html>
<?php include './_Footer.php'; ?>
