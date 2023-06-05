<?php

function vowelCounter(string $word) {
    $vowelCount = 0;
    $vowel = ['a','e','i','o','u'];
    
    foreach ($vowel as $appearance) {
                $vowelCount += substr_count(strtolower($word), $appearance);
            }
        return $vowelCount;
    }

$word = $_POST["word"];
if(!$word) {
    echo "<h3>Polje za unos prazno!</h3>\n";
}

else if(ctype_alpha($word)) {
    $brSlova = strlen($word);
    $brSam = vowelCounter($word);
    $brSug = $brSlova - $brSam;

    $wordsJson = file_get_contents('words.json');

    $wordsArr = json_decode($wordsJson, true);

    $wordsArr[] = [
        'word' => $word,
        'brSlova' => $brSlova,
        'brSam' => $brSam,
        'brSug' => $brSug
    ];

    $wordsJson = json_encode($wordsArr);

    file_put_contents('words.json', $wordsJson);

    header("Location: parcijalni2index.php");
}