<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni2</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <form action="analiza.php" method="POST">
                <label>Upišite riječ:</label><br>
                <input type="text" name="word"><br><br>
                <input type="submit" value="pošalji">
                </form>
            </td>
            
            <td>
                <table border = "1">
                    <tr>
                        <th>Riječ</th>
                        <th>Broj slova</th>
                        <th>Broj suglasnika</th>
                        <th>Broj samoglasnika</th>
                    </tr>
                    <?php
                    $wordsJson = file_get_contents('words.json');
                    $wordsArr = json_decode($wordsJson, true);
                        foreach ($wordsArr as $word) {
                        echo    "<tr>";
                        echo        "<td>{$word['word']}</td>";
                        echo        "<td>{$word['brSlova']}</td>";
                        echo        "<td>{$word['brSug']}</td>";
                        echo        "<td>{$word['brSam']}</td>";
                        echo    "</tr>";
                        }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>