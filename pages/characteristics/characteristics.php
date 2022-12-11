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
    <title>Characteristics</title>
    <link rel="shortcut icon" href="../../images/logo-pink.png" type="image/x-icon">

    <link rel="stylesheet" href="../../styles/reset.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link rel="stylesheet" href="./characteristics.css">

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
                <a class="header-link" href="../shop/shop.php"><?php echo $Lang['header_shop']; ?></a>
                <a class="header-link" href="../about/about.php"><?php echo $Lang['header_about']; ?></a>
            </div>
            <ul class="translation">
                <li class="translation-items"><a href="characteristics.php?lang=sk">sk</a></li>
                <li class="translation-slash">/</li>
                <li class="translation-items"><a href="characteristics.php?lang=en">en</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class="section-del-cont">
            <h2 class="typical-h2"><?php echo $Lang['section_del_cont']; ?></h2>
            <ul>
                <li><?php echo $Lang['list_1']; ?></li>
                <li><?php echo $Lang['list_2']; ?></li>
                <li><?php echo $Lang['list_3']; ?></li>
                <li><?php echo $Lang['list_4']; ?></li>
                <li><?php echo $Lang['list_5']; ?></li>
                <li><?php echo $Lang['list_6']; ?></li>
            </ul>
            <div class="typical-dabl-photo">
                <img src="../../images/characteristics/01.jpg" alt="phone-img">
                <img src="../../images/characteristics/02.jpg" alt="phone-img">
            </div>
            <p class='text-p'><?php echo $Lang['typical_d_text']; ?></p>
            <div class="typical-dabl-photo">
                <img src="../../images/characteristics/11.jpg" alt="phone-img">
                <img src="../../images/characteristics/12.jpg" alt="phone-img">
            </div>
            <div style='display: flex; flex-direction: column; gap: 20px;margin: 40px 0 0;'>
                <h2 class="typical-h2"><?php echo $Lang['audio_1']; ?></h2>
                <audio controls>
                    <source src="../../images/characteristics/It_is_realme.mp3">
                </audio>
            </div>
        </section>

        <section class="section-form">
            <h2 class="typical-h2">Registration</h2>
            <form class='form' action="">
                <div class="text-field">
                    <label class="text-field__label" for="username">Name</label>
                    <input class="text-field__input" type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email">
                </div>
                <div class="text-field">
                    <label for="phone">Phone number</label>
                    <input type="text" id="phone" placeholder="Phone number">
                </div>
                <button class='btn btn-border-3' type='submit'>Send information</button>
            </form>
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