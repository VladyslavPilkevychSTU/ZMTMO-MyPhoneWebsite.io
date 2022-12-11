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
                <audio controls>
                    <source src="../../images/audio/50-cent-in-da-club.mp3">
                </audio>
                <audio controls>
                    <source src="../../images/audio/audio.mp3">
                </audio>
            </div>
        </section>
        <section class="section-video">
            <div class="video">
                <video width="40%" height="25%" controls="controls">
                    <source src="../../images/video/vid.MOV" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
            </div>
            <div class="video">
                <video width="40%" height="25%" controls="controls">
                    <source src="../../images/video/vid1.MOV" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
            </div>
        </section>

        <section class="section-form">
            <h2 class="typical-h2"><?php echo $Lang['form_reg']; ?></h2>
            <form class='form' method="POST">
                <div class="text-field">
                    <label class="text-field__label" for="username"><?php echo $Lang['form_name']; ?></label>
                    <input class="text-field__input" type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="text-field">
                    <label for="email"><?php echo $Lang['form_email']; ?></label>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div class="text-field">
                    <label for="phone"><?php echo $Lang['form_phone']; ?></label>
                    <input type="text" id="phone" name="phone" placeholder="Phone number">
                </div>
                <div class="text-field">
                    <label for="text"><?php echo $Lang['form_text']; ?></label>
                    <input type="text" id="text" name="text" placeholder="Text">
                </div>
                <button class='btn btn-border-3' type='submit'><?php echo $Lang['form_btn']; ?></button>
            </form>
        </section>
        <section class="section-form-answ">
            <?php
            if (isset($_POST) && $_POST['username']) {
                $filename = "./comments.txt";
                $data = "<div>
                            <h3>" . $_POST['username'] . "</h3>
                            <h4>" . $_POST['email'] . "</h4>
                            <h4>" . $_POST['phone'] . "</h4>
                            <p>" . $_POST['text'] . "</p>
                        </div>";
                $fr = fopen("comments.txt", 'r') or die("chyba");
                $comments = fread($fr, 99999);
                $data .= $comments;
                $fw = fopen("comments.txt", 'w+') or die("chyba");
                fwrite($fw, $data);
                echo "\n" . file_get_contents("comments.txt") . "\n";
                fclose($fr);
                fclose($fw);
            }
            ?>
        </section>
        <section class="section-gallery">
            <?php foreach (glob('gallery/*') as $filename) { ?>
                <img class="gallery" src="gallery/<?php echo basename($filename); ?>" alt="" />
            <?php } ?>
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