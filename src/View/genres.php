<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $viewData['title'] ?></title>
</head>
<body>
    <h1><?= $viewData['title'] ?></h1>
    <?php foreach ($viewData['data'] as $genre) {
        echo "<h4>Zanr: $genre->Naziv</h4>";
    } ?>
</body>
</html>