    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

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
    <meta name="keywords" content="Susheel Coder, web developer, HTML CSS JavaScript, frontend developer, coder portfolio">
    <!-- <meta http-equiv="refresh" content="5; url=http://google.com"> -->
     <link rel="icon" href="<?php echo $image; ?>" type="image/x-icon">
     <title><?php echo $name; ?></title>

    
</head>

<body>
  
    <?php
    if (!empty($name) && !empty($image)) {
        echo "<h2>Name: $name</h2>";
        // echo "<img src='$image' width='150' height='150'>";
    }
    ?>
    <img src="<?php echo $image; ?>" width="100px">

</body>

</html>



