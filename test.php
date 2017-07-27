<?php
  class Car
  {
  	private $model;
  	public function setModel($model)
  	{
  		$allowedModels=array("Mercedes Benz","BMW");
  		if(in_array($model,$allowedModels))
  		{
  			$this->model=$model;
  		}
  		else
  		{
  			$this->model="Not in our list of models";
  		}		
  	}
  	public function getModel()
  	{
  		// print_r($this->$model);
  		return "The car model is " . $this->model;
  	}
  }
  $Mercedes=new Car();
  // print_r($Mercedes);
  $Mercedes->setModel("Mercedes Benz");
  // print_r($Mercedes);
 echo  $Mercedes->getModel();
  // print_r($Mercedes);

 drupal_goto('localhost/phpTut.php');