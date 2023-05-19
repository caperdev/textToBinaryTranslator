<?php

/**
 * @author Daniel Cabrera Peraza
 * @author CaPerDev <caperdeveloper@gmail.com>
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $textBinary = isset($_POST['text']) ? $_POST['text'] : '';
    $textBinary = trim($textBinary);

    if (empty($textBinary)) {
        $errorResult = 'You have not entered any value';
        header("Location: index.php?resultBinary=" . urlencode($errorResult));
        exit();
    }

    if (!empty($textBinary)){
        $resultBinary = textToBinary($textBinary);
        header("Location: index.php?resultBinary=" . urlencode($resultBinary));
        exit();
    }
}

function textToBinary($textBinary, $maxCharactersPerLine = 80)
{
    $resultBinary = '';
    $count = 0;

    for ($i = 0; $i < strlen($textBinary); $i++) {
        $character = $textBinary[$i];
        $ascii = ord($character);
        $binaryCharacter = decbin($ascii);
        $binaryCharacter = str_pad($binaryCharacter, 8, '0', STR_PAD_LEFT);
        $resultBinary .= $binaryCharacter . '';
        $count += 9;

        if ($count >= $maxCharactersPerLine) {
            $resultBinary .= PHP_EOL;
            $count = 0;
        }
    }

    return $resultBinary;
}
