<?php include '_Nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .upload-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        .file-input {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h2 class="text-center">Upload a File</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group file-input">
                <input type="file" name="file" class="form-control-file" required>
            </div>
            <button type="submit" name="upload" class="btn btn-primary btn-block">Upload</button>
        </form>
    </div>

   
</body>
</html>
<?php include './_Footer.php'; ?>
