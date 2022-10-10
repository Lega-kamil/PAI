<!doctype html>
<html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
<body>

    <form action="./funkcje.php" method="POST">
    <input type="number" name="liczba" placeholder="podaj wiek"/>
    
    <input type="submit"/>
    </form>

    <?php
    function wiek($liczba){
        if([$liczba <1]){
            echo "jestes mlody";
        }
        else if([$liczba <=20]){
            echo "jestes dorosly";
        }
        else{
            echo "jestes stary";
        }
    }  

    if(isset($_POST['liczba'])){
        echo "masz " . (int)$_POST['liczba'] . " lat.";
        $wyswietl =(int)$_POST['liczba'];
        wiek($wyswietl);
    }
    ?>

    
   

</body>
</html>