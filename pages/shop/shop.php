<?php
@session_start();
$LangArray = array("en", "sk");
$DefaultLang = "en";
if (@$_SESSION['NowLang']) {
    if (!in_array($_SESSION['NowLang'], $LangArray)) {
        $_SESSION['NowLang'] = $DefaultLang;
    }
} else {
    $_SESSION['NowLang'] = $DefaultLang;
}
if (isset($_GET['lang'])) {
    $language = addslashes($_GET['lang']);
    if ($language) {
        if (!in_array($language, $LangArray)) {
            $_SESSION['NowLang'] = $DefaultLang;
        } else {
            $_SESSION['NowLang'] = $language;
        }
    }
}
$CurentLang = addslashes($_SESSION['NowLang']);
include_once("php/lang/lang." . $CurentLang . ".php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="shortcut icon" href="../../images/logo-pink.png" type="image/x-icon">

    <link rel="stylesheet" href="../../styles/reset.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link rel="stylesheet" href="../../styles/button.css">
    <link rel="stylesheet" href="./shop.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/530c4910e5.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class='header-dark-bg'>
            <a href="../../home.php">
                <img class='header-logo' src="../../images/logo.png" alt="logo" />
            </a>
            <div class="header-links">
                <a class="header-link" href="../services/services.php"><?php echo $Lang['header_services']; ?></a>
                <a class="header-link" href="../news/news.php"><?php echo $Lang['header_news']; ?></a>
                <a class="header-link" href="../socialmedia/socialmedia.php"><?php echo $Lang['header_social_media']; ?></a>
                <a class="header-link header-active-page"><?php echo $Lang['header_shop']; ?></a>
                <a class="header-link" href="../about/about.php"><?php echo $Lang['header_about']; ?></a>
            </div>
            <ul class="translation">
                <li class="translation-items"><a href="shop.php?lang=sk">sk</a></li>
                <li class="translation-slash">/</li>
                <li class="translation-items"><a href="shop.php?lang=en">en</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class="first-section">
            <img src="../../images/GT-Master.png" alt="phone-photo">
            <div>
                <h1><?php echo $Lang['shop_h1']; ?></h1>
                <h2><?php echo $Lang['shop_h2']; ?> <a href="../characteristics/characteristics.php"><?php echo $Lang['shop_a']; ?></a></h2>
                <!-- <button class='btn btn-border-4'>Buy Online</button> -->
                <a href="#" class="animated-button1">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <?php echo $Lang['shop_btn_buy']; ?>
                </a>
            </div>
        </section>
    </main>
    <footer>
        <section class="section-footer-links">
            <ul>
                <p><a href="../services/services.php">Support</a></p>
                <li><a href="../services/services.php">FAQ</a></li>
                <li><a href="../services/services.php">Troubleshooting</a></li>
                <li><a href="../services/services.php">EU Declaration</a></li>
            </ul>
            <ul>
                <p><a href="../about/about.php">About realme</a></p>
                <li><a href="../about/about.php">History</a></li>
                <li><a href="../about/about.php">Activities</a></li>
                <li><a href="../about/about.php">First Smartphone</a></li>
            </ul>
            <ul>
                <p><a href="../services/services.php">Services</a></p>
                <li><a href="../services/services.php">Phones</a></li>
                <li><a href="../services/services.php">Online Support</a></li>
                <li><a href="../services/services.php">Devices</a></li>
                <li><a href="../services/services.php">Realme TV</a></li>
            </ul>
            <ul>
                <p>Contact Realme</p>
                <li><a href="mailto:autor@example.com">global@realme.com</a></li>
            </ul>
            <div>
                <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a target="_blank" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </section>
        <hr />
        <p class='footer-c'>© 2018-2022 realme. All Rights Reserved.</p>
    </footer>


</body>

</html>