<!DOCTYPE html>
<html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

    <form action="./index.php" method="POST">
    <p>LOGIN:<input type="text" name="imie" placeholder="LOGIN"/></p><br>

    <p>HASLO:<input type="password" name="haslo" placeholder="PASSWORD"/></p><br>

    <p><textarea name="kom" placeholder="komentarz!">Wpisz Komentarz!</textarea></p><br>

    <p><input type="checkbox" name="cos" />Zapamietaj mnie</p>

    <p>Płeć:</p>
        <p><input type="radio" name="plec" value="m" />Mężczyzna</p>
        <p><input type="radio" name="plec" value="k" />Kobieta</p>
        <p><input type="radio" name="plec" value="i" />Inna</p>

        <select name="kolor">
        <option value="czerwony">Czerwony</option>
        <option value="zielony">Zielony</option>
        <option value="niebieski">Niebieski</option>
        </select>

        <p>Ulubiona seria gier:</p>
        <p><input type="checkbox" name="gry[]" value="GTA" />GTA</p>
        <p><input type="checkbox" name="gry[]" value="FIFA" />FIFA</p>
        <p><input type="checkbox" name="gry[]" value="Battlefield" />Battlefield</p>
        <p><input type="checkbox" name="gry[]" value="Settlers" />Settlers</p>
        <p><input type="checkbox" name="gry[]" value="Call of duty" />Call of duty</p>
        <p><input type="checkbox" name="gry[]" value="Need For Speed" />Need For Speed</p>
        <p><input type="checkbox" name="gry[]" value="Tony Hawk`s" />Tony Hawk`s</p>
        
    <input type="submit" />
    
    </form>
        <?php
        if(isset($_POST['cos'])){
            {
                echo "Checkbox: " . $_POST['cos'] . "<br />";
            }
        }

        if(isset($_POST['imie'])){
            echo "Login: " . htmlspecialchars($_POST['imie']) . ". "."<br />";
        }
        
        echo "<br>";

        if(isset($_POST['haslo'])){
            echo "Haslo: " . sha1(htmlspecialchars($_POST['haslo'])) . ". "."<br />";
        }

        if(isset($_POST['kom'])){
            echo "Komentarz w pełni tekstowy: " . htmlspecialchars($_POST['kom'])."<br />";
        }

        if(isset($_POST['kom'])){
            echo "Komentarz: " .($_POST['kom']. "<br />");
        }

        if(isset($_POST['plec'])){
            if($_POST['plec'] == "m") 
            echo "Wybrana płeć: Mężczyzna"."<br />";
           
        }elseif($_POST['plec'] == "k"){
            echo "Wybrana płeć: Kobieta"."<br />";
        }else{
            echo "wybrana płeć: inna"."<br />";
        }

        if(isset($_POST['gry'])){
            for($i=0; $i<count($_POST['gry']); $i++){
                echo $_POST['gry'][$i] . "<br />";
            }
        }else{
            echo "Nie wybrano ani jednej serii gier :(";
        }
        ?>
    </body>
</html>