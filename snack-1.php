<!-- 
    ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 
-->
<?php

$terzaGiornata = [
    [
        "HomeTeam" => "LA Lakers",
        "GuestTeam" => "Chicago Bulls",
        "HomePoints" => 34,
        "GuestPoints" => 21,
    ], [
        "HomeTeam" => "Boston Celtics",
        "GuestTeam" => "Suns",
        "HomePoints" => 48,
        "GuestPoints" => 35,
    ], [
        "HomeTeam" => "Orlando Magic",
        "GuestTeam" => "Miami",
        "HomePoints" => 39,
        "GuestPoints" => 33,
    ],
]
?>

<ul>
    <?php
    for ($i = 0; $i < count($terzaGiornata); $i++) {
        $results = $terzaGiornata[$i];
    ?>

        <li>
            <?php echo $results["HomeTeam"] . " - " . $results["GuestTeam"] . " | " . $results["HomePoints"] . "-" . $results["GuestPoints"] ?>
        </li>

    <?php
    }
    ?>
</ul>