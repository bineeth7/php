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
<!-- While loop -->
<!-- check condition first & execute loop body -->
        <?php
           $index = 6;
           do{   
                echo "$index <br>"; // execute loop body first 7 then check the condition
                $index++;
           } while($index <= 5);        
        ?>
    </body>
    
</html>