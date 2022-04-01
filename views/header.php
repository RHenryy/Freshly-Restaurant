<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restaurant Fresh</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <link rel="stylesheet" href="../css/slick.css" type="text/css" />
    <link rel="stylesheet" href="../css/slick-theme.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@400;500;700&family=Merienda:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/82b9f37ffc.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="wrapper">

        <div class="flex"><a href="home.php"><img src="../img/logo.png" alt="logo"></a>
            <h1>Freshly Restaurant</h1>
        </div>
        <nav>
            <ul>
                <li><a <?php if (basename($_SERVER['REQUEST_URI']) == "home.php" || basename($_SERVER['REQUEST_URI']) == "8-Restaurant") {
                            echo "class='active'";
                        } ?> href="home.php">Home</a></li>
                <li><a <?php if (basename($_SERVER['REQUEST_URI']) == "about.php") {
                            echo "class='active'";
                        } ?> href="about.php">About</a></li>
                <li><a <?php if (basename($_SERVER['REQUEST_URI']) == "menu.php") {
                            echo "class='active'";
                        } ?> href="menu.php">Menus</a></li>
                <li><a <?php if (basename($_SERVER['REQUEST_URI']) == "contact.php") {
                            echo "class='active'";
                        } ?> href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>