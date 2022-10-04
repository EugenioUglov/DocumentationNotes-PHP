<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}
?>


// 2 WAY
<?php
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>


// Save variable state in function.
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest(); // outputs 0
myTest(); // outputs 1
myTest(); // outputs 2
?>


Sources,
https://www.w3schools.com/php/php_variables_scope.asp
