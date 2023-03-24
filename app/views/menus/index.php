<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../public/css/main.css">
    <link rel="stylesheet" href="<?= URLROOT; ?>/img/favicon.ico" type="image/x-icon">
    <title>Rocambolesque</title>
</head>

<body>
    <header id="main">
        <a href="#home"><img src="../../../public/img/logo-v3-klein.png" id="logo" class="small" alt=""></a>
        <nav>
            <ul class="nav__links">
                <li><a href="<?= URLROOT; ?>#about">Over</a></li>
                <li><a href="<?= URLROOT; ?>#openingstijden">Openingstijden</a></li>
                <li><a href="<?= URLROOT . "/menus/index"; ?>">Menu</a></li>
                <li><a href="<?= URLROOT; ?>contact">Contact</a></li>
            </ul>
        </nav>
        <ul class="split">
            <a class="lft" href="#">Reserveren</a>
            <a class="lft" href="#"><ion-icon name="person-circle-outline"></ion-icon>Inloggen</a>
        </ul>
    </header>

    <!-- Hamburger menu -->
    <div id="hamburger-menu" class="hide">
        <div class="small-nav">
            <span onclick="openNav()"><ion-icon name="menu-outline"></ion-icon></span>
            <img src="../../../public/img/logo-v3-klein.png" alt="logo">
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#home">Home</a>
            <a href="#about">Over</a>
            <a href="#openingstijden">Openingstijden</a>
            <a href="#">Menu</a>
            <a href="#">Contact</a>
            <a href="#">Reserveren</a>
            <a href="#"><ion-icon style="color: white;" name="person-circle-outline"></ion-icon>Inloggen</a>
        </div>
    </div>

    <section id="home" class="landing_section">
        <div class="background_image">
            <img src="../../../public/img/homepage.png" alt="">
            <div class="image_cover"></div>
            <div class="text">
                <div class="content">
                    <h1>"Wil je zeker zijn van een plekje in ons restaurant, reserveer dan hier."</h1>
                    <div class="button">
                        <button><a href="<?= URLROOT; ?>/reserveren">Reserveer online</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="openingstijden">
        <div class="logo"><img src="../../../public/img/logo-v3-klein.png" alt="logo"></div>
        <div class="content">
            <div class="title">
                <h2>Rocambolesque</h2>
                <h2>Openingstijden en tarieven per 2 uur</h2>
                <div class="line"></div>
            </div>
            <div class="grid-container">
                <div class="grid-item">
                    <h3>Maandag t/m donderdag</h3>
                </div>
                <div class="grid-item">
                    <h3>17:00 - 22:00</h3>
                </div>
                <div class="grid-item">
                    <h4>Tarieven</h4>
                </div>
                <div class="grid-item"></div>
                <div class="grid-item">
                    <h5>Volwassenen</h5>
                </div>
                <div class="grid-item">
                    <h5>35 euro</h5>
                </div>
                <div class="grid-item">
                    <h5>Kinderen tot 18 jaar</h5>
                </div>
                <div class="grid-item">
                    <h5>25 euro</h5>
                </div>
            </div>
            <div class="line"></div>
            <div class="grid-container">
                <div class="grid-item">
                    <h3>Vrijdag t/m zondag </h3>
                </div>
                <div class="grid-item">
                    <h3>17:00 - 22:00</h3>
                </div>
                <div class="grid-item">
                    <h4>Tarieven</h4>
                </div>
                <div class="grid-item"></div>
                <div class="grid-item">
                    <h5>Volwassenen</h5>
                </div>
                <div class="grid-item">
                    <h5>42 euro</h5>
                </div>
                <div class="grid-item">
                    <h5>Kinderen tot 18 jaar</h5>
                </div>
                <div class="grid-item">
                    <h5>32 euro</h5>
                </div>
            </div>
            <div class="line"></div>
            <div class="grid-container">
                <div class="grid-item">
                    <h1>Bar</h1>
                </div>
                <div class="grid-item"></div>
                <div class="grid-item">
                    <h3>Maandag t/m zondag</h3>
                </div>
                <div class="grid-item">
                    <h3>22:00 - 24:00</h3>
                </div>
            </div>
        </div>
    </section>

    <div>
        <h1><?= $data['title'] ?></h1>
        <a href="<?= URLROOT . "/landingspages/index"; ?>">Home page</a>
        <a href="<?= URLROOT . "/menus/items"; ?>">Menu Items</a>
        <br><br>

        <?= $data['rows'] ?>
    </div>


    <?php require(APPROOT . '/views/includes/footer.php'); ?>

    <script src="../../../public/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>