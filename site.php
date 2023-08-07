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
<!-- Building a better calculator -->
        <!-- step = "0.001" take 3 decimal points of the numner (type="number") -->
        <form action="site.php" method="post">
          First num: <input type="number" step="0.001" name="num1"><br>
          Op: <input type="text" name="op"><br>
          Second num: <input type="number" step="0.001" name="num2"><br>
            <input type="submit"> 
        </form>
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];
            if($op == "+"){
                echo $num1 + $num2;
            }elseif($op == "-"){
                echo $num1 - $num2;
            }elseif($op == "*"){
                echo $num1 * $num2;
            }elseif($op == "/"){
                echo $num1 / $num2;
            }else{
                echo "Invalid opertor";
            }
             
        ?>
    </body>
    
</html>