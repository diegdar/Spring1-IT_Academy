<?php
/*Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.

Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto al que se le aplica el método.

Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.

Realiza una aplicación que permita echar cinco dados de póquer a la vez.

Además, programa el método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados.
 */

class PokerDice
{
    private array $figuras=["As", "K", "Q", "J", "7", "8"];
    private string $valorAleatorio;
    private static int $numTiradas=0;

    public function crearValorAleatorio()
    {//crea el valor aleatorio de cada dado
        $claveArray= array_rand($this->figuras);
        $valorAleatorio = $this->figuras[$claveArray];

        return $this->valorAleatorio = $valorAleatorio;
    }
    public function throw()
    {
        $this->crearValorAleatorio(); //llama al metodo para que cree el valor del dado

        self::$numTiradas++; //aumenta el valor en 1 cada vez que haya una nueva tirada de dados(siendo una tirada con 5 dados o con 1)
    }

    public function shapeName()
    {
        echo "\nLa ultima figura que ha salido del dado es: {$this->valorAleatorio}";
    }
    public function getTotalThrows()
    {
        echo "\n\nEl numero total de tiradas han sido: " . self::$numTiradas;
    }
}

function tirarDados($cantidadDados)
{
    $dado = new PokerDice();
    $dado->throw();
    for ($i=0; $i<$cantidadDados ; $i++) { 
        $dado->crearValorAleatorio();
        $dado->shapeName();
    }
}

$dado = new PokerDice();
$dado->throw();
tirarDados(5);
$dado->getTotalThrows();
