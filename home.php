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
    <title>Home</title>
    <link rel="shortcut icon" href="./images/logo-pink.png" type="image/x-icon">

    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./pages/home/home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap"
        rel="stylesheet">

    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/530c4910e5.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class='header-dark-bg'>
            <img class='header-logo' src="./images/logo.png" alt="logo" />
            <div class="header-links">
                <a class="header-link" href="./pages/news/news.php"><?php echo $Lang['header_news']; ?></a>
                <a class="header-link" href="./pages/socialmedia/socialmedia.php"><?php echo $Lang['header_social_media']; ?></a>
                <a class="header-link" href="./pages/shop/shop.php"><?php echo $Lang['header_shop']; ?></a>
                <a class="header-link" href="./pages/about/about.php    "><?php echo $Lang['header_about']; ?></a>
            </div>
            <ul class="translation">
                <li class="translation-items"><a href="home.php?lang=sk">sk</a></li>
                <li class="translation-slash">/</li>
                <li class="translation-items"><a href="home.php?lang=en">en</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class='section-greeting'>
            <p><?php echo $Lang['section_greeting_p']; ?>
                <span><?php echo $Lang['section_greeting_span']; ?></span>
            </p>
            <h1><?php echo $Lang['section_greeting_h1']; ?></h1>
            <h2><?php echo $Lang['section_greeting_p_bot']; ?></h2>
        </section>
        <section class='section-links'>
            <ul class="square-links">
                <li class="square-link">
                    <a href="./pages/news/news.php">
                        <img src="./images/home/hot-news.png" alt="hot-news">
                        <p><?php echo $Lang['square_link_1']; ?></p>
                    </a>
                </li>
                <li class="square-link">
                    <a href="./pages/shop/shop.php">
                        <img src="./images/home/our-shop.png" alt="our-shop">
                        <p><?php echo $Lang['square_link_2']; ?></p>
                    </a>
                </li>
                <li class="square-link">
                    <a href="./pages/characteristics/characteristics.php">
                        <img src="./images/home/characteristics.png" alt="characteristics">
                        <p><?php echo $Lang['square_link_3']; ?></p>
                    </a>
                </li>
                <li class="square-link">
                    <a href="./pages/services/services.php">
                        <img src="./images/home/our-services.png" alt="our-services">
                        <p><?php echo $Lang['square_link_4']; ?></p>
                    </a>
                </li>
            </ul>
        </section>
        <section class='section-introduction'>
            <h2 class="introduction-title"><?php echo $Lang['introduction_title_1']; ?></h2>
            <div class="introduction-container">
                <img src="./images/GT-Master.png" alt="">
                <p class="introduction-text"><?php echo $Lang['introduction_text_1']; ?></p>
            </div>
        </section>
        <div class="bg-city"></div>
        <section class='section-introduction'>
            <h2 class="introduction-title"><?php echo $Lang['introduction_title_2']; ?></h2>
            <p class="introduction-text"><?php echo $Lang['introduction_text_2']; ?></p>
        </section>
    </main>
    <?php 
        $CurentLang = addslashes($_SESSION['NowLang']);
        if ($CurentLang == "en") {
            include './php/components/footer.en.php';
        } else {
            include './php/components/footer.sk.php';
        }
    ?>
</body>

</html>