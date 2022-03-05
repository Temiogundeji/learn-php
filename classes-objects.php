<html>

<head>
    <title>Classes and Objects</title>
</head>

<body>
    <?php
        class Book {
          var $title;
          var $author;
          var $pages;

          function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
          }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book1->title = "Hunger Games";
        echo "$book1->title <br>";

        $book2 = new Book("Sunan Abu Dahood", "Abu Dahood", 300);
        echo "$book2->title <br>" ;

        $book3 = new Book("Lord of the Ring", "Tolkien", 100);
        echo "$book3->title <br>" ;
      ?>
</body>

</html>