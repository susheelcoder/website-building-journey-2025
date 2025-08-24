<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, $image);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>


<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Enter your name" required><br><br>
    <input type="file" name="image" required><br><br>
    <input type="submit" name="submit" value="Upload">
</form>

<hr>


<?php
if (!empty($name) && !empty($image)) {
    echo "<h2>Name: $name</h2>";
    echo "<img src='$image' width='150' height='150'>";
}
?>

</body>
</html>
