<?php

$fuel = readline("What kind of Fuel are you using? ");
if ($fuel == "Coal" || $fuel == "Lava" || $fuel == "Wood planks" || $fuel == "Sticks" || $fuel == "Coal block" || $fuel == "Charcoal" || $fuel == "Logs") {
} else {
    echo "$fuel isnt a valid fuel source";
    exit;
}
$amount = readline("How many items do you wanna burn? ");
$amount = $amount / 64;
if (!is_numeric($amount)) {
    echo "$amount isnt a valid number try again";
    exit;
}
if ($fuel == "Lava") {
    $use = $amount * 0.64;
} elseif ($fuel == "Coal block") {
    $use = $amount * 0.8;
} elseif ($fuel == "Coal" || $fuel == "Charcoal") {
    $use = $amount * 8;
} elseif ($fuel == "Wood planks" || $fuel == "Logs") {
    $use = $amount * 42.67;
} elseif ($fuel == "Sticks") {
    $use = $amount * 128;
}
echo "You need at least " . ceil($use) . " $fuel to burn it all";
?>