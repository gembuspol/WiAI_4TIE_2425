<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Formularze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section id="gora">
            <section id="gora1">

            </section>
            <section id="gora2">
                
            </section>
        </section>
        <section id="srodek">
            <form action="formularz.php" method="POST">
                <fieldset>
                    <legend>Przesyłanie danych</legend>
                    <label for="liczba1">Podaj pierwszą liczbę</label>
                    <input type="number" id="liczba1" name="liczba1">
                    <br>
                    <label for="liczba2">Podaj drugą liczbę</label>
                    <input type="number" id="liczba2" name="liczba2">
                    <br>
                    <input type="reset" value="Reset">
                    <input type="submit" value="Prześlij dane">
                </fieldset>
            </form>
        </section>
        <section id="dol">
            <section id="dol1">

            </section>
            <section id="dol2">
    
            </section>
        </section>
    </main>
</body>
</html>