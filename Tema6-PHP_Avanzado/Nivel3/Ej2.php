<!-- Implementa una clase Car que tenga información sobre un coche (marca, matrícula, tipos de combustible, velocidad máxima). Además, implementa un Trait llamado Turbo que tenga un método boost() que muestre un mensaje "Se ha iniciado el turbo". Usa este método desde la clase Car.

 -->
 <?php
 trait Turbo
{

    public function boost(): string
    {
        return "se ha iniciado el turbo.";
    }
}

enum Combustible
{
    case GASOLINA;
    case DIESEL;
    case ELECTRICO;

    public function combustibles(): string
    {
        return match($this)
        {
            self::GASOLINA => "gasolina",
            self::DIESEL => "diesel",
            self::ELECTRICO => "electrico",
        };
    }
}
 class Car
{
    use Turbo;

    protected String $marca;
    protected string $matricula;
    protected combustible $tipoCombustible;
    protected int $velocidadMaxima;

    public function __construct(string $marca, string $matricula, combustible $tipoCombustible, int $velocidadMaxima)
    {
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->tipoCombustible = $tipoCombustible;
        $this->velocidadMaxima = $velocidadMaxima;
    }

    public function IniciarTurbo(): string
    {
        return $this->boost();
    }
    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of tipoCombustible
     */ 
    public function getTipoCombustible()
    {
        return $this->tipoCombustible;
    }

    /**
     * Set the value of tipoCombustible
     *
     * @return  self
     */ 
    public function setTipoCombustible(combustible $tipoCombustible)
    {
        $this->tipoCombustible = $tipoCombustible;

        return $this;
    }

    /**
     * Get the value of velocidadMaxima
     */ 
    public function getVelocidadMaxima()
    {
        return $this->velocidadMaxima . "kms/h";
    }

    /**
     * Set the value of velocidadMaxima
     *
     * @return  self
     */ 
    public function setVelocidadMaxima($velocidadMaxima)
    {
        $this->velocidadMaxima = $velocidadMaxima;

        return $this;
    }
}

$coche1 = new Car("Renault", "M4567K", combustible::DIESEL, 180);

echo "El coche " .  $coche1->getMarca() . ", con matricula " . $coche1->getMatricula() .", utiliza como combustible  " . $coche1->getTipoCombustible()->combustibles() . ", tiene una velocidad maxima de " . $coche1->getVelocidadMaxima() . " y " . $coche1->IniciarTurbo() . "<br>";

$coche2 = new Car("Ferrary", "R1278L", combustible::GASOLINA, 270);
echo "El coche " .  $coche2->getMarca() . ", con matricula " . $coche2->getMatricula() .", utiliza como combustible  " . $coche2->getTipoCombustible()->combustibles() . ", tiene una velocidad maxima de " . $coche2->getVelocidadMaxima() . " y " . $coche2->IniciarTurbo();