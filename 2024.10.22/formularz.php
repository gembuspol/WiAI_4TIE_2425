<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "Jest ustawiona metoda POST";
        if(empty($_POST['liczba1'])){
            echo "Brak pierwszej liczby";
        }else{
            echo "Pierwsza liczba to: ".$_POST['liczba1']."<br>";
        }
        if(empty($_POST['liczba2'])){
            echo "Brak drugiej liczby";
        }else{
            echo "Druga liczba to: ".$_POST['liczba2']."<br>";
        }
    }
    ?>
</body>
</html>