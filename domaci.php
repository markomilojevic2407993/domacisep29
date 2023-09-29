<?php

$naslov='Postani programer';

$navigacija=[
    'google'=>'https://www.google.com/',
    'youtube'=>'https://www.youtube.com/watch?v=f-dMFYAiDiY&list=TLPQMjkwOTIwMjP5CxZQjYWfew&index=2',
    'krstarica'=>'https://www.krstarica.com/'
];
$godina=date('Y');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $naslov ?></title>
</head>
<body>

<h1><?= $naslov ?></h1>
    <nav>
        <?php foreach ($navigacija as $key => $value):?>
         <a href=<?= $value ?>> <?= $key?></a>
        <?php endforeach;?>
    </nav>

    <footer>
        <p>Copyright@mojsajt<?=$godina?></p>
    </footer>
</body>
</html>