<?php
 Class MyClass{
    public $x, $y, $z;

    public function __construct($a,$b)
    {
        $this->x = $a;
        $this->y = $b;
    }
    
    public function mysum(){
       $this->z = $this->x + $this->y;
       return $this->z;
    }
 }
//  $simona = new MyClass();
//  $simona->x = 200;
//  $simona->y = 100;

//  echo $simona->mysum();

 $simona = new MyClass(300,400);
 echo $simona->mysum();

?>