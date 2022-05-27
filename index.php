<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Micro-Club</title>
    <link rel="shortcut icon" href="images/Logo-clear.svg" />
    <link rel="stylesheet" href="styles/normalize.css" />
    <link rel="stylesheet" href="styles/main.css" />
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cousine:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <nav>
            <div class="nav-logo">
                <a href="#">
                    <img src="images/Logo-white.svg" alt="Micro Club logo" />
                </a>
            </div>
            <div id="navLinks" class="nav-links sidenav">
                <ul id="UlNav" class="disable">
                    <li><a href="#">Home</a></li>
                    <li><a href="Components/Events.php">Events</a></li>
                    <li><a href="#support">Support Us</a></li>
                    <li><a href="#media">Media</a></li>
                    <li><a href="Components/Signup.php">Join MC</a></li>
                </ul>
            </div>
            <a href="#" id="openBtn" onclick="openNav()">
                <i class="fas fa-bars burger-icon"></i>
            </a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="definition row justify-content-center align-items-center">
                <div class="definition__text">
                    <h1>Micro Club of USTHB</h1>
                    <p>
                        MICRO club is one of the largest scientific clubs in Algeria.
                        Working since 1985, our main goal is to offer original and
                        innovative content throughout our hackathons, workshops, training
                        and social media.
                    </p>
                    <a href="Components/Signup.php"><input type="button" value="Join us" class="btn btn--shadow row justify-content-center align-items-center" /></a>
                </div>
                <div class="definition__logo">
                    <img src="images/Logo-clear.svg" alt="Micro Club logo" />
                </div>
            </div>
        </div>
        <section id="aboutus">
            <div class="abt__image">
                <div class="img1"><img src="images/aboutUsImg1.png" /></div>
                <div class="img2"><img src="images/aboutUsImg2.JPG" /></div>
            </div>
            <div class="abt__description">
                <h1>About us.</h1>
                <p>
                    MC (Micro Club) is a student club at
                    <em> University of science and technologie Houari BOUMEDIENE </em>
                    in Algiers. It's made for students who are passionate about
                    computers, high tech, robotics, design, and anything related to
                    technology . The MC has managed to gain its place nationally and
                    internationally by organizing major Tech events. After organizing
                    the first hackathon and one of the largest in Algeria, the club is
                    considered as one of the biggest and most active clubs in the
                    country.
                </p>
            </div>
        </section>

        <section id="partners">
            <h2>Partners</h2>
            <div class="partners__showcase">
                <div class="child">
                    <img src="images/Djezzy.png" />
                </div>
                <div class="child">
                    <img src="images/Github.png" />
                </div>
                <div class="child">
                    <img src="images/Mobilis.png" />
                </div>
                <div class="child">
                    <img src="images/Yassir.png" />
                </div>
                <div class="child">
                    <img src="images/ooredoo.jpg" />
                </div>
                <div class="child">
                    <img src="images/Microsoft.png" />
                </div>
                <div class="child">
                    <img src="images/Usthb.png" />
                </div>
                <div class="child">
                    <img src="images/Djezzy.png" />
                </div>
                <div class="child">
                    <img src="images/Github.png" />
                </div>
                <div class="child">
                    <img src="images/Mobilis.png" />
                </div>
                <div class="child">
                    <img src="images/Yassir.png" />
                </div>
                <div class="child">
                    <img src="images/ooredoo.jpg" />
                </div>
                <div class="child">
                    <img src="images/Microsoft.png" />
                </div>
                <div class="child">
                    <img src="images/Usthb.png" />
                </div>
            </div>
        </section>
    </main>

    <?php require 'Components/footer.php'; ?>

</body>

<script src="/js/index.js"></script>

</html>