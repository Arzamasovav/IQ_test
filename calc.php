<?php

$sum = !empty($_POST['sum']) ? $_POST['sum'] : '';
$sumAdd = !empty($_POST['sumAdd']) ? $_POST['sumAdd'] : '';
$percent = !empty($_POST['percent']) ? $_POST['percent'] : '';
$months = !empty($_POST['term']) ? $_POST['term'] : '';
$daysN = 30;
$sumN = 0;

for ($i = 0; $i <= (int) $months - 1; $i++) {

    $sumN = $sum;
    $sum = $sumN + (($sumN + $sumAdd) * $daysN * ($percent / 365) / 100);
    $sum += $sumAdd;
}

$result = ['sum' => round($sum)];

echo json_encode($result)
?>