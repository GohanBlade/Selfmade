<?php

$reproductie_dagen = readline("Hoeveel dagen? ");
$reproductie_getal = readline("Wat is het Reproductie getal? ");
$reproductie_getal_per_dag = pow($reproductie_getal, (1 / 7));
$besmette_personen = 126473;
$besmet = 126473;
for ($i = 0; $i < $reproductie_dagen; $i++) {
    $besmette_personen = $besmette_personen * $reproductie_getal_per_dag;
}
$gemiddeld_besmet = ($besmette_personen - $besmet) / $reproductie_getal_per_dag;
echo "Aantal besmette personen in $reproductie_dagen dagen = " . round($besmette_personen) . PHP_EOL;
echo "Er zijn " . ($besmette_personen - $besmet) . " Mensen besmet in $reproductie_dagen" . PHP_EOL;
echo "Er zijn gemiddeld " . round($gemiddeld_besmet) . " meer besmet per dag" . PHP_EOL;
echo "Na 144 dagen zal heel Nederland besmet zijn";
?>