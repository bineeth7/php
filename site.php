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
 <!-- Functions with return types -->
        <?php 
            function cube($num){
                return $num * $num * $num; //return will breakout to the function,
                                      //line after this does not get executed.
            }                       // you can also return nothing
            //$result = cube(2);
           //echo $result;
           echo cube(2);
        ?>
    </body>
    
</html>