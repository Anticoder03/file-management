<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1; 
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            width: 100%;
            position: sticky;
            bottom: 0;
        }
        .footer a {
            color: #ffffff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        
    </style>
</head>
<body>
    <div class="wrapper">
       <div class="filler">
       <div class="content">
        </div>
        
        <footer class="footer">
       
           <div class="container text-center">
                <p>&copy; <?php echo date("Y"); ?> My File Management System. All Rights Reserved.</p>
                <p>
                    <a href="privacy_policy.php">Privacy Policy</a> | 
                    <a href="terms_of_service.php">Terms of Service</a>
                </p>
                <p>
                    Follow us on:
                    <a href="#" class="ml-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="ml-1"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="ml-1"><i class="fab fa-instagram"></i></a>
                </p>
            </div>
         
        </footer>
       </div>
    </div>

   
</body>
</html>
