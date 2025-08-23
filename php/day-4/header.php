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

    header {
        display: flex;
        padding: 10px 20px;
        align-items: center;
        justify-content: space-between;
        background-color: antiquewhite;
    }

    .leftside {
        gap: 10px;
        display: flex;
        align-items: center;
    }

    .leftside img:hover {
        background: #0000003b;


    }

    .img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 2px solid #007bff;
    }

    .h1 {
        margin: 0;
        font-size: 24px;
        color: #000000;
    }

    .rightside ul {
        gap: 20px;
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
    }

    .rightside a {
        color: #0920cf;
        font-weight: bold;
        text-decoration: none;
    }

    .rightside a:hover {
        background-color: #f1f1f1;
        color: #1f5ce999;
        font-size: 20px;
    }

    @media (max-width: 600px) {
        header {
            background-color: #0f0351;
        }

        .leftside h1 {
            color: #f1f1f1;
            font-size: 15px;
        }

        .img {
            border: 2px solid #f3f4f4;
        }

        .rightside li a {
            font-size: 12px;
            color: aqua;
        }

        .rightside a:hover {
            background-color: #0f0351;
            color: #16f15f;
            font-size: 12px;
        }
    }
</style>

<body>
    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $img = $_POST["img"];


    ?>

    <header>
        <div class="leftside">
            <img class="img" src="<?php echo $img ?>" alt="Profile" />
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
    </header>


    <section>
        <h2> email :<?php echo $email ?> </h2>
        <h2> message :<?php echo $message ?> </h2>     
    </section>


</body>

</html>