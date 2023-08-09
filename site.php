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
        <!-- Getters & Setters -->
        <!-- get the attributes, set the attributes -->
        <!-- Special functions, we can create in our php classes
        which allow to control the acccess of people -->
        <!-- have to, the attributes of that classes -->
        <?php
        class Movie {   
            public $title;
            private $rating; // private to this class
                 function __construct($title, $rating){ 
                   $this->title = $title;
                   $this->setRating($rating);
                 }
                 function getRating(){
                    return $this->rating;
                 } 
                 function setRating($rating){
                    if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                        $this->rating = $rating;
                    }else{
                        $this->rating = "NR";
                    }
                 }       
                    }
            $avengers = new Movie("Avengers", "PG-13");
            //G, PG, PG-13, R, NR
            echo $avengers->getRating();
        ?>
    </body>
    
</html>
<!-- visibility modifier a keryword gonna tell php what code 
is able to access and use different attributes in our program 
public - visible to any other code in the prgrm (opem to everybody)
var and public are interchangable in most of the situation
public: public to the class, cannot access from outside the class-->