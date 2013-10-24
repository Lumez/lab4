<?php
class Car
{
	private $make;
	private $model;
	private $colour;
	private $description;
	private $price;
	private $reg_number;
	private $reg_year;
	
	function __construct($make, $model, $colour, $description, $price, $reg_number, $reg_year) {
		$this->make = $make;
		$this->model = $model;
		$this->colour = $colour;
		$this->description = $description;
		$this->price = $price;
		$this->reg_number = $reg_number;
		$this->reg_year = $reg_year;
	}
	
	function getMake() {
		return $this->make;
	}
	
	function getModel() {
		return $this->model;
	}
	
	function getColour() {
		return $this->colour;
	}
	
	function getDescription() {
		return $this->description;
	}
	
	function getPrice() {
		return $this->price;
	}
	
	function getRegNumber() {
		return $this->reg_number;
	}
	
	function getRegYear() {
		return $this->reg_year;
	}
	
	/**
	 * Gets the age of the car
	 *
	 * Calculates the age of the car using the current date and the
	 * registration year, and returns it.
	 *
	 * @return	int 	age of the car
	 */
	function getAge() {
		$age = intval(date('Y')) - $this->reg_year;
		return $age;
	}
}