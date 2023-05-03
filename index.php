<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- STYLE-CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <main>
        <div class="container">
            <form action="bad_words.php" method="get">
                <label for="text">Paragrafo</label>
                <textarea name="text" id="text" cols="30" rows="10" placeholder="Scrivi qualcosa.."></textarea>
                <label for="word">Parola da censurare</label>
                <input type="text" id="word" name="word" placeholder="Scrivi qualcosa..">
                <button type="submit">Invia</button>
            </form>
        </div>
    </main>
</body>
</html>