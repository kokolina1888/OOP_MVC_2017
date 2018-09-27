<?php 
// I especially love this example because it not only violates LSP, it also demonstrates that object oriented programming is not about mapping real life to objects. 

Class Rectangle {

	private $width;
    private $height;
 
    public function setHeight($height) {
        $this->height = $height;
    }
 
    public function getHeight() {
        return $this->height;
    }
 
    public function setWidth($width) {
        $this->width = $width;
    }
 
    public function getWidth() {
        return $this->width;
    }

    function area() {
        return $this->width * $this->height;
    }

}


class Square extends Rectangle {

	 public function setHeight($value) {
        $this->width = $value;
        $this->height = $value;
    }
 
    public function setWidth($value) {
        $this->width = $value;
        $this->height = $value;
    }
	
}


class Client {

	function areaVerifier(Rectangle $r) {
        $r->setWidth(5);
        $r->setHeight(4);
 
        if($r->area() != 20) {
            throw new Exception('Bad area!');
        }
 
        return true;
    }
}

$rectangle = new Rectangle();
$square = new Square();

$client = new Client();

//1

// $client->areaVerifier($rectangle);
// //no error
// var_dump($client->areaVerifier($rectangle));
//returns true

//2

$client->areaVerifier($square);
//error bad area

//Usage

class Vehicle {
 
    function startEngine() {
        // Default engine start functionality
    }
 
    function accelerate() {
        // Default acceleration functionality
    }
}

class Car extends Vehicle {
 
    function startEngine() {
        $this->engageIgnition();
        parent::startEngine();
    }
 
    private function engageIgnition() {
        // Ignition procedure
    }
 
}

class ElectricBus extends Vehicle {
 
    function accelerate() {
        $this->increaseVoltage();
        $this->connectIndividualEngines();
    }
 
    private function increaseVoltage() {
        // Electric logic
    }
 
    private function connectIndividualEngines() {
        // Connection logic
    }
 
}

class Driver {
    function go(Vehicle $v) {
        $v->startEngine();
        $v->accelerate();
    }
}

