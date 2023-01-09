<?php
/*
test
test
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo "UTF-8";?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "My First PHP Page"?></title>
  </head>
  <body>
    <div><?php echo "We Love"?></div>
    <div><?php echo "Elzero Channel" ?></div>
  </body>
</html>


<?php
echo (int)15.2 + (int)14.7 + (10.5 + 10.5); // 50
echo "<br>";
echo gettype((int)15.2 + (int) 14.7 + ((int)10.5 + (int)10.5)); // Integer

echo "Hello \"Elzero\" \\ \"\"\" We Love \"$$PHP\"";
echo "<br>";

echo nl2br("We \n Love \n Elzero \n Web \n School");

// Needed Output
echo "<br>";

echo <<<'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP" 
now;
echo "<br>";
echo <<<"here"
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP" 
here;
echo "<br>";

$something = "Programming";

echo <<<"code"
Hello \\PHP\\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// Needed Output


// Needed Output
?>