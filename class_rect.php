<?php
class Rectangle{
    var $width;
    var $height;
    public function __construct( $width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }
    public function getArea(){
        return $this->width*$this->height;
    }
    public function getPerimeter(){
        return ($this->width+$this->height)*2;
    }
     function display(){
        return "Dientich=".($this->width+$this->height)*2;
    }
}
$width=10;
$height=20;
$rec=new Rectangle($height,$width);
echo $rec->getArea()."<br>";
echo $rec->getPerimeter()."<br>";
echo $rec->display();
