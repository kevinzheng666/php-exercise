<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 4;
$y = 5;

print "<h2>" .$txt1. "</h2>" ;
print "study php at " . $txt2 . "<br>";
print $x + $y;
?>



<br>


<?php
$x = "Hello world";
$y = "Hello world";
echo $x;
echo "<br>";
echo $y;
?>




<br>

<?php
$x = 5988;
var_dump($x);
?>




<br>




<?php
$x = 10.377;
var_dump($x);
?>













<br>
<?php
define("GREETING","Welcome to W3Schools.com!");
echo GREETING;
?>











<br>
<?php
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0]
?>













<br>
<?php
$t = date("H");
if($t < "20") {
    echo "Have nice day!";
}
?>