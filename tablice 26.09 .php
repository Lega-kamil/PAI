
<?php /*
   $tablica[] = "Ksienga1";
   $tablica[] = "Ksienga2";
   $tablica[] = "Ksienga3";
   $tablica[] = "Ksienga4";

   for($j =3; $j > -1; --$j){
    echo "$j: $tablica[$j] <br>";
}



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

$products = array(
    'paper' => array(
        'copier' => "Do kserokopiarek i uniwersalny",
        'inkjet' => "Do drukarek atramentowych",
        'laser' => "Do drukarek laserowych",
        'photo' => "Papier fotograficzny"),
    'pens' => array(
        'ball' => "Dlugopisy",
        'hilite' => "Markery przezroczyste",
        'marker' => "Markery zwykle"),
    'misc' => array(
        'tape' => "Tasmy klejace",
        'glue' => "Kleje",
        'clips' => "Spinacze")
    );


echo 'pierwszy: '.$products['paper']['copier']. '<br>';
echo 'drugi: '.$products['pens']['ball']. '<br>';
echo 'trzeci: '.$products['misc']['tape']. '<br>';


echo "<pre>";
foreach($products as $section => $items)
    foreach($items as $key => $value)
        if($key == 'copier' || $key == 'ball' || $key == 'tape')
    {
        echo "$section: \t $key \t ($value)<br>";
    }
        
echo "</pre>";    

echo "<pre>";
foreach($products as $section => $items)
    foreach($items as $key => $value)
        echo "$section: \t $key \t ($value)<br>";
echo "</pre>";    
*/


$chessboard = array(
    array('w','s','g','h','k','g','s','w'),
    array('p','p','p','p','p','p','p','p'),
    array(' ',' ',' ',' ',' ',' ',' ',' '),
    array(' ',' ',' ',' ',' ',' ',' ',' '),
    array(' ',' ',' ',' ',' ',' ',' ',' '),
    array(' ',' ',' ',' ',' ',' ',' ',' '),
    array('P','P','P','P','P','P','P','P'),
    array('W','S','G','H','K','G','S','W'),
);
echo "<pre>";
foreach($chessboard as $row)
{
    foreach($row as $piece)
    echo "$piece ";
    echo "<br>";
}
echo "</pre>";

echo "<br>";

$chessboard[6][3]=' ';
$chessboard[4][3]='P';

echo "<pre>";

foreach($chessboard as $row)
{
    foreach($row as $piece)
    echo "$piece ";
    echo "<br>";
}
echo "</pre>";
?>