<!-- Crea una clase que represente un recurso didáctico de esa especialidad. Los recursos tendrán que tener un nombre, un tema (que sólo podrá ser PHP, CSS, HTML, SQL, Laravel) una URL y un tipo de recurso (Archivo, Artículo web, Vídeo). Implementa tanto el tema como el tipo de recurso con enumbres.

 -->
<?php

enum Tema{
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case Laravel;

    public function temas():string
    {
        return match($this)
        {
            self::PHP => "PHP",
            self::CSS => "CSS",
            self::HTML => "HTML",
            self::SQL => "SQL",
            self::Laravel => "Laravel"

        };
    }
} 

enum recurso{
    case ARCHIVO;
    case ARTICULO;
    case WEB;
    case VIDEO;

    public function recursos(): string
    {
        return match($this)
        {
            self::ARCHIVO=>"ARCHIVO",
            self::ARTICULO=>"ARTICULO",
            self::VIDEO => "VIDEO",
            self::WEB => "WEB"
        };
    }
} 

class RecursoDidactico
{
    protected string $nombre;
    protected Tema $tema;
    protected string $url;
    protected recurso $recurso;

    public function __construct(string $nombre, Tema $tema, string $url, recurso $recurso)
    {
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->url = $url;
        $this->recurso = $recurso;
    }

    public function getNombre()
    {
        return $this->nombre; 
    }

    public function getTema()
    {
        return $this->tema;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getRecurso()
    {
        return $this->recurso;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setTema(Tema $tema): void
    {
        $this->tema = $tema;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
    public function setRecurso(Recurso $recurso): void
    {
        $this->recurso = $recurso;
    }
}

$recursoDidactico1 = new RecursoDidactico("Especializacion en PHP", Tema::PHP, "https://www.php.net/manual/es/", recurso::ARTICULO);

echo "Nombre: " . $recursoDidactico1->getNombre() . "<br>";
echo "Tema: " . $recursoDidactico1->getTema()->temas() . "<br>";
echo "Url: " . $recursoDidactico1->getUrl() . "<br>";
echo "Recurso: " . $recursoDidactico1->getRecurso()->recursos() . "<br>";

