<?php
interface Shape{
	public function calcArea();
}
class Circle implements Shape
{
	private $radius;
	public function __construct($radius)
	{
		$this->radius = $radius;
	}
	public function calcArea()
	{
		return $this->radius * $this->radius * 3.14;
	}
}

class Rectangle implements Shape
{
	private $width;
	private $height;
	public function __construct($w, $h)
	{
		$this->width = $w;
		$this->height = $h;
	}
	public function calcArea()
	{
		return $this->width * $this->height;
	}
}
$circleObj = new Circle(3);
echo "Circle's area : ".$circleObj->calcArea();
echo "<hr/>";
$rectObj = new Rectangle(2,3);
echo "Rectangle's area : ".$rectObj->calcArea();
echo "<hr/>";