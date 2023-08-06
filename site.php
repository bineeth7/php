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
<!-- if statements -->
        <?php
            $isMale = true;
            $isTall = true; 
            if ($isMale && $isTall){    // &&  || operators 
                echo "You are a tall male";
            }elseif ($isMale && !$isTall ){   // ! negation operator
                echo "You are a short male";
            }elseif (!$isMale && $isTall){
                echo "You are not male but are tall";
            } else{
                echo "You are not male";
            }
        ?>
    </body>
    
</html>