<!DOCTYPE html>
<html>
<body>
<h1>PHP Lessons</h1>
    <div>
    <h2>PHP Intro</h2>
    <?php
    echo "My first PHP script!";
    ?>
    </div>


<div>
<h2>PHP Variable</h2>
<?php
$x = 5;
$y = "John";

echo $x;
echo "<br>";
echo $y;
?>
</div>

<div>
<h2>Echo/Print</h2>
<?php
echo "PHP is Enjoyable!<br>";
echo "Hello world!<br>";
echo "I'm going to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
print "Hi, I'm using PHP scripting language<br>";
print "Print was used to execute this statement.";
?> 
</div>

<div>
<h2>Data Types</h2>
<?php 
class Car { 
public $color; 
public $model; 
public function __construct($color, $model) { 
$this->color = $color; 
$this->model = $model; 
} 
public function message() { 
return "My car is a " . $this->color . " " . $this->model . "!"; 
} 
} 

$myCar = new Car("White", "Toyota Revo"); 
echo $myCar -> message(); 
?>
</div>

<div>
<h2>Operator & Math</h2>
<?php
var_dump(abs(-4.2));
var_dump(abs(5));
var_dump(abs(-5));
?>
</div>
</body>
</html>