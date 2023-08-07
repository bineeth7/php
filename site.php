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
<!-- if statements (con 't) comparison >,<,>=,<=,==,!=  -->
        <?php
           //echo max(3, 6); //predefined function max()
           function getMax($num1, $num2, $num3){
                if ($num1 >= $num2 && $num1 >= $num3){
                    //echo "$num1 is bigger";
                    return $num1;
                }elseif($num2 >= $num1 && $num2 >= $num3){
                    //echo "$num2 is bigger";
                    return $num2;
                }else{
                    return $num3;
                }
           }
          echo getMax(4999999991,77777,669969);
        ?>
    </body>
    
</html>