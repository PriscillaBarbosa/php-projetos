<?php
function fatorial($num) {
    if ($num <= 1) {
        return 1;
    } else {
        return $num * fatorial($num - 1);
    }
}

// Teste da função
echo fatorial(5); 
echo fatorial(3);
?>