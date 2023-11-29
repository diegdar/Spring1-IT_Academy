<!-- Dada la clase NumberChecker programa los tests unitarios que hagan falta para certificar que el código fuente de la clase hace lo que debe hacer. -->
<?php
class NumberChecker  {

	public function __construct(private int $number){}

	public function isEven(): bool {
		
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}
?>