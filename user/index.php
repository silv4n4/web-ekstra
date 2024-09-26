<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ekstrakurikuler</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6482AD;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #abebc6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #34495e; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #e9ecef;
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            transition: background 0.3s;
        }
        li:hover {
            background: #E2DAD6;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #85929e;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        a:hover {
            background-color: #5f6a6a ;
        }
        img {
            display: block;
            margin: 0 auto 20px; /* Center the image and add bottom margin */
            max-width: 100%; /* Make sure the image is responsive */
            height: auto; /* Maintain aspect ratio */
        }
</style>
</head>
<body>
<div class="container">
        <img src="../uploads/foto1.png" alt="SMK N 3 Yogyakarta"> <!-- Replace with your image path -->
        <h1>Selamat Datang Di SMK N 3 Yogyakarta</h1>
        <a href="daftar.php">Daftar Ekstrakurikuler</a>
        <a href="info.php">Tentang Ekstrakurikuler</a>
</div>
</body>
</html>
