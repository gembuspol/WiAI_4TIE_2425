<?php
//rozpoczęcie sesji - powinno być przed wszystkimi znacznikami html
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesje - Sessions</title>
</head>
<body>
    <?php
        //rozpoczęcie sesji
        //session_start();
        //ustawienie zmiennych sesyjnych
        //$_SESSION["imie"]="Kamil";
        //$_SESSION["samochod"]="hybryda";
        //echo "Zmienne sesyjne zostały ustawione";

        //zakomentowaliśmy powyższy kod i sprawdzamy czy zmienne sesyjne mają wartości
        echo "<br> Zmienna sesyjna imie: ";
        echo $_SESSION["imie"];
        echo "<br> Zmienna sesyjna samochod: ";
        echo $_SESSION["samochod"];
        //wsyzstkie zmienne sesyjne
        print_r($_SESSION);
        //modyfikacja zmiennych
        $_SESSION["samochod"]="spalinowe";
        print_r($_SESSION);

        //usunięcie wszystkich zmienny sesyjnych
        session_unset();
        print_r($_SESSION);
        if($_SESSION){
            // zmienne sesyjne są ustawione
            echo "<br>sesja działa<br>";
            echo session_status();
        }else{
            //zmienne sesyjne nie są ustawione
            echo "<br>sesja nie działa<br>";
            echo session_status();
            //session_status zwraca liczby - 0 jak jest sesja niedostępna, 1 jak stan wyłączona, 2 jak sesja jest aktywna
        }
        //zniszczenie sesji
        session_destroy();
        print_r($_SESSION);
        if($_SESSION){
            // zmienne sesyjne są ustawione
            echo "<br>sesja działa<br>";
            echo session_status();
        }else{
            //zmienne sesyjne nie są ustawione
            echo "<br>sesja nie działa<br>";
            echo session_status();
            //session_status zwraca liczby - 0 jak jest sesja niedostępna, 1 jak stan wyłączona, 2 jak sesja jest aktywna
        }
    ?>
</body>
</html>