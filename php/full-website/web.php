<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $passionate = $_POST['passionate'];

    move_uploaded_file($tmp, $image);
}
?>
<!--skills  -->
<?php
function getSkills($totalSkills = 10) {
    $skills = [];
    for ($i = 1; $i <= $totalSkills; $i++) {
        if (!empty($_POST["skills$i"])) {
            $skills[] = htmlspecialchars($_POST["skills$i"]);
        }
    }
    return $skills;
}

$skillsList = getSkills(10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- day 1 -- Head-conshapt-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a practice HTML page made by susheel-coder while learning.">
    <meta name="author" content="susheel-coder">
    <meta name="keywords"
        content="Susheel Coder, web developer, HTML CSS JavaScript, frontend developer, coder portfolio">
    <!-- <meta http-equiv="refresh" content="5; url=http://google.com"> -->
    <link rel="icon" href="<?php echo $image; ?>" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <title><?php echo $name; ?></title>
</head>

<body>
    <!--======== header ========-->
    <header>
        <section class="header">
            <div class="leftside">
                <!-- <img class="img" src="="" alt="Profile" /> -->
                <img class="img" src="<?php echo $image; ?>" />

                <h1 class="h1"><?php echo $name ?></h1>
            </div>
            <div class="rightside">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#project">Project</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </div>
        </section>
    </header>
    <!--======== niv ========-->
    <section class="nav-section">
        <nav class="nav-rightside">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#FAQ">FAQ</a></li>
                <li><a href="#Team">Team</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
            </ul>
        </nav>
    </section>
    <!--======== front page   #home ========-->
    <section class="firstSection">
        <div class="leftSection">
            Hi My name is <span class="purple"><?php echo $name; ?></span>
            <div>and I am a passionate </div>
            <b><?php echo $passionate; ?></b>
            <div class="button-group" style="margin-top: 20px; display: flex;">
                <!-- <a href="resume/Susheel_Resume.pdf" download class="btn">Download Resume</a> -->
                <a href=" " download class="btn" style="color: #000000;">Download
                    Resume</a>
                <a href="" target="_blank" class="btn" style="color: #000000;">
                    <i class="fab fa-github"></i> Visit GitHub
                </a>
            </div>
        </div>
        <div class="rightSection">
            <img src="<?php echo $image; ?>" alt="Developer Image">
        </div>
    </section>
    <hr>
    <!--======== page  #about ========-->
    <br>
    <section id="about" class="about-section">
        <div class="about-container">
            <div class="about-text">
                <h2>👨‍💻 About Me</h2>
                <p>
                    Hello! I'm <strong> <?php echo $name; ?> </strong> , a passionate and self-driven developer who
                    loves creating innovative, efficient, and user-friendly digital solutions. I enjoy learning new
                    technologies, tackling real-world problems, and continuously improving my skills to stay ahead in
                    the tech world.
                </p>
                <p>
                    I strongly believe in teamwork, collaboration, and the power of continuous learning. Whether it’s
                    web development, frontend design, or building scalable software, my goal is to deliver high-quality
                    solutions that provide the best user experience and performance.
                </p>
            </div>
            <!-- <div class="about-photo">
                    <img src="img/about.jpg" alt="Susheel smiling confidently in casual outfit" />
                </div> -->
        </div>
    </section>
    <hr>
    <!--======== page  #skills ========-->
    <section id="skills" class="skills-section">
        <h2>Skills-📲</h2>
        <div class="skills-grid">
            <?php foreach ($skillsList as $skill): ?>
                <span class="skill-badge"><?php echo $skill; ?></span>
            <?php endforeach; ?>
        </div>
    </section>
    <hr>
    <!--======== footer ========-->
    <footer>
            <div class="footer-div-1"> 
                <ul class=" footer-ul-SO">
                    <li><a class="footer-a" href="#"><i class="ri-instagram-line"></i></a></li>
                    <li><a class="footer-a" href="#"><i class="ri-facebook-circle-line"></i></a></li>
                    <li><a class="footer-a" href="#"><i class="ri-twitter-line"></i></a></li>
                    <li><a class="footer-a" href="#"><i class="ri-linkedin-box-line"></i></a></li>
                    <li><a class="footer-a" href="#"><i class="ri-youtube-line"></i></a></li>
                    <li><a class="footer-a" href="#"><i class="ri-github-line"></i></a></li>
                </ul>
            </div>
            <div class="footer-div-1">
            <ul class="footer-ul-SO">
                <li class=".footer-a" ><a href="home">home</a></li>
                <li><a href="home">home</a></li>
                <li><a href="home">home</a></li>
                <li><a href="home">home</a></li>
                <li><a href="home">home</a></li>
                <li><a href="home">home</a></li>
                <li><a href="home">home</a></li>
                <li><a href="home">home</a></li>
                <li><a href="home">home</a></li>
            </ul>
            </div>
            <div class="footer-div-1">
                 <p>Copyright ©2025; Designed by <?php echo $name?></p>
            </div>
        </footer>




</body>

</html>