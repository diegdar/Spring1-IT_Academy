<!-- Imagina que estamos en una tienda donde se vende:

Chocolate: 1 euro
Chicles: 0,50 euros
Caramelos: 1,50 euros
Implementa un programa que permita añadir cálculos a un total de compras de ese tipo. Por ejemplo, que si compramos:

2 chocolates, 1 de chicle y 1 caramelo, tengamos un programa que permita ir añadiendo los subtotales a un total, tal que así:

función(2 chocolates) + función(1 de chicles) + función(1 de carmelos) = 2 + 0.5 + 1.5

Siendo, por tanto, el total, 4.

 -->
 <?php

 function calculaChocolates(int $num): float{
    $sumtotal = $num * 1;

    return $sumtotal;
 }
 function calculaChicles(int $num): float{
    $sumtotal = $num * 0.50;
    
    return $sumtotal;
 }
 function calculaCaramelos(int $num): float{
    $sumtotal = $num * 1.50;

    return $sumtotal;
 }

$sumchoco = calculaChocolates(3);
$sumChiles = calculaChicles(2);
$sumCaramelos = calculaCaramelos(5);

$totalCompra = $sumchoco + $sumChiles + $sumCaramelos;
                                            //pone 2 decimales al importe
echo "La suma total de la compra es de: " . number_format($totalCompra, 2) . "€";