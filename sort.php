

<?php
function insertionSort1($n, $arr) {
    $valor = $arr[$n - 1]; 

    $i = $n - 2;
    
    
    while ($i >= 0 && $arr[$i] > $valor) {
        $arr[$i + 1] = $arr[$i];
        echo implode(" ", $arr) . "<br>";
        $i--;
    }
  
    $arr[$i + 1] = $valor;
    echo implode(" ", $arr) . "<br>";
}


$n = 5;
$arr = [1, 2, 4,5, 3];
insertionSort1($n, $arr);
?>





