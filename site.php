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
        <!-- for loop -->
         <!-- for($i = 1; $i <=5; $i++){
             echo "$i <br>";
         } -->
        <?php
            $luckyNumbers = array(4, 8, 14, 16, 23, 42);
            for($i = 0; $i < count($luckyNumbers); $i++){
                echo "$luckyNumbers[$i] <br>";
            }
        ?>
    </body>
    
</html>