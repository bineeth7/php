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
        <!-- Inheritance -->
        <!-- A class can inherit all of the attributes 7 functionality
        from another class -->
        <?php
            class Chef {
                function makeChicken(){
                    echo "The chef makes chicken <br>";
                }
                function makeSalad(){
                    echo "The chef makes salad <br>";
                }
                function makeSpecialDish(){
                    echo "The chef makes bbq ribs <br>";
                }
            }
            class italianChef extends Chef{
                function makePasta(){
                    echo "the chef makes pasta";
                }
                function makeSpecialDish(){ //overriding the makeSpecialDish function in Chef class
                    echo "The chef makes chicken parm";
                }

            }
            $chef = new Chef();
            $chef->makeSpecialDish();
            $italianChef = new ItalianChef();
            $italianChef->makeSpecialDish();
        ?>
    </body>
    
</html>
