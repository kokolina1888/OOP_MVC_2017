<?php 

//THE SO CALLED MAGIC METHODS
//http://php.net/manual/en/language.oop5.overloading.php#object.get


class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();

    // *  Overloading not used on declared properties.  
    // public $declared = 1;

    /**  Overloading only used on this when accessed outside the class.  */
    private $hidden = 2;

    
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }       
    }

   
}


echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 1;
$obj->b = 2;

echo $obj->a . "\n\n";
echo $obj->b . "\n\n";

// var_dump($obj->data);

// echo $obj->declared . "\n\n";

// echo "Let's experiment with the private property named 'hidden':\n";

//!!!!!THE MAIN PURPOSE OF MAGIC GETTER AND SETTER
// echo "Privates not visible outside of class, so __get() is used...\n";
// echo $obj->hidden . "\n";