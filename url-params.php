<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Parameters ( GET vs POST)</title>
</head>

<body>
    <form action="url-params.php" method="get">
        Name: <input type="text" name="name">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <?php echo $_GET["name"]; ?>
    <?php echo $_POST["password"]; ?>
</body>

</html>