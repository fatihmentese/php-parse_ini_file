<?php
/*
Örnek ini dosyasını parçalamak
*/
$ini_array1 = parse_ini_file("ornek.ini");
echo "<pre>";
print_r($ini_array1);
echo "</pre>";

// Parse with sections
$ini_array2 = parse_ini_file("ornek.ini", true);
echo "<pre>";
print_r($ini_array2);
echo "</pre>";


echo "</br>";
echo "</br>";
echo "</br>";

print_r($ini_array1['phpversion']);
?>