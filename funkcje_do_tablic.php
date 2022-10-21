<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="./funkcje_do_tablic.php" method="POST">
            TEXT:<input type="text" name="tekst" />
            <input type="submit" name="tekstsubmit"/>
            <br>
            Usuniecie tekstu z tablicy:<input type="submit" name="tekstbut"/>
            <br><br>
        </form>


        <form action="./funkcje_do_tablic.php" method="POST">
             NUMER:<input type="number" name="numer" />
            <input type="submit" name="numersubmit"/>
            <br>
            Usuniecie numeru z tablicy:<input type="submit" name="numerbut"/>
            <br><br>
        </form>

        <?php
        $texts = array("mamy", "tu", "cos");
        $numbers = array(1,2,3);

        if(isset($_POST['tekstsubmit'])){
            {
                array_push($texts, $_POST['tekst']);
                $z = 0;
                foreach($texts as $item){
                echo "$item <br>";
                ++$z;
                }
            }
        }

        if(isset($_POST['numersubmit'])){
            {
                array_push($numbers, $_POST['numer']);
                $j = 0;
                foreach($numbers as $item){
                    echo "$item <br>";
                    ++$j;
                }
            }
        }
        

        if(isset($_POST['numerbut'])){
            {
                array_pop($numbers);
                $j = 0;
                foreach($numbers as $item){
                    echo "$item <br>";
                    ++$j;
                }
            }
        }

        if(isset($_POST['tekstbut'])){
            {
                array_pop($texts);
                $z = 0;
                foreach($texts as $item){
                echo "$item <br>";
                ++$z;
                }
            }
        }
       
        ?>

    </body>
</html>