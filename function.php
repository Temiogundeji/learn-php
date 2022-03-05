<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
</head>

<body>
    <?php
        function sayHi($name, $age) {
            echo "Hello $name, you are $age years old <br>" ;
        }

        function cube($num) {
            return $num * $num * $num;
        }

        $cubeResult = cube(4);
        echo $cubeResult;

        sayHi("Olamide", 20);
        sayHi("Yinka", 22);
        sayHi("Oscar", 24);
    ?>
</body>

</html>