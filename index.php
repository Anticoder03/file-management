<?php include '_Nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero {
            background-color: #007bff;
            color: white;
            padding: 100px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1>Welcome to the File Management System</h1>
        <p>Effortlessly upload and manage your files in one place.</p>
        <a href="upload_form.php" class="btn btn-light btn-lg"><i class="fas fa-upload"></i> Upload File</a>
        <a href="view_files.php" class="btn btn-outline-light btn-lg"><i class="fas fa-file-alt"></i> View Uploaded Files</a>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">Features</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-cloud-upload-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Easy Uploads</h5>
                        <p class="card-text">Quickly upload your files with a user-friendly interface.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-file-invoice fa-3x mb-3"></i>
                        <h5 class="card-title">Manage Files</h5>
                        <p class="card-text">View, update, and delete your uploaded files at any time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Secure Storage</h5>
                        <p class="card-text">Your files are stored securely and are easily accessible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>
<?php include './_Footer.php'; ?>