<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


</body>
</html>


<?php

function getId($age, $name, $yearBirth)
{
    if ($age >= 18 && strlen($name) >= 3 ) {
        $idClient = $age + (strlen($name) * $age) . implode($yearBirth);
        return "Вход разрешен" . "\n" . "Ваш id: $idClient";
    } else{
        echo "Вход запрещен";
    }
}
$nameClient = "Mark";
$ageClient = 22;
$yearBirthClient = [
    'day' => 28,
    'month' => 10,
    'year' => 2022,
];
$logButt = true;



if($logButt){
    echo getId($ageClient, $nameClient, $yearBirthClient );
} else {
    echo "Кнопка не нажата!";
}
?>