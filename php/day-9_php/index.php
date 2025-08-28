<?php
session_start();

// Initialize expression
if (!isset($_SESSION['expression'])) {
    $_SESSION['expression'] = '';
}

// POST request handle
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Add number or decimal
    if (isset($_POST['number'])) {
        $num = $_POST['number'];
        $exp = $_SESSION['expression'];

        // Prevent multiple dots in the same number
        if ($num === '.') {
            $parts = preg_split('/[+\-*/]/', $exp);
            $lastNum = end($parts);
            if (strpos($lastNum, '.') === false) {
                $_SESSION['expression'] .= '.';
            }
        } else {
            $_SESSION['expression'] .= $num;
        }
    }

    // Add operator (prevent double operator and first operator)
    if (isset($_POST['operator'])) {
        $op = $_POST['operator'];
        $exp = $_SESSION['expression'];
        $lastChar = substr($exp, -1);

        if ($exp !== '' && !in_array($lastChar, ['+', '-', '*', '/', '.'])) {
            $_SESSION['expression'] .= $op;
        }
    }

    // Action buttons
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'AC') {
            $_SESSION['expression'] = '';
        } elseif ($_POST['action'] == '=') {
            if ($_SESSION['expression'] !== '') {
                try {
                    $result = eval("return " . $_SESSION['expression'] . ";");
                    $_SESSION['expression'] = $result;
                } catch (Exception $e) {
                    $_SESSION['expression'] = 'Error';
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .outer-box {
            width: 260px;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .display-box {
            width: 100%;
            height: 50px;
            text-align: right;
            font-size: 20px;
            margin-bottom: 10px;
            padding-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
        }
        .button-grid button {
            padding: 15px;
            font-size: 18px;
            border: none;
            border-radius: 6px;
            background: #f0f0f0;
            cursor: pointer;
            transition: 0.2s;
        }
        .button-grid button:hover {
            background: #ddd;
        }
        .button-grid button:active {
            background: #ccc;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="outer-box">
            <input class="display-box" type="text" name="display" value="<?php echo $_SESSION['expression']; ?>" readonly>
            <div class="button-grid">
                <button type="submit" name="action" value="AC">AC</button>
                <button type="button" disabled>()</button>
                <button type="button" disabled>%</button>
                <button type="submit" name="operator" value="/">/</button>

                <button type="submit" name="number" value="7">7</button>
                <button type="submit" name="number" value="8">8</button>
                <button type="submit" name="number" value="9">9</button>
                <button type="submit" name="operator" value="*">*</button>

                <button type="submit" name="number" value="4">4</button>
                <button type="submit" name="number" value="5">5</button>
                <button type="submit" name="number" value="6">6</button>
                <button type="submit" name="operator" value="-">-</button>

                <button type="submit" name="number" value="1">1</button>
                <button type="submit" name="number" value="2">2</button>
                <button type="submit" name="number" value="3">3</button>
                <button type="submit" name="operator" value="+">+</button>

                <button type="submit" name="number" value="0">0</button>
                <button type="submit" name="number" value=".">.</button>
                <button type="reset">X</button>
                <button type="submit" name="action" value="=">=</button>
            </div>
        </div>
    </form>
</body>
</html>
