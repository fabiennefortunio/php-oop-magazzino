<?php 

include_once chianti.php;


Class Wine {


    //Attributes
    //ATTRIBUTES: variables or arrays; type: public, private, protected.

    public $brand = "Ribera del Duero";
    public $year = 1998;
    public $country ="maria";
    private $email;
    // public static $one ="this is an static attribute";





    //Methods
    // Access to attributes with: $this->name. - we can access to other methods with $this or self::
    public function sell($parametroUno, $parametroDos){

    echo "This wine is: ". $parametroUno . "<br>And his year is ". $parametroDos;
    $this -> email;
    }
};

//Creating an object:

$wine = new Wine();
// echo $wine->brand;
//how to access to the method:
 $wine->sell("Ribera del Duero", 1998);

// echo $wine -> brand . "<br>";
// echo $wine -> year . "<br>";

echo Wine:: $one;




?>


