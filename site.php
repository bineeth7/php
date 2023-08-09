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
        <!-- Object Functions -->
        <!-- we can define inside of a class and
        different object sof that class can use it -->
        <!-- tell us the info or modify the current object -->
        <?php
        class Student {   
            var $name;
            var $major;
            var $gpa;
                 function __construct($name, $major, $gpa){ 
                   $this->name = $name;
                   $this->major = $major;
                   $this->gpa = $gpa;
                 }
                 function hasHonors(){
                    if($this->gpa >= 3.5){
                        return "true";
                    }else{
                        return "false";
                    }
                 }
            }
            $student1 = new Student("Bineeth", "Science", 3);
            $student2 = new Student("Jinshu", "Computer", 3.5);
            echo $student1->hasHonors();
/echo $student2->hasHonors();

                    ?>
    </body>
    
</html>