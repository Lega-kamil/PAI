
<?php /*
   $tablica[] = "Ksienga1";
   $tablica[] = "Ksienga2";
   $tablica[] = "Ksienga3";
   $tablica[] = "Ksienga4";

   for($j =3; $j > -1; --$j){
    echo "$j: $tablica[$j] <br>";
}*/



    $paper['copier'] = "Do kserokopiarek i uniwersalny";
    $paper['inkjet'] = "Do drukarek atramentowych";
    $paper['laser'] = "Do drukarek laserowych";
    $paper['photo'] = "Papier fotograficzny";

    $j=0;
    foreach($paper as $item){
        echo " $item <br>";
        ++$j;
    }
     
    echo "<br>";
    echo 'first: '.$paper['copier']. '<br>';
    echo 'last: '.$paper['inkjet']. '<br>';



?>