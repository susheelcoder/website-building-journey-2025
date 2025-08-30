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

    .hr {
        margin-right: 100%;
    }
    .tringa{
        display: flex;
        
    }
    .div-tringa{
      background-color: #0000FF;
      margin-top: 0px;
      margin: 0 5px 5px 5px;
        padding:20px;
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
                <button name="Blue" value="blue" style="background-color:Blue ; color:white">Blue</button>
            </form>
            <br>
            <?php
            if (isset($_POST['Blue'])) {
                $Blue = $_POST['Blue'];
                if (!empty($Blue)) {
                    // echo "color:<button   style='background-color:$Blue; color:$Blue;'> $Blue</button>"; 
                    // echo "<span  style='color:$Blue;'> $Blue</span>";
                }
            }
            ?>
        </row-1>
        <hr>
        <!--====== column-2  row-2 =====-->
        <?php
        if (isset($_POST['black'])) {
            $black = $_POST['black'];
        }

        ?>
        <row-2 class="row" style="background-color: <?php echo $black ?>;">
            <form action="" method="post">
                <button name="black" value="#FF0000">Red</button>
                <button name="black" value="#0000FF">Blue</button>
                <button name="black" value="#008000">Green</button>
                <button name="black" value="#FFFF00">Yellow</button>
                <button name="black" value="#FFA500">Orange</button>
                <button name="black" value="#800080">Purple</button>
                <button name="black" value="#FFC0CB">Pink</button>
                <button name="black" value="#A52A2A">Brown</button>
                <button name="black" value="#000000">Black</button>
                <button name="black" value="#FFFFFF">White</button>

                <!-- 10 More Colors -->
                <!-- <button name="black" value="#00FFFF">Cyan</button>
                <button name="black" value="#808080">Gray</button>
                <button name="black" value="#FFD700">Gold</button>
                <button name="black" value="#C0C0C0">Silver</button>
                <button name="black" value="#800000">Maroon</button>
                <button name="black" value="#008080">Teal</button>
                <button name="black" value="#000080">Navy</button>
                <button name="black" value="#FF4500">OrangeRed</button>
                <button name="black" value="#ADFF2F">GreenYellow</button>
                <button name="black" value="#4B0082">Indigo</button> -->

            </form>
            <br>
            <?php
            if (isset($_POST['black'])) {
                $black = $_POST['black'];
                if (!empty($black)) {
                    // echo "color:<button   style='background-color:$black; color:$black;'> $black</button>";
                    // echo "<span  style='color:$black;'> $black</span>";
                }
            }
            ?>
        </row-2>
        <hr>
        <!--====== column-2  row-3 =====-->
        <?php
        if (isset($_POST['colorbox'])) {
            $colorbox = $_POST['colorbox'];
        }

        ?>
        <row-3 class="row" style="background-color: <?php echo $colorbox ?>;">
            <form action="" method="post">
                <button name="colorbox" value="#FF0000" style="background-color:#FF0000; color:#FFFFFF;">Red</button>
                <button name="colorbox" value="#0000FF" style="background-color:#0000FF; color:#FFFFFF;">Blue</button>
                <button name="colorbox" value="#008000" style="background-color:#008000; color:#FFFFFF;">Green</button>
                <button name="colorbox" value="#FFFF00" style="background-color:#FFFF00; color:#000000;">Yellow</button>
                <button name="colorbox" value="#FFA500" style="background-color:#FFA500; color:#000000;">Orange</button>
                <hr class="hr">
                <button name="colorbox" value="#800080" style="background-color:#800080; color:#FFFFFF;">Purple</button>
                <button name="colorbox" value="#FFC0CB" style="background-color:#FFC0CB; color:#000000;">Pink</button>
                <button name="colorbox" value="#A52A2A" style="background-color:#A52A2A; color:#FFFFFF;">Brown</button>
                <button name="colorbox" value="#000000" style="background-color:#000000; color:#FFFFFF;">Black</button>
                <button name="colorbox" value="#FFFFFF"
                    style="background-color:#FFFFFF; color:#000000; border:1px solid #000;">White</button>
                <hr class="hr">
                <button name="colorbox" value="#00FFFF" style="background-color:#00FFFF; color:#000000;">Cyan</button>
                <button name="colorbox" value="#808080" style="background-color:#808080; color:#FFFFFF;">Gray</button>
                <button name="colorbox" value="#FFD700" style="background-color:#FFD700; color:#000000;">Gold</button>
                <button name="colorbox" value="#008080" style="background-color:#008080; color:#FFFFFF;">Teal</button>
                <button name="colorbox" value="#FF4500"
                    style="background-color:#FF4500; color:#FFFFFF;">OrangeRed</button>

            </form>
            <br>
            <?php
            if (isset($_POST['colorbox'])) {
                $colorbox = $_POST['colorbox'];
                if (!empty($color_box)) {
                    // echo "color:<button   style='background-color:$black; color:$black;'> $black</button>";
                    // echo "<span  style='color:$black;'> $black</span>";
                }
            }
            ?>
        </row-3>
        <hr>
        <!--====== column-2  row-4 =====-->
        <row-4 class="row">
            <form action="" method="post">
                <button name="color" value="Cyan" style="background-color:Cyan; color:black;">Cyan</button>
                <button name="color" value="Red" style="background-color:Red; color:white;">Red</button>
                <button name="color" value="Blue" style="background-color:Blue; color:white;">Blue</button>
                <button type="submit" name="reset_1" value="1">Reset</button>
            </form>
            <br>
            <?php
            if (isset($_POST['reset_1'])) {
                echo "<p>Color reset successfully.</p>";
            } elseif (isset($_POST['color'])) {
                $color = $_POST['color'];
                echo "Selected color: <button style='background-color:$color; color:white; padding:5px 10px;'>$color</button>";
            }
            ?>

        </row-4>
    </column-2>
    <hr>
    <!--====== column-3  =====-->
    <column-3 class="column">
        <!--====== column-3  row-1 =====-->
        <row-1 class="row">
            <i style="margin:0 10px; width:80px;">Color-box</i>
            <form method="post">
                <input type="color" name="color_box" style="margin:0 10px; width:80px;"><br>
                <button type="submit" name="submit_color_box">submit</button>
                <button type="submit" name="reset_b">reset</button>
            </form>
            <br>
            <?php
            if (isset($_POST['reset_b'])) {
                echo 'Color reset successfully.';
            } elseif (isset($_POST['submit_color_box'])) {
                $color_box = $_POST['color_box'];
                echo "Selected color: <button style='background-color:$color_box;color:$color_box; padding:2px 10px;'>$color_box</button>";
                echo "<b style='color:$color_box; padding:5px 10px;'>$color_box</b>";
            }
            ?>
        </row-1>
        <hr>
        <!--====== column-3  row-2 =====-->
        <?php
        if (isset($_POST['reset_c'])) {
        } elseif (isset($_POST['submit_box_color'])) {
            $box_color = $_POST['box_color'];
        }
        ?>
        <row-2 class="row" style='background-color:<?php echo $box_color ?>;'>
            <i style="margin:0 10px; width:80px;">Color-box</i>
            <form method="post">
                <input type="color" name="box_color" style="margin:0 10px; width:80px;"><br>
                <button name="submit_box_color">submit</button>
                <button type="submit" name="reset_c">reset</button>
            </form>
            <br>
            <?php
            if (isset($_POST['reset_c'])) {
                echo 'Color Reset successfully.';
            } elseif (isset($_POST['submit_box_color'])) {
                echo "<b style='color:white'; >Color Submit successfully.</b>";
            }
            ?>
        </row-2>
        <hr>
        <!--====== column-3  row-3 =====-->
        <row-3 class="row">
            <form action="" method="post">
                <label>
                    <input type="radio" name="color_so" value="#f1fe63ff"> Yello
                </label>
                <label>
                    <input type="radio" name="color_so" value="#df6262"> Red
                </label>
                <label>
                    <input type="radio" name="color_so" value="#29ff74"> Green
                </label>
                <label>
                    <input type="radio" name="color_so" value="#a41ce8"> Purple
                </label>
                <br><br>
                <button type="submit" name="submit_so">Submit</button>
                <button type="submit" name="reset_so">Reset</button>
            </form>

            <?php
            if (isset($_POST["reset_so"])) {
                echo "<p>Color reset successfully.</p>";
            } elseif (isset($_POST["submit_so"])) {
                if (!empty($_POST["color_so"])) {
                    $color_so = $_POST["color_so"];
                    echo "Selected Color: <button style='background-color:$color_so; color:#fff; padding:8px 12px; border:none;'>$color_so</button>";
                } else {
                    echo "<p>Please select a color.</p>";
                }
            }
            ?>

        </row-3>
        <hr>
        <!--====== column-3  row-4 =====-->
        <row-4 class="row">
            <form action="" method="post">
                <input type="radio" name="color_ro" value="#f1fe63ff" style="accent-color: #f1fe63ff;"> Yello
                <input type="radio" name="color_ro" value="#d85050ff" style="accent-color: #d90b0bff;"> Red
                <input type="radio" name="color_ro" value="#29ff74" style="accent-color: #09ff5fff;"> Green
                <input type="radio" name="color_ro" value="#a41ce8" style="accent-color: #aa05fcff;"> Purple
                <br><br>
                <button type="submit" name="submit_ro">Submit</button>
                <button type="submit" name="reset_ro">Reset</button>
            </form>

            <?php
            if (isset($_POST["reset_ro"])) {
                echo "<p>Color reset successfully.</p>";
            } elseif (isset($_POST["submit_ro"])) {
                if (!empty($_POST["color_ro"])) {
                    $color_ro = $_POST["color_ro"];
                    echo "Selected Color: <button style='background-color:$color_ro; color:#fff; padding:8px 12px; border:none;'>$color_ro</button>";
                } else {
                    echo "<p>Please select a color.</p>";
                }
            }
            ?>

        </row-4>
    </column-3>
    <hr>
    <!--====== column-4  =====-->
    <column-4 class="column">
          <!--====== column-4 row-1 =====-->
        <row-1 class="row">
            <form action="" method="post">
                Red: <input type="range" name="red" min="0" max="255" value="150" style="accent-color: red;"> <br>
                Green: <input type="range" name="green" min="0" max="255" value="0" style="accent-color: green;"> <br>
                Blue: <input type="range" name="blue" min="0" max="255" value="0" style="accent-color: blue;"> <br>
                <button type="submit" name="submit_m">Submit</button>
                <button type="submit" name="reset_m">Reset</button>
            </form>

            <?php
            if (isset($_POST['reset_m'])) {
                echo "<p>Color reset successfully.</p>";
            } elseif (isset($_POST['submit_m'])) {
                $r = $_POST['red'];
                $g = $_POST['green'];
                $b = $_POST['blue'];
                $color = "rgb($r, $g, $b)";
                echo "<div style='margin-top:5px; padding:5px; background-color:$color; color:#fff;'>
            Selected Color: $color
          </div>";
            }
            ?>

        </row-1>
        <hr>
        <!--====== column-4 row-2 =====-->
        <row-2 class="row" class="tringa">
           <div class="div-tringa"></div>
           <div class="div-tringa"></div>
           <div class="div-tringa"></div>
        </row-2>
        <hr>
        <!--====== column-4 row-3 =====-->
        <row-3 class="row">
           
        </row-3>
        <hr>
        <!--====== column-4 row-4 =====-->
        <row-4 class="row">

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