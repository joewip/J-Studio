<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="main1.css">
    <title>J-Studio</title>
</head>

<body>

    <div class="navbar">
        <h2>J-Studio</h2>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="./assets/ResumeCV.pdf">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main">
        <h4>Hi, I am Joey Custodio</h4>
        <p class="title">BSIT Student</p>
        <p class="subtitle"></p>
        <img src="./assets/wEB_DEVELOPER__3_-removebg-preview.png">
    </div>

    <div class="guarantee">
        <div class="item">
            <div class="icon">
                <i class='bx bx-check-shield'></i>
            </div>
            <div class="info">
                <h3>+2</h3>
                <p>Years Of Experiences</p>
            </div>
            <i class='bx bx-chevron-rights'></i>
        </div>
        <div class="item">
            <div class="icon">
                <i class='bx bx-check-circle'></i>
            </div>
            <div class="info">
                <h3>+100</h3>
                <p>Completed Projects</p>
            </div>
            <i class='bx bx-chevron-rights'></i>
        </div>
        <div class="item">
            <div class="icon">
                <i class='bx bx-laugh'></i>
            </div>
            <div class="info">
                <h3>+50</h3>
                <p>Happy Clients</p>
            </div>
            <i class='bx bx-chevron-rights'></i>
        </div>
    </div>

    <h5 class="seprator">Who I Am</h5>

    <div class="about" id="about">
        <img src="./assets/jc_3-removebg-preview.png">
        <div class="info">
            <h3>About Me</h3>
            <p>As a second-year web developer student, I am an enthusiastic and emerging talent in the dynamic world of web development. Eager to translate my theoretical knowledge into practical skills, I am honing my expertise in HTML, CSS, and JavaScript to create visually appealing and functional websites. With a keen interest in both front-end and back-end development, I am actively engaged in learning frameworks and tools that contribute to building robust online platforms.<br><br> As I progress through my academic journey, I am excited to tackle real-world challenges, collaborate with peers, and contribute to the ever-evolving landscape of web development. Passionate about staying current with industry trends, I am poised to make meaningful contributions to the digital realm as I continue to grow and refine my skills.
            </p>
        </div>
    </div>

    <h5 class="seprator">My Skills</h5>

    <div class="skills">
        <div class="left">
            <div class="info">
                <h3>What My Programming Skills Included?</h3>
                <p>
                    I develop simple, intuitive and responsive user interface that helps users get things done with less
                    effort and time with those technologies.
                </p>
            </div>
        </div>

        <div class="right">
            <div class="item">
                <i class='bx bxl-html5'></i>
            </div>
            <div class="item">
                <i class='bx bxl-css3'></i>
            </div>
            <div class="item">
                <i class='bx bxl-typescript'></i>
            </div>
            <div class="item">
                <i class='bx bxl-git'></i>
            </div>
            <div class="item">
                <i class='bx bxl-bootstrap'></i>
            </div>
            <div class="item">
                <i class='bx bxl-php'></i>
            </div>
            <div class="item">
                <i class='bx bxl-sass'></i>
            </div>
            <div class="item">
                <i class='bx bxl-tailwind-css'></i>
            </div>
            <div class="item">
                <i class='bx bxl-mongodb'></i>
            </div>
            <div class="item">
                <i class='bx bxl-graphql'></i>
            </div>
            <div class="item">
                <i class='bx bxl-jquery'></i>
            </div>
            <div class="item">
                <i class='bx bxl-angular'></i>
            </div>
        </div>

    </div>

    <footer>

        <div class="cols">
            <div class="about-col">
                <h3>J-Studio.</h3>
                <p>Creative Web Developer</p>
            </div>

            <div class="links-col">
                <h4>Useful Links</h4>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Skills</a>
                <a href="#">Portfolio</a>
                <a href="#">Contact</a>
            </div>

            <div class="links-col">
                <h4>Social Media</h4>
                <a href="https://www.instagram.com/joeywru/">Instagram</a>
                <a href="https://www.linkedin.com/in/joey-custodio-b56b43252/">Linkedin</a>
                <a href="https://github.com/joewip">Github</a>
            </div>

            <div class="news-col">
                <h4>NewsLetter</h4>
                <p>Enter your email and get notified about news, of.</p>

                <form>
                    <input type="email" placeholder="Your email address">
                    <button><i class='bx bxl-telegram'></i></button>
                </form>

            </div>

        </div>

    </footer>

</body>

</html>