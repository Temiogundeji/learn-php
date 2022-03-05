<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <form action="associativearr.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
        //Associative array has keys while the normal array does not.
        $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+"); 
        echo $grades[$_POST["student"]];
        // for($i =0; $i < count($grades); $i++){
        //     if(!$grades[$_POST["student"]] == $grades[$i]){
        //         echo $grades[$_POST["student"]];
        //     }  
        //     else{
        //         echo "You entered the wrong value!";
        //     }
        // }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
    ?>

</body>

</html>