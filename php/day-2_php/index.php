<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day-2_php</title>
</head>

<body>
    <h1>hii </h1>
    <?php

    $phrase = "My Name is Susheel Kumar";
    echo $phrase;
    echo "<br>";
    echo strtolower($phrase);
    echo "<br>";
    echo strtoupper($phrase);
    echo "<br>";
    echo strlen($phrase);
    echo "<br>";
    echo $phrase[0] ; // Output: M
    echo "<br>";
    echo $phrase[0] . $phrase[1]; // Output: My
    echo "<br>";
    echo $phrase[0] . $phrase[1]. $phrase[2]. $phrase[3]. $phrase[4]. $phrase[5]. $phrase[6]. $phrase[7]
       . $phrase[8]. $phrase[9]. $phrase[10]. $phrase[11]. $phrase[12]. $phrase[13]. $phrase[14]. $phrase[15]
       . $phrase[16] . $phrase[17]. $phrase[18]; echo "<br>";


    ?>

</body>

</html>