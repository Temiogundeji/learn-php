<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with strings</title>
</head>

<body>
    <?php
    $phrase = "Giraffe Academy<br>";
    echo str_replace("ffe", "Panda", $phrase);
    echo substr($phrase, 8, 3);
    
?>
</body>

</html>