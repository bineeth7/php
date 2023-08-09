<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body> 
        <!-- constructors -->
        <!-- basically a fuction get call
        whenever we create an object
        of the class -->
        <!-- function __construct(){
                    
                } -->
        <?php
        class Book {   //class: blueprint of objects 
                 var $title;
                 var $author;
                 var $pages;

                 function __construct($name){  //constructor
                    echo "$name<br>";
                 }
            }
            $book1 = new Book("Bineeth");  //object: instance of a class
            $book1->title = "Harry Potter";
            $book1->author = "JK Rowling";
            $book1->pages = 400;

            $book2 = new Book("Jinshu");  //object: instance of a class
            $book2->title = "Lord of the Rings";
            $book2->author = "Tolkien";
            $book2->pages = 700;  

            echo $book1->title;
            echo $book2->title;
        ?>
    </body>
    
</html>