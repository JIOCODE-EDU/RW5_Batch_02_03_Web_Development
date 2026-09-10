<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Basic Array</li>
    <li>Indexed Array</li>
    <li>Associative Array</li>
    <li>Multi-dimensional Array</li>
    <li>Array and String Methods</li>
</ul>
<?php

  /* 1. Basic Array */

  $fruits = array("apple",  "Banana" , "orange" , "mango");

  echo "Basic Array:<br>";

  print_r($fruits);

  echo "<br><br>";

  // Accessing array value

  echo "First Element:" . $fruits[0] . "<br>";
  echo "Second Element:" . $fruits[1] . "<br>";

  echo "Total Elements:" . count($fruits) . "<br>";


  /* 2. Indexed Array */

  $students = array("Rahul" , "Amit" , "Neha" , "Raj" , "Priya");

  echo "Indexed Array:<br>";

  print_r($students);

  echo "<br><br>";

  // add element

  $students[0] = "Zeel";

  print_r($students);

  // delete element

  unset($students[1]);

  print_r($students);

  // re-indexed

  $students = array_values($students);

  echo "<br></br>";

  print_r($students);

  // Name print using loop

    echo "<br></br>";

  foreach ($students as $student){
    echo $student . "<br>";
  }

  /* 3. Associative Array */

  $student = array(
    "name" => "Rahul",
    "age" => 22,
    "course" => "PHP",
    "city" => "Surat"
  );

  echo "Associative Array";

  echo "<br></br>";

  echo "Name :" . $student["name"] . "<br>";
  echo "Age :" . $student["age"] . "<br>";
  echo "Course :" . $student["course"] . "<br>";
  echo "City :" . $student["city"] . "<br>";

  // add new key-value pair

  $student["email"] = "rahul@gmail.com";

  echo "<br><br>";

  print_r($student);

  // modify

  $student["age"] = 25;

   echo "<br><br>";

  print_r($student);

  // delete


unset($student["age"]);

   echo "<br><br>";

  print_r($student);

  // key-value pair print using loop

  echo "<br><br>";

  foreach($student as $key => $value){
    echo $key . " : " . $value . "<br>";
  }

  /* 4. Multidimensional Array */

  $students = array(
    array(
      "name" => "Rahul",
      "age" => 25,
      "course" => "Python"
    ),
    array(
      "name" => "Zeel",
      "age" => 22,
      "course" => "Javascript"
    ),
    array(
      "name" => "Priya",
      "age" => 26,
      "course" => "HTML"
    )
  );

  echo "<br><br>";

  print_r($students);

  echo "<br><br>";

  //Accessing elements

  echo "First element name :" . $students[0]["name"] . "<br>";
  echo "Second element age :" . $students[1]["age"] . "<br>";
  echo "Third element course :" . $students[2]["course"] . "<br>";

  // Print element using loop

   echo "<br><br>";


  foreach($students as $student){
    echo "First element name :" . $student["name"] . "<br>";
  echo "Second element age :" . $student["age"] . "<br>";
  echo "Third element course :" . $student["course"] . "<br>";
  }


  // Array Methods

  $numbers = array(50 , 20 , 40 , 10 , 30);

  $num = 10;

  echo "Array :";
  print_r($numbers);
  echo "<br><br>";

  // count()

  echo "Count :" . count($numbers) . "<br><br>";

  // sort() - Ascending order
  // rsort() - Descending order

  $ascending = $numbers;
  $descending = $numbers;

  sort($ascending);
  rsort($descending);

  echo "sort()";
  print_r($ascending);
  echo "<br><br>";

  echo "sort()";
  print_r($descending);
  echo "<br><br>";

  // array_push()

  $pushArray = $numbers;

  array_push($pushArray , 60 , 70 , 80);

  echo "<br><br>";

  print_r($pushArray);

  // array_pop()

  $popArray = $numbers;

  $removed = array_pop($popArray);

  echo "<br><br>";

  print_r($removed);

  echo "<br><br>";

  print_r($popArray);

  // in_array() & is_array()

   echo "<br><br>";

  if(in_array(60 , $numbers)){
    echo "Yes <br>";
  }else{
    echo "No <br>";
  }

   echo "<br><br>";

     if(is_array($num)){
    echo "Yes <br>";
  }else{
    echo "No <br>";
  }

   echo "<br><br>";

  // String Methods

  $name = "Hello  Vivek";

  // strlen

  echo "String : " . $name . "<br><br>";

  echo "strlen : " . strlen($name) . "<br><br>";

  echo "strtoupper : " . strtoupper($name) . "<br><br>";

  echo "strtolower : " . strtolower($name) . "<br><br>";

  $message = "I study Java.";

  $newString = str_replace("Java" , "PHP" , $message);

  echo "newString : " . $newString . "<br><br>";


?>
</body>
</html>