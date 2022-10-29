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
