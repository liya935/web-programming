<?php
$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "$a is the greatest number";
}
elseif ($b >= $a && $b >= $c) {
    echo "$b is the greatest number";
}
else {
    echo "$c is the greatest number";
}
?>