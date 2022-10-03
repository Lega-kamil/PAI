<br>
<?php

$podana1 = 50;
$ocena = " ";


if ($podana1 >=95 )
    $ocena = "6";
else if ($podana1 >=85  && $podana1 <=94 )
    $ocena = "5";
else if ($podana1 >=70  && $podana1 <=84 )
    $ocena = "4";
else if ($podana1 >=55  && $podana1 <=69 )
    $ocena = "3";
else if ($podana1 >=40  && $podana1 <=54 )
    $ocena = "2";
else if ($podana1 >=0  && $podana1 <=39 )
    $ocena = "1";

echo "twoja ocena to: " . $ocena . "\n";

?>