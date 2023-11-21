'.\Spring1-IT_Academy\Tema7-Debug_Test\Nivel1\Ej1\NumberChecker.php'<?php
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