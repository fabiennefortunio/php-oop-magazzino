<?php

/* 
CLASES
    - Atributos
    - Metodos
OBJETOS (instanciacion)
CONSTRUCTOR
DESTRUCTOR
HERENCIA

*/

//MY CLASS 
class myClass{
    
    public $attribute1;
    public $attribute2;
    private $email;
    public static $one ="this is an static attribute";
    const MI_CONSTANTE = 3.1416;

    public function myMethod1(){
        echo "this is a method";
    }

};

// MY OBJECTS

    $myObjectOne = new myClass;

    // data insertion
    $myObjectOne -> attribute1 = "Fortunio";
    $myObjectOne -> attribute2 = "35";
    
    // data call - caaling attributer or methods 


?>

