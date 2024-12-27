<?php

// Función para ordenar la lista usando Insertion Sort
function insertionSort(array $array): array
{
    $length = count($array);

    for ($i = 1; $i < $length; $i++) {
        $key = $array[$i];
        $j = $i - 1;

        // Mover elementos mayores que $key una posición adelante
        while ($j >= 0 && strcasecmp($array[$j], $key) > 0) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        $array[$j + 1] = $key;
    }

    return $array;
}

// Lista de nombres desordenada
$names = ["Luis", "Ana", "Pedro", "Marta", "Zoe", "Carlos", "Elena"];

// Mostrar la lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($names);

// Ordenar la lista con Insertion Sort
$sortedNames = insertionSort($names);

// Mostrar la lista después de ordenar
echo "\nLista después de ordenar:\n";
print_r($sortedNames);

?>
