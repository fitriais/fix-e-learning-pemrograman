<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIFYCODE Learning</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Montserrat", sans-serif;
            background-color: #092635;
        }

        .navbar {
            padding: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgba(9, 38, 53, 0.5);
            backdrop-filter: blur(10px);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .navbar:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .navbar.zoom-in {
            transform: scale(1.05);
        }

        .navbar.zoom-out {
            transform: scale(1) translateY(-10px);
        }

        .navbar-brand img {
            max-width: 200px;
        }

        .navbar-nav .nav-link {
            padding: 8px 15px;
        }

        footer {
            background-color: #092635;
            color: white;
            padding: 20px;
        }

        .social-icons a img {
            width: 30px;
            margin-right: 10px;
        }

        .sticky-header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>

</head>

<body>
    <header class="sticky-header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/new-logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="product-login.php">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="progress.php">Progress</a></li>
                        <li class="nav-item"><a class="nav-link" href="daily-coding.php">Daily Coding</a></li>
                        <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="content">