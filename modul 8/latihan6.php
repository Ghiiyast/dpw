<?php
echo "<b>--- While Loop ---</b><br>";
$x = 10;
while ($x >= 5) {
    echo "Nomor: $x <br>";
    $x--;
}
echo "<br>";

echo "<b>--- Do While Loop ---</b><br>";
$x = 1;
do {
    echo "Nomor: $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";

echo "<b>--- Foreach Loop ---</b><br>";
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) {
    echo "Warna: $value <br>";
}
echo "<br>";

echo "<b>--- For Loop ---</b><br>";
for ($x = 1; $x <= 10; $x++) {
    echo "Nomor: $x <br>";
}
echo "<br>";

echo "<b>--- For Loop dengan Break ---</b><br>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break; 
    }
    echo "Nomor $x <br>";
}
?>