<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including PHP</title>
</head>

<body>
    <?php
      $title = "This is my first post!";
      $author = "Mike";
      $wordCount = 400;

      include "./includes/article-header.php";
      include "./includes/useful-tools.php";

      sayHi("Yusuff");
      echo $feetInMile;
    ?>
</body>

</html>