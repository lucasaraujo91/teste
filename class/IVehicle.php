<?php

interface IVehicle
{
    public function getEngine($type = "horsepower");
    
    public function getBrand();
    
    public function getColor();
}
