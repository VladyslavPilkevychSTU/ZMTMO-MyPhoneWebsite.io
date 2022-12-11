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
    <title>News</title>
    <link rel="shortcut icon" href="../../images/logo-pink.png" type="image/x-icon">

    <link rel="stylesheet" href="../../styles/reset.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link rel="stylesheet" href="./news.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">

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
                <a class="header-link header-active-page"><?php echo $Lang['header_news']; ?></a>
                <a class="header-link" href="../socialmedia/socialmedia.php"><?php echo $Lang['header_social_media']; ?></a>
                <a class="header-link" href="../shop/shop.php"><?php echo $Lang['header_shop']; ?></a>
                <a class="header-link" href="../about/about.php"><?php echo $Lang['header_about']; ?></a>
            </div>
            <ul class="translation">
                <li class="translation-items"><a href="news.php?lang=sk">sk</a></li>
                <li class="translation-slash">/</li>
                <li class="translation-items"><a href="news.php?lang=en">en</a></li>
            </ul>
        </div>
    </header>
    <main>

        <section class='section-head'>
            <div class='head-flex'>
                <img src="../../images/news/headerImg.png" alt="phone-img">
                <h1>The S23 Ultra selfie camera primed for an upgrade</h1>
            </div>
            <div class="head-flex-news">
                <div class="head-news-content">
                    <img src="../../images/news/headimg1.png" alt="new1">
                    <h2>The iPhone 14 Plus flops! Why Apple made a mistake with its iPhone 14 lineup</h2>
                    <h3>Dzhoro Ivanov</h3>
                </div>
                <div class="head-news-content">
                    <img src="../../images/news/headimg2.png" alt="new1">
                    <h2>Best Buy Black Friday 2022 deals: hot offers on Sony phones, Galaxy Tab S8 Ultra, and more</h2>
                    <h3>Iskra Petrova</h3>
                </div>
                <div class="head-news-content">
                    <img src="../../images/news/headimg3.png" alt="new1">
                    <h2>Blind camera comparison with Pixel 7 Pro. Hot offers on phones...</h2>
                    <h3>Peter Kostadinov</h3>
                </div>
            </div>
        </section>

        <h2 class="h2-bn"><?php echo $Lang['news_bn']; ?></h2>
        <section class="section-grid">
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-05.png" alt="news-img" />
                <div>
                    <h2>Report says Apple, TSMC talk about moving 3nm chip production to U.S.</h2>
                    <h3>Alan Friedman ● 2h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-15.png" alt="news-img" />
                <div>
                    <h2>Another problem of foldables is fixed: The Oppo Find N2 will weigh less than an iPhone</h2>
                    <h3>Dzhoro Ivanov ● 5h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news//image_2022-11-11_23-08-24.png" alt="news-img" />
                <div>
                    <h2>Samsung Black Friday deal shaves up to $300 off the price of every Galaxy Tab S8 model</h2>
                    <h3>Cosmin Vasile ● 10h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-30.png" alt="news-img" />
                <div>
                    <h2>Grab the criminally underrated Galaxy S21 FE at a huge discount</h2>
                    <h3>Anam Hamid ● 3h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-37.png" alt="news-img" />
                <div>
                    <h2>Surprise early access Black Friday sale takes up to 69% off Galaxy S22 phones</h2>
                    <h3>Anam Hamid ● 30min ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-48.png" alt="news-img" />
                <div>
                    <h2>Black Friday Galaxy deals: Save up to $1100 on a new Galaxy Z Fold 4!</h2>
                    <h3>Rado Minkov ● 8h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-56.png" alt="news-img" />
                <div>
                    <h2>The recently released Fitbit Versa 4 smartwatch is on sale at an unbeatable holiday discount
                    </h2>
                    <h3>Adrian Diaconescu ● 10min ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-09-22.png" alt="news-img" />
                <div>
                    <h2>T-Mobile brings 5G Home Internet to 70 cities and towns across the Midwest</h2>
                    <h3>Cosmin Vasile ● 3h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-09-35.png" alt="news-img" />
                <div>
                    <h2>Report says Apple, TSMC talk about moving 3nm chip production to U.S.</h2>
                    <h3>Alan Friedman ● 2h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-05.png" alt="news-img" />
                <div>
                    <h2>Apple's new AirDrop feature for China is coming to the iPhone worldwide over the coming year
                    </h2>
                    <h3>Alan Friedman ● 2h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-15.png" alt="news-img" />
                <div>
                    <h2>Another problem of foldables is fixed: The Oppo Find N2 will weigh less than an iPhone</h2>
                    <h3>Dzhoro Ivanov ● 5h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news//image_2022-11-11_23-08-24.png" alt="news-img" />
                <div>
                    <h2>Samsung Black Friday deal shaves up to $300 off the price of every Galaxy Tab S8 model</h2>
                    <h3>Cosmin Vasile ● 10h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-30.png" alt="news-img" />
                <div>
                    <h2>Grab the criminally underrated Galaxy S21 FE at a huge discount</h2>
                    <h3>Anam Hamid ● 3h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-37.png" alt="news-img" />
                <div>
                    <h2>Surprise early access Black Friday sale takes up to 69% off Galaxy S22 phones</h2>
                    <h3>Anam Hamid ● 30min ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-48.png" alt="news-img" />
                <div>
                    <h2>Black Friday Galaxy deals: Save up to $1100 on a new Galaxy Z Fold 4!</h2>
                    <h3>Rado Minkov ● 8h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-08-56.png" alt="news-img" />
                <div>
                    <h2>The recently released Fitbit Versa 4 smartwatch is on sale at an unbeatable holiday discount
                    </h2>
                    <h3>Adrian Diaconescu ● 10min ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-09-22.png" alt="news-img" />
                <div>
                    <h2>T-Mobile brings 5G Home Internet to 70 cities and towns across the Midwest</h2>
                    <h3>Cosmin Vasile ● 3h ago</h3>
                </div>
            </div>
            <div class="grid-items">
                <img src="../../images/news/image_2022-11-11_23-09-35.png" alt="news-img" />
                <div>
                    <h2>Report says Apple, TSMC talk about moving 3nm chip production to U.S.</h2>
                    <h3>Alan Friedman ● 2h ago</h3>
                </div>
            </div>
        </section>
        <section class="reviews">
            <h2><?php echo $Lang['news_reviews']; ?></h2>
            <div class="reviews-flex">
                <div>
                    <h3>Galaxy S23 Plus vs iPhone 14 Plus: Which one's a plus and which one's a minus?</h3>
                    <h4>Rado Minkov</h4>
                </div>
                <img src="../../images/news/versus.png" alt="img-reviews">
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