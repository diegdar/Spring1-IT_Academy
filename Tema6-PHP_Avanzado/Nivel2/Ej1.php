<!-- Crea una clase que contenga los métodos getFile() y getDir() que devuelva el path entero y el directorio del archivo utilizando constantes mágicas. -->
<?php
    class ConstantesMagicas{

        protected $file;
        protected $dir;

        public function getFile(){
            echo $this->file = __FILE__;
        }

        public function getDir(){
            echo $this->dir = __DIR__;
        }

    }

    $prueba = new ConstantesMagicas();
    
    // Muestra la ruta del archivo
    $prueba->getFile();

    echo "<br><br>";

    // Muestra la ruta de la carpeta donde esta el archivo
    $prueba->getDir();
?>