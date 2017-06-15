<?php

require_once("IVehicle.php");

abstract class Vehicle implements IVehicle
{
   
   public $brand;
   public $color;
   public $engine;
   
   public function __construct($brand = null, $color = null) 
   {
       $this->brand = $brand;
       $this->color = $color;
   }
   
   public function getEngine($type = null)
   {
       return "$this->engine. {$type}";
   }
   
   abstract public function getBrand();
   
   public function getColor() {
       $this->color = $color;
   }
   
}
