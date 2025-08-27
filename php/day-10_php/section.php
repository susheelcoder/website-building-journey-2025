 <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        // $html = $_POST['html'];
        // $css = $_POST['css'];
        // $js = $_POST['js'];
        // $React = $_POST['React'];
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day-9</title>
</head>
<style>
    .about-section {
  background-color: #fff8f3;
  color: #000000;
  padding: 50px 100px;
}

.about-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 50px;
}

.about-text {
  flex: 1;
  font-size: 1.1rem;
  line-height: 1.7;
}

.about-text h2 {
  font-size: 2.2rem;
  color: rgb(150, 89, 230);
  margin-bottom: 20px;
}

.about-text strong {
  color: #42c9db;
}

.about-photo {
  flex: 1;
  display: flex;
  justify-content: center;

}

.about-photo img {
  width: 280px;
  border-radius: 22px;
  box-shadow: 0 0 15px rgba(160, 28, 221, 0.973);
  transition: transform 0.3s ease;
}

.about-photo img:hover {
  transform: scale(1.1);
  filter: brightness(1.1);
  color: #78e91c;
  font-size: 9.06rem;
  box-shadow: 0 0 20px rgba(54, 221, 12, 0.973);
}
</style>
<body>
     <hr style="background-color: #00bcd4; height: 2px; margin: 0;">
        <br>
        <section id="about" class="about-section">
            <div class="about-container">
                <div class="about-text">
                    <h2>👨‍💻 About Me</h2>
                    <p>
                        Hello! I'm <strong> <?php echo $name; ?> </strong> , a passionate and self-driven developer who loves creating innovative, efficient, and user-friendly digital solutions. I enjoy learning new technologies, tackling real-world problems, and continuously improving my skills to stay ahead in the tech world.
                    </p>
                    <p>
                        I strongly believe in teamwork, collaboration, and the power of continuous learning. Whether it’s web development, frontend design, or building scalable software, my goal is to deliver high-quality solutions that provide the best user experience and performance.
                    </p>
                </div>
                <!-- <div class="about-photo">
                    <img src="img/about.jpg" alt="Susheel smiling confidently in casual outfit" />
                </div> -->
            </div>
        </section>
         <hr style="background-color: #00bcd4; height: 2px; margin: 0;">

    
</body>
</html>




