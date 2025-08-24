 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new</title>
 </head>
 <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .contact-container {
            max-width: 500px;
            background: #dbdbdb;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.877);
        }
        
 </style>
 <body>
    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    ?>
       <section class="contact-container">
        <h2> name :<?php echo $name ?> </h2>
        <h2> email :<?php echo $email ?> </h2>
        <h2> message :<?php echo $message ?> </h2>    
    </section>
<h1><a href="php/day-4/header.php"> link</a></h1>
    
 </body>
 </html>


 