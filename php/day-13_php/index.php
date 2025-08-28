<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Color World</title>
</head>
<style>
    body {
        margin: 0 200px;

    }

    .column {
        display: flex;
    }

    .row {
        background-color: #302e2e29;
        /* background-color: #f5ed05ff; */
        padding: 30px;
        height: 100px;
        width: 300px;
    }
</style>

<body>
    <h1>Welcome to Color World</h1><br>
    <hr>
    <!--====== column-1  =====-->
    <column-1 class="column">
        <!--====== column-1  row-1 =====-->
        <row-1 class="row">
            <form action="" method="post">
                <button name="Green" value="green">Green</button>
            </form>
            <br>
            <?php
            if (isset($_POST['Green'])) {
                $Green = $_POST['Green'];
                if (!empty($Green)) {
                    echo "color:<span  style='background-color:$Green; color:$Green;'> $Green</span>";
                    //    echo "<span  style='color:$Yellow;'> $Yellow</span>";
                }
            }
            ?>
        </row-1>
        <hr>
        <!--====== column-1  row-2 =====-->
        <row-2 class="row">
            <form action="" method="post">
                <button name="Yellow" value="#FFFF00">Yellow</button>
            </form>
            <br>
            <?php
            if (isset($_POST['Yellow'])) {
                $Yellow = $_POST['Yellow'];
                if (!empty($Yellow)) {
                    echo "color:<button   style='background-color:$Yellow; color:$Yellow;'> $Yellow</button>";
                    //    echo "<span  style='color:$Yellow;'> $Yellow</span>";
                }
            }
            ?>
        </row-2>
        <hr>
        <!--====== column-1  row-3 =====-->
        <row-3 class="row">
            <form action="" method="post">
                <button name="Red" value="#FF0000">Red</button>
            </form>
            <br>
            <?php
            if (isset($_POST['Red'])) {
                $Red = $_POST['Red'];
                if (!empty($Red)) {
                    echo "color:<button   style='background-color:$Red; color:$Red;'> $Red</button>";
                    echo "<span  style='color:$Red;'> $Red</span>";
                }
            }
            ?>
        </row-3>
        <hr>
        <!--====== column-1  row-4 =====-->
        <row-4 class="row">
            <?php
            if (isset($_POST['Magenta'])) {
                $Magenta = $_POST['Magenta'];
            }

            ?>
            <form action="" method="post">
                <button name="Magenta" value="#FF00FF"
                    style="background-color: <?php echo $Magenta ?>;">Magenta</button>
            </form>
            <br>
            <?php
            if (isset($_POST['Magenta'])) {
                $Magenta = $_POST['Magenta'];
                if (!empty($Magenta)) {
                    echo "color:<button   style='background-color:$Magenta; color:$Magenta;'> $Magenta</button>";
                    echo "<span  style='color:$Magenta;'> $Magenta</span>";
                }
            }
            ?>
        </row-4>
    </column-1>
    <hr>
    <!--====== column-2  =====-->
    <column-2 class="column">
        <!--====== column-2  row-1 =====-->
        <?php
        if (isset($_POST['Blue'])) {
            $Blue = $_POST['Blue'];
        }

        ?>
        <row-1 class="row" style="background-color: <?php echo $Blue ?>;">
            <form action="" method="post">
                <button name="Blue" value="blue">Blue</button>
            </form>
            <br>
            <?php
            if (isset($_POST['Blue'])) {
                $Blue = $_POST['Blue'];
                if (!empty($Blue)) {
                    echo "color:<button   style='background-color:$Blue; color:$Blue;'> $Blue</button>";
                    echo "<span  style='color:$Blue;'> $Blue</span>";
                }
            }
            ?>
        </row-1>
        <hr>

            <!--====== column-2  row-2 =====-->
             <?php  
              if (isset($_POST['Blue'])) {
                 $Blue = $_POST['Blue'];
              }
           
            ?>
        <row-2 class="row" style="background-color: <?php echo $Blue ?>;">
            <form action="" method="post">
                <button name="Blue" value="red">Blue</button>
            </form>
            <br>
            <?php
            if (isset($_POST['Blue'])) {
                $Blue = $_POST['Blue'];
                if (!empty($Blue)) {
                    echo "color:<button   style='background-color:$Blue; color:$Blue;'> $Blue</button>";
                    echo "<span  style='color:$Blue;'> $Blue</span>";
                }
            }
            ?>
        </row-2>
        <hr>
        <!-- 2 -->
        <row-3 class="row">
            <collor-box-yellow>

            </collor-box-yellow>

        </row-3>
        <hr>
        <row-4 class="row">
            <span>color</span>
            <?php if (!empty($all_color)) {
                echo "<span color style='color:$all_color;'><br> $all_color</span>";
            }
            ?>
        </row-4>

    </column-2>
    <hr>
    <column-3 class="column">
        <row-1 class="row">color-box
        </row-1>
        <hr>
        <row-2 class="row">
            hello
        </row-2>
        <hr>
        <row-3 class="row">
            hii
        </row-3>
        <hr>
        <row-4 class="row">
            byy
            gg
        </row-4>
    </column-3>
    <hr>
    <column-4 class="column">
        <row-1 class="row">color-box
            <form action="#" method="post">
                <input type="color" name="all_color"><br>
                <button name="submit_all_color">click</button>
            </form>
            <php-section>
                <?php
                if (isset($_POST['submit_all_color'])) {
                    $all_color = $_POST['all_color'];
                    if (!empty($all_color)) {
                        //    echo "<span  color style='color:$all_color;'> $all_color</span>";
                    }
                }
                ?>
                <!-- <span > ?php echo "<span  hello style='color:$all_color;'> $all_color</span>"; ?></span > -->
            </php-section>
        </row-1>
        <hr>
        <row-2 class="row">
            <span>color</span>
            <?php if (!empty($all_color)) {
                echo "<span color style='color:$all_color;'><br> $all_color</span>";
            }
            ?>
        </row-2>
        <hr>
        <!-- 2 -->
        <row-3 class="row">
            <collor-box-yellow>
                <?php
                $Yellow = isset($_POST["Yellow"]) ? $_POST["Yellow"] : '';
                ?>
                <form action="" method="post">
                    <button name="Yellow" value="yellow">Yellow</button>
                </form>
                <?php
                if (isset($_POST['Yellow'])) {
                    $Yellow = $_POST['Yellow'];
                    if (!empty($Yellow)) {
                        //    echo "<span  color style='color:$all_color;'> $all_color</span>";
                    }
                }
                ?>

                <style>
                    .button {
                        background-color:
                            <?php echo $Yellow; ?>
                        ;
                    }
                </style>
                <h1 style="color:<?php echo $Yellow; ?>;">hhh</h1>

            </collor-box-yellow>

        </row-3>
        <hr>
        <row-4 class="row">
            <form action="" method="post">
                <input type="color" name="box_color"><br>
                <button name="submit_box_color">click</button>
            </form>
            <?php
            if (isset($_POST['submit_box_color'])) {
                $box_color = $_POST["box_color"];
                if (!empty($box_color)) {
                    echo "color :<span style='background-color:$box_color;'> 
                    <span style='color:$box_color;'> $box_color</span>
                    </span>";
                    echo "<span style='color:$box_color;'> $box_color</span>";
                }
            }
            ?>
        </row-4>
    </column-4>
    <hr>



    <collor-box-yellow>
        <?php
        $Yellow = isset($_POST["Yellow"]) ? $_POST["Yellow"] : '';
        ?>
        <form action="" method="post">
            <button class="button" type="submit" name="Yellow" value="yellow">Yellow</button>
        </form>

        <style>
            .button {
                background-color:
                    <?php echo $Yellow; ?>
                ;
            }
        </style>
        <h1 style="color:<?php echo $Yellow; ?>;">hhh</h1>

    </collor-box-yellow>
    <hr>
    <collor-box-red>
        <?php
        $red = isset($_POST["red"]) ? $_POST["red"] : '';
        ?>
        <form action="" method="post">
            <button class="red" type="submit" name="red" value="red">red</button>
        </form>

        <style>
            .red {
                background-color:
                    <?php echo $red; ?>
                ;
            }
        </style>
        <h1 style="color:<?php echo $red; ?>;">hhh</h1>

    </collor-box-red>



</body>

</html>