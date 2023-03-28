<!DOCTYPE html>
<html>
<body>
<center>
<?php
// Multiplication table in PHP using For loop
$num = 5;

echo "The Multiplication Table of <br>";
for ($x = 1; $x <= 10; $x++){

	$multiple = $x * $num;
    echo "$x * $num = $multiple <br>";
}

?>
</center>
</body>
</html>