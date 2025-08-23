<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

        .contact-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-container input,
        .contact-container textarea {
            width: 95%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        .contact-container textarea {
            height: 120px;
            resize: none;
        }

        .contact-container button {
            width: 100%;
            background: #007bff;
            color: #fff;
            padding: 12px;
            border: none;
            font-size: 18px;
            border-radius: 6px;
            cursor: pointer;
        }

        .contact-container button:hover {
            background: #0056b3;
        }

        section {
            padding: 0 35%;
            /* margin: 100px; */
        }
    </style>

</head>

<body>

    <div class="contact-container">
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

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
</body>

</html>