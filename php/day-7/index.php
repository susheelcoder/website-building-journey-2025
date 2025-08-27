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
    <form action="head.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter your name" required><br><br>
        <input type="file" name="image" required><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
    <hr>
  </section>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp, $image);
    }
    ?>

    <?php
    if (!empty($name) && !empty($image)) {
        echo "<h2>Name: $name</h2>";
        // echo "<img src='$image' width='150' height='150'>";
    }
    ?>
    <img src="<?php echo $image; ?>" width="100px">

    
</body>
</html>