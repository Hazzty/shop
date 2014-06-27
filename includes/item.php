<?php
class Item
{
	//instance variables
	protected $ID;
	protected $DATE;
	protected $NAME;
	protected $DESCRIPTION;
	protected $STOCK;
	
	//Magic constructor
	public function __CONSTRUCT($id, $date, $name, $stock, $desc)
	{
		$this->ID = $id;
		$this->DATE = $date;
		$this->STOCK = $stock;
		$this->NAME = $name;
		$this->DESCRIPTION = $desc;
	}
	//Magic SET
	public function __SET($var, $value)
	{
		switch($var)
		{
		case "ID":
			$this->ID = $value;
			break;
		case "STOCK":
			$this->STOCK = $value;
			break;
		case "DATE":
			$this->DATE = $value;
			break;
		case "NAME":
			$this->NAME = $value;
			break;
		case "DESCRIPTION":
			$this->DESCRIPTION = $value;
			break;
		}
	}
	//Magic GET
	public function __GET($var)
	{
		switch($var)
		{
		case "ID":
			return $this->ID;
			break;
		case "STOCK":
			return $this->STOCK;
			break;
		case "DATE":
			return $this->DATE;
			break;
		case "NAME":
			return $this->NAME;
			break;
		case "DESCRIPTION":
			return $this->DESCRIPTION;
			break;
		}
	
	}
	//Prints the 'preview' of the current item
	public function echoItem()
	{
	echo "
	<div class='item'>
		<h1> {$this->NAME}</h1>
		<p>{$this->DATE}</p>
		<p class='description'>{$this->DESCRIPTION}</p>
	</div>";
	
	}
}
?>

	