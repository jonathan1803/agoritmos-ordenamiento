<?php

// Función para dividir y conquistar: Merge Sort
function mergeSort(array $array): array
{
    // Si la lista tiene 1 o 0 elementos, ya está ordenada
    if (count($array) <= 1) {
        return $array;
    }

    // Dividir la lista en dos mitades
    $middle = (int)(count($array) / 2);
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    // Ordenar cada mitad recursivamente
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Mezclar las mitades ordenadas
    return merge($left, $right);
}

// Función para mezclar dos listas ordenadas
function merge(array $left, array $right): array
{
    $result = [];
    $i = 0;
    $j = 0;

    // Comparar y fusionar las listas
    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Agregar elementos restantes de la izquierda (si los hay)
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    // Agregar elementos restantes de la derecha (si los hay)
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Lista de palabras desordenada
$words = ["perro", "gato", "elefante", "jirafa", "zorro", "alce", "ballena"];

// Mostrar la lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($words);


// Ordenar la lista con Merge Sort
$sortedWords = mergeSort($words);

// Mostrar la lista después de ordenar
echo "\nLista después de ordenar:\n";
print_r($sortedWords);
?>
