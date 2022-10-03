<br>
<?php

$podana1 = 21;
$wynik = null;
$ocena = null;

$podana1 = $wynik


if ($wynik >=95 )
    $ocena = "6";
else if ($wynik >=85  && $wynik <94 )
    $ocena = "5";
else if ($wynik >=70  && $wynik <84 )
    $ocena = "4";
else if ($wynik >=55  && $wynik <69 )
    $ocena = "3";
else if ($wynik >=40  && $wynik <54 )
    $ocena = "2";
else if ($wynik >=0  && $wynik <39 )
    $ocena = "1";

echo "twoja ocena to: " . $ocena . "\n";

?>