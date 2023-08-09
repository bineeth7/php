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

                 function __construct($aTitle, $aAuthor, $aPages){  //constructor
                    $this->title = $aTitle; //keyword for the current object getting created
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                 }
            }
            $book1 = new Book("Harry Potter","JK Rowling",400);  //object: instance of a class
            $book1->title = "Hunger Games"; // can be updates also
            $book2 = new Book("Lord of the Rings","Tolkien",700);  //object: instance of a class 
        echo $book1->title;
        ?>
    </body>
    
</html>