<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!--
    1. What is a Function.
    2. Four way of Using Function
    3. Introduction to recursion
    4. Recursion Task
  -->

<?php

echo "What is a Function : A function is a reusable block of code that perform a specific task.";

function functionName()
{
  // code 
}

functionName();

echo "<br><br>";

function hello(){
  echo "Hello World!";
}

hello();

echo "<br><br>";

/* 2. Four ways of functions */

/* No Argument + No return Value */

function welcome(){
  echo "Welcome to PHP classroom.";
}

welcome();

echo "<br><br>";

/* Argument + No return value */

function profile($name){
  echo "Hello " . $name . "<br>";
}

echo "<br><br>";

profile("Rahul");

echo "<br><br>";

/*3. No Argument + Return Value */

function getMessage(){
  return "PHP is easy to learn";
}

$message = getMessage();

echo $message;

echo "<br><br>";

/* 4. Argument + Return value */

function add($a , $b){
  return $a + $b;
}

$result = add(10 , 20);

print($result);

echo "<br><br>";


//3. Function With Multiple Parameters

function studentDetails($name , $age , $course){
  echo "Name :" . $name . "<br>";
  echo "Age :" . $age . "<br>";
  echo "Course :" . $course . "<br>";
}

studentDetails("Vivek" , 27 , "PHP");

echo "<br><br>";

//4. Function with defualt Parameters

function country($name = "India"){
  echo "Country : " . $name;
}

country("USA");

echo "<br><br>";

//5. Function with type declaration

function multiply(int $a , int $b):int{
  return $a * $b;
}

echo "Multiplication = " . multiply('4' , '5') . "<br>";

echo "<br><br>";

// 6. Recursion 

// A function calling itself is called recursion.


function demo($n){
  if($n == 0){
    return;
  }
  echo $n;
  demo($n - 2);
}

demo(10);

echo "<br><br>";

function countDown($n){

  if ($n == 0){
    return;
  }

  echo $n . "<br>";

  countDown($n - 1);

}

countDown(10);


function fibonacci($n){
  if($n == 0){
    return 0;
  }

  if($n == 1){
    return 1;
  }

  return fibonacci($n - 1) + fibonacci($n - 2);
}

for ($i = 0; $i < 10; $i++){
  echo fibonacci($i). " " ;
}

?>




</body>
</html>