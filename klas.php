<?php

echo " Wie zit er in de klas?";
$a = readline();
$klas = array();
$klas = explode(',', $a);
for ($i=0; $i < $a ; $i++) {
    $klas[$a = readline()] ;
}
 echo  "  De studenten in de klas zijn:";
 echo PHP_EOL;
foreach ($klas as $key => $value) {

echo $key  . $value .PHP_EOL;

}
