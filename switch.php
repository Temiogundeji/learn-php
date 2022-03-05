<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>

<body>
    <form action="switch.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        switch ($grade) {
            case 'A':
                # code...
                echo "You are a scholar";
                break;
            case 'B':
                echo "You have a good result";
                break;
            case 'C':
                echo "You have a fair result";
                break;
            case 'D':
                echo "You have a bad result";
                break;
                    break;
            case 'F':
                echo "You FAILED WOEFULLY!";
                break;
            default:
                # code...
                echo "You've entered an invalid grade!";
                break;
        }
    ?>
</body>

</html>
