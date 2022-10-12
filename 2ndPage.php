<!DOCTYPE html>
<html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

    <form action="./2ndPage.php" method="POST">

    <p>IMIE:<input type="text" name="imie" /></p><br>
    <p>NAZWISKO:<input type="text" name="nazwisko"/></p><br>

        <p>Płeć:</p>
        <label><p><input type="radio" name="plec" value="m" />Mężczyzna</p></label>
        <label><p><input type="radio" name="plec" value="k" />Kobieta</p></label>
        
    <input type="submit" />
    
    </form>
        <?php
          
            if(isset($_POST['plec'])){
                if($_POST['plec'] == "m") 
                echo "Witam Pana ". ($_POST['imie'])." ".($_POST['nazwisko']) ."<br />";
            
                elseif($_POST['plec'] == "k"){
                echo "Witam Panią ".($_POST['imie'])." ".($_POST['nazwisko'])  ."<br />";
            }    
            }

        ?>
    </body>
</html>