<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
</head>
<body>
    <?php

    // variable
    // 1. A variable starts with the $ sing.
    // 2. A variable name must start with a letter or the 
    //     underscore character.
    // 3. A variable name can't start with a number.
    // 4.Variable name are case-sensitive. 
    // 5.You can't use special character

    // $age = 10;
    // $_age = 10;
    // $age4 = 10;
    // $AGE = 20;
 
    $food = "pizza";
    $color = "Black";
    $country = "Bangladesh";
    $age = "21";
    echo 'My Name Is Al-Mumeetu Saikat </br>';
    echo 'I love to eat '.$food;
    echo '</br> My favorite color is ' .$color;
    echo '</br> I am form ' .$country;
    echo '</br> I am ' .$age .' years old </br>';

    // PHP echo and Print Statements

    $x = 3000;
    $y = 4000;

    echo  $x + $y."</br>";
    print  $x + $y."</br>";

    print $food."</br>";
    $foods = print('Drinks');

    echo $foods."</br>";

    $name = 'Saikat';
    $name1 = "it's me";
    $age = 30;
    $age1 = 30.3;
    $religion = true;

    var_dump($name);
    var_dump($name1);
    var_dump($age);
    var_dump($age1);
    var_dump($religion);
    var_dump($age1);


    


    
    ?>
</body>
</html>