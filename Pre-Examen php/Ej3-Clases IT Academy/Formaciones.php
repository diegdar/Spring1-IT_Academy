<!-- Imagina que debes desarrollar aplicaciones para el Moodle de la ItAcademy. Como bien sabéis, antes
de programar debemos entender el contexto en el que trabajamos. Haga una propuesta de clases (con sus atributos y métodos
correspondientes) para resolver el siguiente problema:
· Debemos grabar contenido de la ItAcademy. En concreto, las formaciones.
· Tenemos 4 tipos de formaciones: Fundamentos, especializaciones mentorizadas, proyecto, y búsqueda
de trabajo.
· Cada formación tiene un nomFormacion y una descripción.
· Tenemos 4 tipos de especializaciones mentorizadas: Front-end, Backend, Fullstack y DataScience. 
. Las especializaciones mentorizadas tienen un nomFormacion de especialización y 5 sprints. . Cada sprint
tiene un nomFormacion y duracion en días lectivos.
Diseña las clases necesarias, en el lenguaje que más dominios o con pseudocódigo, para representar esta
información.-->

<?php

class Formaciones{

    protected string $nomFormacion;
    protected string $descripcion;

    public function __construct(string $nomFormacion, string $descripcion){
        $this->nomFormacion = $nomFormacion;
        $this->descripcion = $descripcion;
    }

}




