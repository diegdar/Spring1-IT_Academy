<!-- Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre, sin embargo, no es lo mismo el sonido del “habla” de un perro, que el de un gato. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos comportamientos. Básicamente, queremos un método makeSound() que muestre un mensaje diferente si se trata de un perro (por ejemplo, “Bup, bup!”) o un gato (por ejemplo “Mi!”).

 -->
 <?php

// Declaracion de las clases
    abstract class Animal{
        protected $name;

        public function __construct($nombre){
            $this->name = $nombre;
        }

        public function getName(){
            return $this->name;
        }

        abstract public function makeSound(); //metodo que tendran que implementar de forma personalizada el resto de clases

    }

    
