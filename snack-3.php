<!-- ## Snack 3
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php

$gpMontecarlo = [
    "20/05/2021" => [
        [
            "source" => "La Gazzetta dello Sport",
            "text" => "Montecarlo, inizio in salita per la Ferrari: Leclerc resta fermo ai box. FP1: Perez il più veloce...",

        ],[
            "source" => "La Gazzetta dello Sport",
            "text" => "Leclerc: 'Troppo bello per crederci'. Sainz: 'In curva siamo molto veloci'",
        ],
    ],
    "22/05/2021" => [
        [
            "source" => "La Gazzetta dello Sport",
            "text" => "Che pole Leclerc su Verstappen e Bottas. Sainz 4°, Hamilton solo 7°",
        ],[
            "source" => "La Gazzetta dello Sport",
            "text" => "Hamilton deluso: 'Tanti errori, ma lotterò. La Ferrari? Qui è forte, ma in gara poi cala...'",
        ],
    ],
    "23/05/2021" => [
        [
            "source" => "La Gazzetta dello Sport",
            "text" => "Ferrari: Leclerc partirà dalla pole, il cambio è a posto",
        ],[
            "source" => "La Gazzetta dello Sport",
            "text" => "Monaco, Verstappen trionfa ed è il nuovo leader! La Ferrari si consola con Sainz 2°",
        ],
    ]
]
?>

<ul>
    <?php

    $post_keys = array_keys($gpMontecarlo);

    for ($i = 0; $i < count($gpMontecarlo); $i++) {
        $post_key = $post_keys[$i];
        $post_value = $gpMontecarlo[$post_key];

        ?>
        <li> <?php echo $post_key; ?>
            <ul>
                <?php
                for($y = 0; $y < count($post_value); $y++) {
                    $each_post = $post_value[$y];  
                ?>
                <li> <?php echo $each_post['source'] . "<br>" . $each_post["text"] ?> </li>
                <?php
                }
                ?>
            </ul>
        </li>   
    <?php
    }
    ?>
</ul>