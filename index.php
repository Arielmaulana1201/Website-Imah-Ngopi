<?php
include 'conn.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imah Ngopi</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'hero.php'; ?>
    <?php include 'about.php'; ?>
    <?php include 'menu.php'; ?>
    <?php include 'gallery.php'; ?>
    <?php include 'contact.php'; ?>
    <?php include 'info.php'; ?>
    <?php include 'footer.php'; ?>



    <!-- Feather Icon -->
    <script>
        feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>

</html>