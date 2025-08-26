<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Forms Example</title>

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
            margin: 42px 230px;
            ;
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

        .result {
            max-width: 600px;
            margin: 0 20px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .result h1 {
            font-size: 18px;
            margin: 10px 0;
        }

        #contact-container {
            background: #dbdbdb;
            margin: 100px 100px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.877);
        }

        .section {
            display: flex;
            padding: 0 250px;
        }

        #input {
            /* margin-left:35px ; */
            width: 200px;
            height: 100px;
            padding: 1;
            border: none;
        }

        #container {
            margin: 20px 0px;
            padding: 0px 20px;
            font-size: 20px;
        }

        #container form {
            /* display: flex; */
            gap: 15px;
            align-items: center;
        }

        #container label {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .f1 .S1 {
            padding: 20px;
        }

        .butt {
            width: 100%;
            height: 100px;

        }
    </style>

</head>

<body>


    <!-- #section1 -->
    <section id="section1" class="section"> no.1
        <div class="contact-container">
            <form action="#section1" method="post">
                <input type="text" name="name" placeholder="Enter name">
                <button type="submit" name="submit_name">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_name'])) {
                $name = $_POST["name"];
                if (preg_match("/^[a-zA-Z\s]+$/", $name)) {
                    echo htmlspecialchars($name);
                } else {
                    echo "<span style='color:red;'>Invalid name</span>";
                }
            }
            ?>
        </div>
    </section>
    <hr>

    <!-- #section2 -->
    <section id="section2" class="section"> no.2
        <div class="contact-container">
            <form action="#section1" method="post">
                <input type="number" name="number" placeholder="Enter number">
                <button type="submit" name="submit_number">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_number'])) {
                $number = $_POST["number"];
                echo htmlspecialchars($number);
            }
            ?>
        </div>
    </section>
    <hr>

    <!-- #section3 -->
    <section id="section3" class="section"> no.3
        <div class="contact-container">
            <form action="#section2" method="post">
                <input type="email" name="email" placeholder="Enter email">
                <button type="submit" name="submit_email">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_email'])) {
                $email = $_POST["email"];
                if (preg_match("/^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
                    echo "<a style='color:#004794;' href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a>";
                } else {
                    echo "<span style='color:red;'>Invalid email format</span>";
                }
            }
            ?>
        </div>
    </section>
    <hr>


    <!-- #section4 -->
    <section id="section4" class="section"> no.4
        <div class="contact-container">
            <form action="#section3" method="post">
                <input type="tel" name="mobile_no" placeholder="Enter mobile no">
                <button type="submit" name="submit_mobile_no">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_mobile_no'])) {
                $mobile_no = $_POST["mobile_no"];
                if (preg_match("/^[0-9]{10}$/", $mobile_no)) {
                    echo '<a href="https://wa.me/91' . htmlspecialchars($mobile_no) . '" target="_blank">91-' . htmlspecialchars($mobile_no) . '</a>';
                } else {
                    echo "<span style='color:red;'>Invalid Mobile Number (10 digits required)</span>";
                }
            }
            ?>

        </div>
    </section>
    <hr>

    <!-- #section5 -->
    <section id="section5" class="section"> no.5
        <div class="contact-container">
            <form action="#section4" method="post">
                <textarea name="message" placeholder="Enter your message here..." rows="4" cols="20"></textarea>
                <button type="submit" name="submit_message">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_message'])) {
                $message = trim($_POST["message"]);
                if (!empty($message)) {
                    echo "<span style='color:#004794'> " . htmlspecialchars($message) . "</span>";
                } else {
                    echo "<span style='color:red;'>Message cannot be empty</span>";
                }
            }
            ?>
        </div>
    </section>
    <hr>

    <!-- #section6 -->
    <section id="section6" class="section"> no.6
        <div class="contact-container" style="padding: 55px;">
            <form action="#section5" method="post">
                <input type="date" name="date" placeholder="Enter date">
                <button type="submit" name="submit_date">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_date'])) {
                $date = $_POST["date"];
                if (!empty($date)) {
                    if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
                        echo "<b>Date:</b><span style='color:green;'> " . $date . "</span>";
                    } else {
                        echo "<span style='color:red;'>Invalid date format</span>";
                    }
                } else {
                    echo "<span style='color:red;'>Date cannot be empty</span>";
                }
            }
            ?>
        </div>
    </section>
    <hr>

    <!-- #section7 -->
    <section id="section7" class="section"> no.7
        <div class="contact-container" id="containe" style="width: 300px;">
            <div id="container">
                <form action="#section6" method="post">
                    <div class="fS" style="display: flex;">
                        <div class="f1">
                            <label>Option1<input type="radio" name="radio" value="Option 1"></label>
                            <label>Option2<input type="radio" name="radio" value="Option 2"></label>
                            <label>Option3<input type="radio" name="radio" value="Option 3"></label>
                            <label>Option4<input type="radio" name="radio" value="Option 4"></label>
                        </div>
                        <div class="S1">
                            <label>Hii: <input type="checkbox" name="checkbox[]" value="hii"></label>
                            <label>By: <input type="checkbox" name="checkbox[]" value="by"></label>
                            <label>Hello: <input type="checkbox" name="checkbox[]" value="hello"></label>
                            <label>Welcome: <input type="checkbox" name="checkbox[]" value="welcome"></label>
                        </div>
                    </div>
                    <button type="submit" name="submit_checkbox">Click</button>
                </form>
            </div>

        </div>

        <div id="contact-container">
            <b>Output:</b><br> <br>
            <?php
            if (isset($_POST['submit_checkbox'])) {
                if (!empty($_POST['checkbox'])) {
                    $selected = $_POST['checkbox'];
                    echo "<b>Checkbox:</b><span style='color:green;'>  " . implode(", ", array_map('htmlspecialchars', $selected)) . "</span>";
                } elseif (!empty($_POST['radio'])) {
                    echo "<b>Radio:</b><span style='color:green;'> " . htmlspecialchars($_POST['radio']) . "</span>";
                } else {
                    echo "<span style='color:red;'>Please select at least one option.</span>";
                }
            }
            ?>



        </div>
    </section>
    <hr>

    <!-- #section8 -->
    <section id="section8" class="section"> no.8
        <div class="contact-container" style="padding:20px 72px;">
            <form action="#section7" method="post">
                <input id="input" type="color" name="color"> <br>
                <button type="submit" name="submit_color">Click</button>
            </form>
        </div>

        <div id="contact-container">
            <b>Output:</b>
            <?php
            if (isset($_POST['submit_color'])) {
                $color = $_POST['color'];
                if (!empty($color)) {
                    echo "<span style='color:$color;'> $color</span>";
                    echo "<div  style='width:200px; height:100px; background:$color; border:1px solid #000; padding:1; border:none;' ></div>";
                } else {
                    echo "<span style='color:red;'>Please select a color</span>";
                }
            }
            ?>
            <style>
                #section8 {
                    background-color:
                        <?php echo $colo ?>
                    ;
                }
            </style>
        </div>
    </section>
    <hr>


    <!-- #section9 -->
    <section id="section9" class="section">no.9
        <div class="contact-container" style="padding: 33px;">
            <form action="#section8" method="post">
                <input type="datetime-local" name="datetime" placeholder="Select Date & Time">
                <button type="submit" name="submit_datetime">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_datetime'])) {
                $datetime = $_POST["datetime"];
                if (!empty($datetime)) {
                    echo "<span style='color:green;'>: " . htmlspecialchars($datetime) . "</span>";
                } else {
                    echo "<span style='color:red;'>Please select a date and time</span>";
                }
            }
            ?>
        </div>
    </section>
    <hr>

    <!-- #section10 -->
    <section id="section10" class="section">no.10
        <div class="contact-container" style="padding: 0 13px;">
            <form action="#section9" method="post">
                <input type="text" name="name" placeholder="Your Name" style="padding: 8px 5px;">
                <input type="image" name="submit_img" src="send.png" alt="Send" width="40" height="50">

                <!-- <input type="image" name="submit_img" src="send.png" alt="Send" width="50" height="50"><br> -->
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br>
            <?php
            // image-submit पर ये दो keys आती हैं: submit_img_x, submit_img_y
            if (isset($_POST['submit_img_x'])) {
                $name = $_POST['name'] ?? '';
                if (!empty($name)) {
                    echo "<span style='color:green;'>Name added: " . htmlspecialchars($name) . "</span>";
                } else {
                    echo "<span style='color:red;'>Please enter a name</span>";
                }
            }
            ?>
        </div>
    </section>
    <hr>



    <!-- #section11 -->
    <section id="section11" class="section">no.11
        <div class="contact-container">
            <form action="#section10" method="post" enctype="multipart/form-data">
                <input type="file" name="img" accept="image/*"> <br>
                <hr>
                <button type="submit" name="submit_image">Click</button>
            </form>
        </div>

        <div id="contact-container" class="abd">
            <b>Output:</b><br>
            <?php
            if (isset($_POST['submit_image'])) {
                if (!empty($_FILES['img']['name'])) {
                    $img = $_FILES['img']['name'];
                    $tmp = $_FILES['img']['tmp_name'];

                    move_uploaded_file($tmp, $img);

                    echo "<p style='color:green;'></p>";
                    echo "<img src='" . htmlspecialchars($img) . "' alt='Uploaded Image' style='max-width:200px; height:60px; border:1px solid #ccc; margin-top:10px;'>";
                } else {
                    echo "<span style='color:red;'>Please select an image!</span>";
                }
            }
            ?>

        </div>
        <div class="ten-eleven">
            <style>
                .ten-eleven {
                    margin-top: 80px;
                    height: 100px;
                    background-size: cover;
                    background-position: center;
                    <?php if ($img) { ?>
                        background-image: url('<?php echo htmlspecialchars($img); ?>');
                    <?php } ?>
                }
            </style>
            <br><br><br><br>
            <h1>......................</h1>
        </div>
    </section>
    <hr>


    <!-- #section12 -->
    <section id="section12" class="section"> no.12
        <div class="contact-container" style="padding: 5px 30px;">
            <form action="#section12" method="post" style="margin-top: 20px;">
                <input type="password" name="password1" placeholder="Enter password">
                <button type="submit" name="submit_password1">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_password1'])) {
                $password1 = $_POST["password1"];
                if ($password1) {
                    // You need echo to display the string
                    echo "Password:<span style='color:green;'> " . htmlspecialchars($password1) . "</span>";
                } else {
                    echo "<span style='color:red;'>Password not entered</span>";
                }
            }
            ?>
        </div>
    </section>

    <hr>

    <!-- #section13 -->
    <section id="section13" class="section"> no.13
        <div class="contact-container" style="padding:35px;">
            <form action="#section12" method="post">
                <input type="password" name="password_srong" placeholder="Enter_srong_password">
                <button type="submit" name="submit_srong_password">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_srong_password'])) {
                $password_srong = $_POST["password_srong"];

                // Regex: Start with Capital, then small letters, must include @, #, $, or %
                if (preg_match("/^[A-Z][a-z]+.*[@#$%].*$/", $password_srong)) {
                    echo "Password:<span style='color:green;'> " . htmlspecialchars($password_srong) . "</span>";
                } elseif (!empty($password_srong)) {
                    echo "<span style='color:red;'>Start with Capital, then small letters, and include @ # $ % </span>";
                } else {
                    echo "<span style='color:red;'>Password not entered</span>";
                }
            }
            ?>

        </div>
    </section>
    <hr>


    <!-- #section14 -->
    <section id="section14" class="section">no.14
        <div class="contact-container" style="padding:35px;">
            <form action="#section13" method="post" class="search-form" onsubmit="return false;">
                <input type="search" name="search" id="search" placeholder="Type to search..." class="search-input">
                <button type="submit" name="submit_search" class="search-btn" onclick="searchSections()">Click</button>
            </form>
        </div>

        <div id="contact-container">
            <b>Output:</b><br><br>
            <div class="search-output" id="search-output">
                <?php
                if (isset($_POST['submit_search'])) {
                    $search = trim($_POST['search']); // Remove extra spaces
                    if (!empty($search)) {
                        echo "<span style='color:green;'>You searched for: " . htmlspecialchars($search) . "</span>";
                    } else {
                        echo "<span style='color:red;'>Please enter something to search!</span>";
                    }
                }
                ?>
            </div>
        </div>

        <script>
            function searchSections() {
                let input = document.getElementById('search').value.trim().toLowerCase();
                let outputDiv = document.getElementById('search-output');

                if (input === '') {
                    outputDiv.innerHTML = "<span style='color:red;'>Please enter something to search!</span>";
                    return;
                }

                let sections = document.querySelectorAll('section');
                let matches = [];

                sections.forEach(section => {
                    let id = section.id.toLowerCase();
                    let className = section.className.toLowerCase();
                    let text = section.innerText.toLowerCase();

                    if (id.includes(input) || className.includes(input) || text.includes(input)) {
                        matches.push(section);
                    }
                });

                if (matches.length > 0) {
                    let html = `<span style="color:green;">Found ${matches.length} match(es):</span><br>`;
                    matches.forEach(section => {
                        let displayName = section.id || section.className || "Unnamed Section";
                        html += `<a href="#" onclick="return scrollToSection(event, '${section.id}')" style="display:block; color:blue; margin-top:5px;">${displayName}</a>`;
                    });
                    outputDiv.innerHTML = html;
                } else {
                    outputDiv.innerHTML = "<span style='color:red;'>No matching section found!</span>";
                }
            }

            function scrollToSection(event, sectionId) {
                event.preventDefault(); // ✅ Stop page from going to top
                let section = document.getElementById(sectionId);
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                    section.style.border = "3px solid red"; // highlight
                    setTimeout(() => section.style.border = "", 2000);
                }
                return false; // ✅ prevent link default
            }
        </script>
    </section>
    <hr>

    <!-- #section15 -->
    <section id="section15" class="section"> no.15
        <div class="contact-container" style="padding:35px;">
            <form action="#section14" method="post">
                <input type="url" name="website" placeholder="https://example.com">
                <button type="submit" name="submit_website">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_website'])) {
                $website = trim($_POST["website"]);
                if (!empty($website)) {
                    // अगर user सिर्फ domain डाले जैसे google.com, http जोड़ देंगे
                    if (!preg_match("/^https?:\/\//", $website)) {
                        $website = "https://" . $website;
                    }
                    echo "<span style='color:green;'>Website: <br><a href='" . htmlspecialchars($website) . "' target='_blank'>" . htmlspecialchars($website) . "</a></span>";
                } else {
                    echo "<span style='color:red;'>Website not entered</span>";
                }
            }
            ?>

        </div>
    </section>
    <hr>


    <!-- #section16 -->
    <section id="section16" class="section"> no.16
        <div class="contact-container" style="padding:35px;">
            <form id="google-form-15" onsubmit="return false;">
                <input type="search" name="google_search" id="google_input_16" placeholder="Type to search...">
                <button type="submit" onclick="googleSearch16()">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <div id="search_output_16"></div>
        </div>
        <script>
            function googleSearch16() {
                const input = document.getElementById('google_input_16').value.trim();
                const output = document.getElementById('search_output_16');

                if (input !== "") {
                    // पहले output box में दिखाओ
                    output.innerHTML = "<span style='color:green;'>You searched for: <a href='https://www.google.com/search?q="
                        + encodeURIComponent(input)
                        + "' target='_blank'>"
                        + input
                        + "</a></span>";


                    // 10 सेकंड बाद Google search open
                    setTimeout(() => {
                        const url = "https://www.google.com/search?q=" + encodeURIComponent(input);
                        window.location.href = url; // same tab
                    }, 10000); // 10 सेकंड
                } else {
                    output.innerHTML = "<span style='color:red;'>Please enter something to search</span>";
                }
            }
        </script>

    </section>
    <hr>

    <!-- #section17 -->
    <section id="section17" class="section"> no.17
        <div class="contact-container" style="padding:35px;">
            <form action="#section16" method="post">
                <?php
                // हर बार अलग user_id generate करें
                $user_id = rand(100000, 999999);
                ?>
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <input type="text" name="username" placeholder="Enter username">
                <button type="submit" name="submit_hidden">Click</button>
            </form>
        </div>
        <div id="contact-container">
            <b>Output:</b><br><br>
            <div>
                <?php
                if (isset($_POST['submit_hidden'])) {
                    $user_id = $_POST['user_id'];       // hidden field
                    $username = trim($_POST['username']);

                    echo "<div style='color:green; font-weight:bold;'>";
                    echo "User ID (hidden): " . htmlspecialchars($user_id) . "<br>";
                    if (!empty($username)) {
                        echo "Username: " . htmlspecialchars($username);
                    } else {
                        echo "<span style='color:red;'>Please enter a username</span>";
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>
    <hr>

    <!-- #section18 -->
    <section id="section18" class="section">no.18
        <?php
        if (isset($_POST['submit_img'])) {
            if (!empty($_FILES['image']['name'])) {
                $image = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmp, $image);
            }
        }
        ?>
        <div class="contact-container">
            <form action="#section18" method="post" enctype="multipart/form-data">
                <input type="file" name="image" accept="image/*"> <br><br>
                <button type="submit" name="submit_img" style="border:none; background:none; cursor:pointer;">
                    <!-- <img src="send.png" alt="Send" width="250" height="50"> -->
                    <img class="butt" src="<?php echo !empty($image) ? htmlspecialchars($image) : 'send.png'; ?>"
                        alt="Send" width="250" height="50">
                </button>
            </form>
        </div>

        <div id="contact-container" class="abd">
            <b>Output:</b><br><br>
            <?php
            if (isset($_POST['submit_img'])) {
                if (!empty($_FILES['image']['name'])) {
                    $image = $_FILES['image']['name'];
                    $tmp = $_FILES['image']['tmp_name'];

                    // Upload file to same folder
                    move_uploaded_file($tmp, $image);

                    // Show uploaded image
                    echo "<img src='" . htmlspecialchars($image) . "' alt='Uploaded Image' style='width: 100%;height: 100px;  border:1px solid #ccc; margin-top:10px;'>";
                } else {
                    echo "<span style='color:red;'>Please select an image!</span>";
                }
            }
            ?>
        </div>
    </section>
    <hr>





</body>

</html>






<!-- <input type="button" value="">button -->
<!-- <input type="checkbox" name="" id=""> -->
<!-- <input type="color" name="" id=""> -->
<!-- <input type="date" name="" id=""> -->
<!-- <input type="datetime" name="" id=""> -->
<!-- <input type="datetime-local" name="" id=""> -->
<!-- <input type="email" name="" id=""> -->
<!-- <input type="file" name="" id=""> -->
<!-- <input type="hidden" name=""> -->
<!-- <input type="image" src="" alt=""> -->
<!-- <input type="month" name="" id=""> -->
<!-- <input type="number" name="" id=""> -->
<!-- <input type="password" name="" id=""> -->
<!-- <input type="radio" name="" id=""> -->
<!-- <input type="reset" value=""> -->
<!-- <input type="search" name="" id=""> -->
<!-- <input type="submit" value=""> -->
<!-- <input type="tel" name="mobile_no" pattern="[0-9]{10}" placeholder="Enter 10-digit mobile number"> -->

<!-- <input type="text" name="" id=""> -->
<!-- <input type="time" name="" id=""> -->
<!-- <input type="url" name="" id=""> -->
<!-- <input type="week" name="" id=""> -->