<?php
/*
üst başlıklar hariç, sadece key => value
*/
$ini_array1 = parse_ini_file("ornek.ini");
echo "<pre>"; # görünüm ayarlanıyor
print_r($ini_array1);
echo "</pre>";

/*
üst başlıklar(bölümler) da dahil olarak yeni array hazırlanıyor
*/
$ini_array2 = parse_ini_file("ornek.ini", true);
echo "<pre>"; # görünüm ayarlanıyor
print_r($ini_array2);
echo "</pre>";

echo "<pre>"; # görünüm ayarlanıyor
print_r($ini_array1['phpversion']);
echo "</pre>";
?>
