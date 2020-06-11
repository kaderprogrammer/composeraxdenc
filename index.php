<?php
    /**
     * 
     */
    class Abduqodir 
    {
    	
    	public $name;

    	public function setName($name)
    	{
    		$this->name = $name;
    	}
    	public function getName()
    	{
    		return $this->name;
    	}
    }
    $obj = new Abduqodir();
    $obj->setName('Abduqodir');
    echo $obj->getName();
?>