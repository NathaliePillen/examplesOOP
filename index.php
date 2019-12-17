<?php

include 'person.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Exercise</title>
</head>
<body>

<?php
    $person1 = new Person("nathalie","blue",44);
    //echo $person1->name;
    echo $person1->eyeColor . "<br>";
    echo $person1->age . "<br>";


    //destroy an object that you've created
    //unset($person1);


    //because private use a method to return the value
    echo $person1->getName();

    echo Person::$drinkingAge;
    Person::setDrinkingAge(18);
    echo Person::$drinkingAge;
?>

    
</body>
</html>