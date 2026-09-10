<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello , World!</h1>

  <?php

    //1. if statement
    //2. if else statement
    //3. if else if statement
    //4. switch statement
    //5. Looping statements
    //6. Nested Looping
    //7. Pattern Program


    echo "<h2>PHP Basics</h2>";

    echo "<h3>1. if statement</h3>";

    $age = 18;

    if($age >= 18){
      echo "You are eligible to vote.";
    }


    echo "<h3>2. if else statement</h3>";

    $numbers = 9;

    if($numbers % 2 == 0){
      echo "$numbers is an even number.";
    } else {
      echo "$numbers is an odd number.";
    }

    echo "<h3>Nested if..else statement</h3>";

    $marks = 34;

    if($marks >= 35){
      echo "Student is Pass.<br>";

      if($marks >= 75){
        echo "Grade : A";
      }else{
        echo "Grade : B";
      }
    }else{
      echo "Student is Fail.";
    }

    echo "<h3>3. if else if statement</h3>";

    $percentage = 75;

    if($percentage >= 90){
      echo "Grade : A+";
    }elseif($percentage >= 80){
      echo "Grade : A";
    }else{
      echo "Grade : B";
    }

    echo "<h3>4. switch statement</h3>";

    $day = 8;

    switch($day){
      case 1:
        echo "Today is Monday.";
        break;
      case 2:
        echo "Today is Tuesday.";
        break;
      case 3:
        echo "Today is Wednesday.";
        break;
      case 4:
        echo "Today is Thursday.";
        break;
      case 5:
        echo "Today is Friday.";
        break;
      case 6:
        echo "Today is Saturday.";
        break;
      case 7:
        echo "Today is Sunday.";
        break;
      default:
        echo "Invalid day.";
    }

    echo "<h3>5. Looping statements</h3>";

    for($i = 1; $i <= 5; $i++){
        echo "The number is: $i <br>";
    }

    echo "<h3>6. While Loop</h3>";

    $i = 1;

    while($i <= 5){
        echo "The number is: $i <br>";
        $i++;
    }

    echo "<h3>7. Do While Loop</h3>";

    $i = 1;

    do{
        echo "The number is: $i <br>";
        $i++;
    }while($i <= 5);


    echo "<h3>8. foreach Loop</h3>";

    $colors = array("Red", "Green", "Blue");

    foreach($colors as $value){
        echo "$value <br>";
    }

    echo "<h3>9. Nested Looping</h3>";

    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= 5; $j++){
            echo $j . " ";
        }
        echo "<br>";
    }


    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "* ";
        }
        echo "<br>";
    }

  ?>
</body>
</html>