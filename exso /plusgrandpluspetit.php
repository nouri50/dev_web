<?php
$randoNUmnber= rand(1-100);
$guess= readline("deviner le nombre entre 1 et 100");

while($guess !=$randomNUmnber) {
    if ($guess > $randomNumber) {
        $guess = readfile("Trop gransd ! esseye encore:");
    }else {
        $guess = readline( "Trop petit ! essayez encore:");
    }

    }

    echo "bravo ! vous avez trouvé le nomnre $randomnumber" . "n";

    

