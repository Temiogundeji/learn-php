<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>

<body>
    <?php
        $names = array("Yusuff", "Habeeb", "Isiak", "Muiizz");
        for ($i=0; $i < count($names); $i++) { 
            echo "$names[$i] <br>";
        }
    ?>
</body>

</html>