<?php
$numbers = [10, 15, 21];

foreach ($numbers as $num) {
    if ($num % 3 == 0) {
        echo "$num is divisible by 3 <br>";
    } else {
        echo "$num is not divisible by 3 <br>";
    }
}
?>