<?php

class Cube extends Rectangle
{
  private $z;

  public function getZ()
	{
		return $this->z;
	}
	
	public function setZ($Z)	
	{
		$this->z = $Z;
  }
    
    // Area 
  public function getArea()
	{
		return  2 * $this->x * $this->y +
            2 * $this->x * $this->z +
            2 * $this->y * $this->z;
	}

	// Volume
	public function getVolume()
	{
		return $this->x * $this->y * $this->z;
	}
	
}

?>