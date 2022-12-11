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
    <title>Social Media</title>
    <link rel="shortcut icon" href="../../images/logo-pink.png" type="image/x-icon">

    <link rel="stylesheet" href="../../styles/reset.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link rel="stylesheet" href="./socialmedia.css">

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
                <a class="header-link" href="../news/news.php"><?php echo $Lang['header_news']; ?></a>
                <a class="header-link header-active-page"><?php echo $Lang['header_social_media']; ?></a>
                <a class="header-link" href="../shop/shop.php"><?php echo $Lang['header_shop']; ?></a>
                <a class="header-link" href="../about/about.php"><?php echo $Lang['header_about']; ?></a>
            </div>
            <ul class="translation">
                <li class="translation-items"><a href="socialmedia.php?lang=sk">sk</a></li>
                <li class="translation-slash">/</li>
                <li class="translation-items"><a href="socialmedia.php?lang=en">en</a></li>
            </ul>
        </div>
    </header>
    <main>

        <section class='section-head'>
            <div class='head-flex'>
                <h1><?php echo $Lang['sm_h1']; ?></h1>
                <video width="40%" height="25%" controls="controls" poster="../../images/socialmedia/vid-poster-img.png">
                    <source src="../../images/socialmedia/video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
            </div>
            <div class="head-flex-news">
                <div class="head-news-content">
                    <img src="../../images/socialmedia/headimg1.jpg" alt="new1">
                    <h2><?php echo $Lang['sm_h2_1']; ?></h2>
                    <h3>Adrian Diaconescu</h3>
                </div>
                <div class="head-news-content">
                    <img src="../../images/socialmedia/headimg2.jpg" alt="new1">
                    <h2><?php echo $Lang['sm_h2_2']; ?></h2>
                    <h3>Dzhoro Ivanov</h3>
                </div>
            </div>
        </section>

        <section class="section-posts">
            <h2 class="h2-bn"><?php echo $Lang['sm_best_posts']; ?></h2>
            <ul class="posts-container">
                <li class="posts-item">
                    <a target="_blank" href="#">
                        <div class="posts-img-text">
                            <div class="transform-img">
                                <img src="../../images/socialmedia/first.jpg" alt="img">
                            </div>
                            <div class="posts-data">
                                <p class="post-data-feb">4</p>
                                <p class="post-data-feb">Nov</p>
                            </div>
                            <div class="post-under-img-info">
                                <p class="post-under-amazing">Amazing Blog Post</p>
                                <p class="post-under-admin">By admin <span class="post-under-comment">2 comment</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="posts-item">
                    <a target="_blank" href="#">
                        <div class="posts-img-text">
                            <div class="transform-img">
                                <img src="../../images/socialmedia/second.jpg" alt="img">
                            </div>
                            <div class="posts-data">
                                <p class="post-data-feb">12</p>
                                <p class="post-data-feb">Feb</p>
                            </div>
                            <div class="post-under-img-info">
                                <p class="post-under-amazing">Top Post in Instagram</p>
                                <p class="post-under-admin">By admin <span class="post-under-comment">19 comment</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="posts-item">
                    <a target="_blank" href="#">
                        <div class="posts-img-text">
                            <div class="transform-img">
                                <img src="../../images/socialmedia/third.jpg" alt="img">
                            </div>
                            <div class="posts-data">
                                <p class="post-data-feb">15</p>
                                <p class="post-data-feb">Aug</p>
                            </div>
                            <div class="post-under-img-info">
                                <p class="post-under-amazing">Best Post in Facebook</p>
                                <p class="post-under-admin">By admin <span class="post-under-comment">2 comment</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="posts-item">
                    <a target="_blank" href="#">
                        <div class="posts-img-text">
                            <div class="transform-img">
                                <img src="../../images/socialmedia/fourth.jpg" alt="img">
                            </div>
                            <div class="posts-data">
                                <p class="post-data-feb">6</p>
                                <p class="post-data-feb">Sep</p>
                            </div>
                            <div class="post-under-img-info">
                                <p class="post-under-amazing">Favourite Post in Twitter</p>
                                <p class="post-under-admin">By admin <span class="post-under-comment">4 comment</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="posts-item">
                    <a target="_blank" href="#">
                        <div class="posts-img-text">
                            <div class="transform-img">
                                <img src="../../images/socialmedia/five.jpg" alt="img">
                            </div>
                            <div class="posts-data">
                                <p class="post-data-feb">9</p>
                                <p class="post-data-feb">Dec</p>
                            </div>
                            <div class="post-under-img-info">
                                <p class="post-under-amazing">Blog on Reddit</p>
                                <p class="post-under-admin">By admin <span class="post-under-comment">8 comment</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="posts-item">
                    <a target="_blank" href="#">
                        <div class="posts-img-text">
                            <div class="transform-img">
                                <img src="../../images/socialmedia/six.jpg" alt="img">
                            </div>
                            <div class="posts-data">
                                <p class="post-data-feb">25</p>
                                <p class="post-data-feb">Apr</p>
                            </div>
                            <div class="post-under-img-info">
                                <p class="post-under-amazing">New video in Youtube</p>
                                <p class="post-under-admin">By admin <span class="post-under-comment">2 comment</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="posts-item">
                    <a target="_blank" href="#">
                        <div class="posts-img-text">
                            <div class="transform-img">
                                <img src="../../images/socialmedia/seven.jpg" alt="img">
                            </div>
                            <div class="posts-data">
                                <p class="post-data-feb">14</p>
                                <p class="post-data-feb">Jun</p>
                            </div>
                            <div class="post-under-img-info">
                                <p class="post-under-amazing">Best photo in Pinterest</p>
                                <p class="post-under-admin">By admin <span class="post-under-comment">5 comment</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="posts-item">
                    <a target="_blank" href="#">
                        <div class="posts-img-text">
                            <div class="transform-img">
                                <img src="../../images/socialmedia/eight.jpg" alt="img">
                            </div>
                            <div class="posts-data">
                                <p class="post-data-feb">17</p>
                                <p class="post-data-feb">Sep</p>
                            </div>
                            <div class="post-under-img-info">
                                <p class="post-under-amazing">Answer on StackOverflow</p>
                                <p class="post-under-admin">By admin <span class="post-under-comment">24 comment</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
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