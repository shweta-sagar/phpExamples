<?php

namespace Training\Vehicle;

// class Car
// {
// 	private $model;
// 	public function __construct($model)
// 	{

// 		$this->model = $model;
// 	}
// 	public function getCarModel()
// 	{
// 		return "The car model is ". $this->model;
// 	}
// }
// $car1 = new Car("Mercedes");
// echo $car1->getCarModel();

//using default value to the constructor
// class Car
// {
// 	private $model='';
// 	public function __construct($model=null)
// 	{
// 		if($model)
// 		{
// 			$this->model=$model;
// 		}
// 	}
// 	public function getCarModel()
// 	{
// 		return "The car model is ".$this->model;
// 	}
// }
// $carObj=new Car("Hyundai");
// echo $carObj->getCarModel();

//	Using magic constants

class Car
{
	private $model='';
	
	// public function __construct($model=null)
	// {
	// 	if($model)
	// 	{
	// 		$this->model=$model;
	// 	}
	// 	echo "The name of the method is <b>". __METHOD__."</b><br>";
	// }
	public function setCarModal($abc = NULL) {
		$this->model = $abc;
	}
	public function getCarModel()
	{
		echo "The name of the file is <b>". __FILE__ ."</b><br>";
		return "The <b> ". __CLASS__ ."</b> model is ".$this->model;
	}
}

class Bike
{
	private $model='';
	
	public function __construct($model=null)
	{
		if($model)
		{
			$this->model=$model;
		}
		echo "The name of the method is <b>". __METHOD__."</b><br>";
	}

	public function setBikeModal($model = NULL) {
		if (!empty($model)){
			$this->model=$model;
		}
		return $this->model;
	}
	public function getBikeModel() {
		echo "The name of the file is <b>". __FILE__ ."</b><br>";
		return "The <b> ". __CLASS__ ."</b> model is ".$this->model;
	}
}