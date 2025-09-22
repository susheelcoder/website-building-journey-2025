<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<style>
    body{
        margin: 50px;
    }
    .section{
        background-color: antiquewhite;
        padding: 10px;
    }
</style>
<body>
    <section class="section">
        <hr>
    <form action="web.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" required><br><br>
        <input type="text" name="name" placeholder="Enter your name" required><br><br>
        <input type="text" name="passionate" placeholder="passionate" required><br><br>
        <input type="text" name="skills1" placeholder="skills-1" ><br><br>
        <input type="text" name="skills2" placeholder="skills-2" ><br><br>
        <input type="text" name="skills3" placeholder="skills-3" ><br><br>
        <input type="text" name="skills4" placeholder="skills-4" ><br><br>
        <input type="text" name="skills5" placeholder="skills-5" ><br><br>
        <input type="text" name="skills6" placeholder="skills-6" ><br><br>
        <input type="text" name="skills7" placeholder="skills-7" ><br><br>
        <input type="text" name="skills8" placeholder="skills-8" ><br><br>
        <input type="text" name="skills9" placeholder="skills-9" ><br><br>
        <input type="text" name="skills10" placeholder="skills-10" ><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
    <hr>
  </section>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $passionate = $_POST['passionate'];

        move_uploaded_file($tmp, $image);
    }
    ?>

    <?php
    if (!empty($name) && !empty($image)) {
        echo "<h2>Name: $name</h2>";
        echo "<h2>passionate: $passionate</h2>";
        echo "<img src='$image' width='150' height='150'>";
    }
    ?>
    <img src="<?php echo $image; ?>" width="100px">
      <b><?php echo $name; ?></b>
      <b><?php echo $passionate; ?></b>
 
      
      
</body>
</html>
<!-- action="site.php" -->

<!-- 
<style>
    .ok{
         height:50px;
    }
</style>
<h1 style="margin-left: 200px 'height:50px;"></h1> -->