<?php
$kata = "arkademi";

foreach (count_chars($kata,1) as $kata => $value) {
   echo chr($kata) . " Jumlah Huruf = $value " . "<br>";
}

?>