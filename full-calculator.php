<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Calculator</title>
</head>

<body>
    <form action="full-calculator.php" method="post">
        First Num:<input type="number" step="0.01" name=" num1"><br>
        OP:<input type="text" name="op"><br>
        Second Num:<input type="number" name="num2"><br>
        <input type="submit">
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        }
        elseif($op == "-"){
            echo $num1 - $num2;
        }
        elseif($op == "/"){
            echo $num1 / $num2;
        }
        elseif($op == "*"){
            echo $num1 * $num2;
        }
        else {
            echo "Invalid operator";
        }
    ?>
</body>

</html>