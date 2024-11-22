<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie z bazą</title>
</head>
<body>
    <?php
        $polaczenie=mysqli_connect("localhost","root","","terminarz");
        echo "Baza działa";
        $zapytanie="SELECT wpis FROM zadania WHERE dataZadania BETWEEN '2020-07-01' AND '2020-07-07' AND wpis IS NOT NULL AND wpis NOT LIKE ''";
        $wynik=mysqli_query($polaczenie,$zapytanie);
        while($wiersz=mysqli_fetch_array($wynik)){
            echo $wiersz['wpis']."; ";
        }
        $zapytanie2="SELECT dataZadania, wpis FROM zadania WHERE miesiac='lipiec'";
        $wynik2=mysqli_query($polaczenie,$zapytanie2);
        while($wiersz2=mysqli_fetch_array($wynik2)){
            echo "<section>";
            echo "<h6>".$wiersz2['dataZadania']."</h6>";
            echo "<p>".$wiersz2['wpis']."</p>";
            echo "</section>";
        }
        mysqli_close($polaczenie);
    ?>
</body>
</html>