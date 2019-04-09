<?php
include_once "Class2d.php";

class Class3d extends Class2d
{
    public $z;
    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }
    public function setZ($z)
    {
        $this->z=$z;
    }
    public function getZ(){
         return $this->z;
    }
    public function setXYZ($x,$y,$z){
        $this->z=$z;
        parent::setXY($x,$y);
    }
    public function getXYZ(){
        $array1=[$this->x,$this->y,$this->z];
        return $array1;
    }
    public  function ToString()
    {
        print_r($this->getXYZ());

    }

}