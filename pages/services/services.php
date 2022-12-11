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
    <title>Services</title>
    <link rel="shortcut icon" href="../../images/logo-pink.png" type="image/x-icon">

    <link rel="stylesheet" href="../../styles/reset.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link rel="stylesheet" href="./services.css">

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
                <a class="header-link" href="../news/news.php"><?php echo $Lang['header_news']; ?></a>
                <a class="header-link" href="../socialmedia/socialmedia.php"><?php echo $Lang['header_social_media']; ?></a>
                <a class="header-link" href="../shop/shop.php"><?php echo $Lang['header_shop']; ?></a>
                <a class="header-link" href="../about/about.php"><?php echo $Lang['header_about']; ?></a>
            </div>
            <ul class="translation">
                <li class="translation-items"><a href="services.php?lang=sk">sk</a></li>
                <li class="translation-slash">/</li>
                <li class="translation-items"><a href="services.php?lang=en">en</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class='section-head'>
            <div class="dark-bg">
                <h1><?php echo $Lang['services_top_h1']; ?></h1>
                <h2><?php echo $Lang['services_top_h2']; ?></h2>
            </div>
        </section>
        <section class="section-tabs">
            <h2 class="tabs-title"><?php echo $Lang['services_our']; ?></h2>
            <div class="tabs-buttons">
                <button class="tab-button active-tab-button" onClick="openService(event,'phones')"><?php echo $Lang['services_btn_1']; ?></button>
                <button class="tab-button" onClick="openService(event,'onlineSupport')"><?php echo $Lang['services_btn_2']; ?></button>
                <button class="tab-button" onClick="openService(event,'devices')"><?php echo $Lang['services_btn_3']; ?></button>
                <button class="tab-button" onClick="openService(event,'tv')"><?php echo $Lang['services_btn_4']; ?></button>
            </div>
            <div id="phones" class="tab-content">
                <img src='../../images/services/tab-phone.png' />
                <p><?php echo $Lang['services_text_1']; ?></p>
            </div>
            <div id="onlineSupport" class="tab-content" style="display:none">
                <img src='../../images/services/tab-online-support.png' />
                <p><?php echo $Lang['services_text_2']; ?></p>
            </div>
            <div id="devices" class="tab-content" style="display:none">
                <img src='../../images/services/tab-devices.png' />
                <p><?php echo $Lang['services_text_3']; ?></p>
            </div>
            <div id="tv" class="tab-content" style="display:none">
                <img src='../../images/services/tab-tv.png' />
                <p><?php echo $Lang['services_text_4']; ?></p>
            </div>
        </section>
        <section class='section-moreinfo-bg'>
            <div class='dark-bg'>
                <h2>We have a lot of experience</h2>
            </div>
        </section>
        <section class="section-moreinfo">
            <h2 class="tabs-title">More info</h2>
            <div class="moreinfo-block">
                <img src='../../images/services/tab-phone.png' />
                <p><?php echo $Lang['services_text_1']; ?></p>
            </div>
            <div class="moreinfo-block">
                <img src='../../images/services/tab-online-support.png' />
                <p><?php echo $Lang['services_text_2']; ?></p>
            </div>
            <div class="moreinfo-block">
                <img src='../../images/services/tab-devices.png' />
                <p><?php echo $Lang['services_text_3']; ?></p>
            </div>
            <div class="moreinfo-block">
                <img src='../../images/services/tab-tv.png' />
                <p><?php echo $Lang['services_text_4']; ?></p>
            </div>
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

    <script>
        function openService(event, serviceName) {
            let i, x, tablinks;
            x = document.getElementsByClassName("tab-content");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab-button");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active-tab-button", "");
            }
            document.getElementById(serviceName).style.display = "flex";
            event.currentTarget.className += " active-tab-button";
        }
    </script>
</body>

</html>