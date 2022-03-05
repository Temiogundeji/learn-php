<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setters and Getters</title>
</head>

<body>
    <?php
      class Movie {
        public $title;
        private $rating;

        function __construct($title, $rating){
          $this->title = $title;
          $this->setRating($rating);
        }

        function getRating(){
          return $this->rating;
        }

        function setRating($rating) {
          if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
            $this->rating = $rating;
          }
        }
      }

      $avengers = new Movie("Avengers", "PG-13");
      echo  $avengers->getRating();
    ?>
</body>

</html>
