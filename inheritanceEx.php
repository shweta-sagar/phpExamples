<?php
//Inheritance example
// class Car 	//Base class
// {
// 	private $model;
// 	public function setModel($model)
// 	{
// 		$this->model=$model;
// 	}
// 	public function getModel()
// 	{
// 		return $this->model;
// 	}
// }
// class sportsCar extends Car 	//Sub class
// {
// 	private $style="fast and furious";
// 	public function driveWithStyle()
// 	{
// 		return "Drive a ".$this->getModel()." <i>".$this->style."</i>";
// 	}
// }
// $sportsCar1=new sportsCar();
// $sportsCar1->setModel("Ferrari");
// echo $sportsCar1->driveWithStyle();
 
//Method overriding
class Shape
{
	public function myFunc()
	{
		return "Inside Shape class";
	}
}
class Circle extends Shape
{
	public function myFunc()
	{
		return "Inside Circle class";
	}
}
$circleObj = new Circle();
echo $circleObj->myFunc();