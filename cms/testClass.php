<?php
class Customer
{
	var $custName = 'cock';
	
	public function setName($name)
	{
		$this->custName = $name;
	}
	
	public function getName()
	{
		return $this->custName;
	}
}
?>