<?php
function calculargraos() {
    $totalCasas = 64;
    $graos = 0;

    for ($i = 0; $i < $totalCasas; $i++) {
        $graos += pow(2, $i);
    }

    return $graos;
}

$resultado = calculargraos();
echo "O número total de grãos que o monge receberia é: " . $resultado;
?>