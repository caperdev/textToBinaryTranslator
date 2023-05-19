<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="public/img/Logo_CaPerDev.ico">
        <link rel="stylesheet" href="public/commons.css">
        <title>Text To Binary Translator</title>
    </head>
    <body>
        
        <div class="container">
            <form class="form" action="functions.php" method="post">
                <div class="title">
                    Text to Binary
                </div>
                <input type="text" placeholder="Text to translate" class="input" name="text" id="text">
                <div class="buttonContainer">
                    <button type="submit">Translate</button>
                    <button type="reset" onclick="redirectToURL('index.php')">Clean</button>
                </div>
                <?php
                    if (isset($_GET["resultBinary"])) {
                        $translatedBinary = $_GET["resultBinary"];
                        echo '<div class="resultText">' . htmlspecialchars($translatedBinary) . '</div>';
                    }
                ?>
            </form>
        </div>
        
        <script src="public/commons.js"></script>
    </body>
</html>