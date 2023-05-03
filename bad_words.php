<?php
    $text = $_GET["text"];
    $censored_word = $_GET["word"];
    $word = "***";
    $text_censored = str_replace($censored_word, $word, $text);
?>

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
    <!-- HEADER -->
    <header>
        <img src="img/logo.svg" alt="Logo">
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main>
        <div class="result">
            <h1>Censura i tuoi testi con <span>PHP Badwords</span>!</h1>
            <h2>Il tuo paragrafo</h2>
            <p>
                <?php
                echo $text;
                ?>
                <h3>
                    <?php
                    echo "Il tuo paragrafo ha: " . strlen($text) . " caratteri.";
                    ?>
                </h3>
            </p>
            <h2>Paragrafo censurato</h2>
            <p>
                <?php
                echo $text_censored;
                ?>
                <h3>
                    <?php
                    echo "Il paragrafo censurato ha: " . strlen($text_censored) . " caratteri.";
                    ?>
                </h3>
            </p>
            <button><a href="index.php">Indietro</a></button>
        </div>
    </main>
    <!-- /MAIN -->

    <!-- FOOTER -->
    <footer>
        <h2>PHP Badwords by <span>Boolean</span> ©</h2>
    </footer>
    <!-- /FOOTER -->
</body>

</html>