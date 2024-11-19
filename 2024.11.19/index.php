<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie z bazą</title>
</head>
<body>
    <header>
        <h2>Połączenie z bazą danych</h2>
    </header>
    <main>
        <?php
            // połączenie z bazą danych można wykonać na kilka sposobów
            // jednym z nich jest wykorzystanie biblioteki mysqli
            // ustawiamy zmienną która będzie przechowywała połączenie z bazą
            // nazwiemy ją $polaczenie
            // zapisujemy do tej zmiennej wynik działania funkcji mysqli_connect z parametrami - nazwa serwera, nazwa użytkownika, hasło użytkownika, nazwa bazy
            $polaczenie=mysqli_connect("localhost","root","","pojazd");
            if($polaczenie){
                echo "polączyliśmy się z bazą danych";
            }else{
                echo "Błąd połączenia";
            }
            mysqli_close($polaczenie);
        ?>
    </main>
</body>
</html>