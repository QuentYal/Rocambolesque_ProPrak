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
    <header>
        <a href="#home"><img src="../../../public/img/logo-v3-klein.png" id="logo" class="small" alt=""></a>
        <nav>
            <ul class="nav__links">
                <li><a href="<?= URLROOT; ?>#about">Over</a></li>
                <li><a href="<?= URLROOT; ?>#openingstijden">Openingstijden</a></li>
                <li><a href="<?= URLROOT; ?>#menu">Menu</a></li>
                <li><a href="<?= URLROOT; ?>contact">Contact</a></li>
            </ul>
        </nav>
        <ul class="split">
            <a class="lft" href="#">Reserveren</a>
            <a class="lft" href="#"><ion-icon name="person-circle-outline"></ion-icon>Inloggen</a>
        </ul>
    </header>

    <section id="home" class="landing_section">
        <div class="background_image">
            <img src="../../../public/img/homepage.png" alt="">
            <div class="image_cover"></div>
            <div class="text">
                <div class="content">
                    <h1>"Quote"</h1>
                    <!-- Wil je zeker zijn van een plekje in ons restaurant, reserveer dan hier. -->
                    <div class="button">
                        <button><a href="<?= URLROOT; ?>/reserveren">Reserveer online</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <!-- <h1>Over Rocambolesque</h1> -->
        <div class="over_rocambolesque">
            <div class="image_content">
                <img src="../../../public/img/logo-v3.png" alt="logo">
            </div>
            <div class="rocambolesque_info">
                <h2>Rocambolesque</h2>
                <div class="content">
                    <p>Restaurant Rocambolesque is nog maar net begonnen. Twee vrienden Usem Alaoui en Finn Pinneau zijn samen begonnen met het restaurant. Ze hebben allebei al een tijd ervaring in de horeca waarbij Usem tot dat moment actief was als kok.
                        Finn, die net een opleiding restaurant management heeft afgerond, besloot om gelijk de grote stap te wagen en te beginnen met een restaurant. Usem was gemakkelijk over te halen, omdat hij niet tevreden was met z’n functie als souschef. Finn bood hem de functie chef-kok en heeft hem ook gevraagd om deeleigenaar te worden.
                    </p>
                </div>
            </div>
        </div>
        <div class="bar">
            <div class="bar_info">
                <h2>Bar</h2>
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ipsam sequi quidem tempore laudantium deleniti quasi nesciunt iure corporis. Cumque nemo corporis facere veritatis ut ipsam consequuntur nam iure deleniti!
                    </p>
                </div>
            </div>
            <div class="image_bar">
                <img src="../../../public/img/bar.png" alt="bar">
            </div>
        </div>
    </section>
    <section id="openingstijden">
        <div class="banner">
            <img src="../../../public/img/bar-banner.png" alt="bar-banner">
            <div class="image_cover"></div>
            <div class="title">
                <h1>Openingstijden</h1>
            </div>
        </div>
        <div class="logo"><img src="../../../public/img/logo-v3-klein.png" alt="logo"></div>
        <div class="content">
            <div class="title">
                <h2>Rocambolesque</h2>
                <h2>Openingstijden en tarieven per 2 uur</h2>
                <div class="line"></div>
            </div>
            <div class="grid-container">
                <div class="grid-item"><h3>Maandag t/m donderdag</h3></div>
                <div class="grid-item"><h3>17:00 - 22:00</h3></div>
                <div class="grid-item"><h4>Tarieven</h4></div>
                <div class="grid-item"></div>
                <div class="grid-item"><h5>Volwassenen</h5></div>
                <div class="grid-item"><h5>35 euro</h5></div>
                <div class="grid-item"><h5>Kinderen tot 18 jaar</h5></div>
                <div class="grid-item"><h5>25 euro</h5></div>
            </div>
            <div class="line"></div>
            <div class="grid-container">
                <div class="grid-item"><h3>Vrijdag t/m zondag   </h3></div>
                <div class="grid-item"><h3>17:00 - 22:00</h3></div>
                <div class="grid-item"><h4>Tarieven</h4></div>
                <div class="grid-item"></div>
                <div class="grid-item"><h5>Volwassenen</h5></div>
                <div class="grid-item"><h5>42 euro</h5></div>
                <div class="grid-item"><h5>Kinderen tot 18 jaar</h5></div>
                <div class="grid-item"><h5>32 euro</h5></div>
            </div>
            <div class="line"></div>
            <div class="grid-container">
                <div class="grid-item"><h1>Bar</h1></div>
                <div class="grid-item"></div>
                <div class="grid-item"><h3>Maandag t/m zondag</h3></div>
                <div class="grid-item"><h3>22:00 - 24:00</h3></div>
            </div>
        </div>
    </section>


    <?php require(APPROOT . '/views/includes/footer.php'); ?>


    <script>
        const sections = document.querySelectorAll("section[id]");
        window.addEventListener("scroll", navHighlighter);

        function navHighlighter() {
            let scrollY = window.pageYOffset;
            sections.forEach(current => {
                const sectionHeight = current.offsetHeight;
                const sectionTop = (current.getBoundingClientRect().top + window.pageYOffset) - 50;
                sectionId = current.getAttribute("id");
                if (
                    scrollY > sectionTop &&
                    scrollY <= sectionTop + sectionHeight
                ) {
                    document.querySelector(".navigation a[href*=" + sectionId + "]").classList.add("active");
                } else {
                    document.querySelector(".navigation a[href*=" + sectionId + "]").classList.remove("active");
                }
            });
        }
    </script>
    <script>
        window.addEventListener('scroll', function() {
            var scrollY = window.scrollY;

            if (window.scrollY > 80) {
                document.querySelector('header').classList.add('scroll');
                // document.getElementById('#logo').classList.add('small');
            } else {
                document.querySelector('header').classList.remove('scroll');
                // document.getElementById('#logo').classList.remove('small');
            }
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>