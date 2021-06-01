<!-- ## Snack 4
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta -->

<?php 

$newArr = [];
$length = 15;
$min = 1;
$max = 100;

    while (count($newArr) < $length) {
        $randomNumber = rand($min, $max);

        if (!in_array($randomNumber, $newArr)) {
            $newArr[] = $randomNumber;
        }
    }
    var_dump($newArr);
?>