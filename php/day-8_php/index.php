<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day-8_php</title>
</head>
<style>
    body{
        margin: 20PX;
        padding: 100px;
    }
</style>
<body>
    <div class="contact-container">
        <h2>jitna number, utni baar text list me aa jayega.</h2>
        <form action="#" method="post">
            <input type="text" name="text" placeholder="text" required>
            <input type="number" name="number" placeholder="number" required>
            <button type="submit">Send Message</button>
        </form>
    </div>

    

    <?php
    $number = $_POST["number"];
    $text =$_POST["text"];
   for ($i = 0; $i < $number; $i++) {
 
         echo" $i:$text";
      }
    ?>


</body>
</html>