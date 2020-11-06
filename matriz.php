<?php
$Dados = Array(
                    "Artes" => Array
                        (
                            "1b" => 10,
                            "2b" => 10,
                            "3b" => 10,
                            "4b" => 10
                        ),
                    "Matemática" => Array
                        (
                            "1b" => 10,
                            "2b" => 10,
                            "3b" => 10,
                            "4b" => 10
                        )                   
                );
print_r($Dados);

foreach ($Dados as $disciplina => $bimestres) {
    echo "<h1> $disciplina </h1>";
    foreach ($bimestres as $bimestre => $nota) {
       echo " $bimestre: ";
       echo " $nota ";
       echo "<br>";
    }
    # code..."$bimestre";
    
}

?>