<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $passionate = $_POST['passionate'];

    move_uploaded_file($tmp, $image);
}
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
        <nav>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Projects</li>
                <li>Contact</li>
                <li>Services</li>
                <li>Blog</li>
                <li>Gallery</li>
                <li>FAQ</li>
                <li>Team</li>
                <li>Careers</li>
                <li>Privacy</li>
                <li>Terms</li>

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
    <!--======== page========-->



</body>

</html>