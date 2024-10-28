<?php include '_Nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .terms-header {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
        }
        .terms-content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header class="terms-header text-center">
        <h1>Terms of Service</h1>
        <p class="lead">Last updated: <?php echo date("F j, Y"); ?></p>
    </header>

    <div class="container terms-content">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">1. Acceptance of Terms</h5>
                <p class="card-text">By using our service, you agree to comply with and be bound by these Terms of Service. If you do not agree, you should not use our service.</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">2. Modifications to Terms</h5>
                <p class="card-text">We may revise these terms from time to time. Changes will be effective immediately upon posting on this page. Your continued use of the service constitutes acceptance of the new terms.</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">3. User Responsibilities</h5>
                <p class="card-text">Users are responsible for the content they upload and must ensure they have the rights to use and share such content. You agree not to use the service for illegal activities.</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">4. Intellectual Property</h5>
                <p class="card-text">All content provided through our service is owned by us or our licensors. You may not reproduce or distribute any content without our prior written consent.</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">5. Limitation of Liability</h5>
                <p class="card-text">We will not be liable for any direct, indirect, incidental, special, or consequential damages arising from the use of the service.</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">6. Governing Law</h5>
                <p class="card-text">These Terms of Service shall be governed by the laws of [Your Country/State].</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">7. Contact Information</h5>
                <p class="card-text">If you have any questions about these Terms, please contact us at <a href="mailto:support@example.com">support@example.com</a>.</p>
            </div>
        </div>
    </div>

    <?php include '_Footer.php'; ?>

   
</body>
</html>
