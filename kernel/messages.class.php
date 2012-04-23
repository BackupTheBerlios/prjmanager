<?php

/**
 * @brief Engine for managment display messages
 * @author Christophe DALOZ - DE LOS RIOS
 * @version 1.0
*/
class Messages
{
	private $format; // String format
	
	/**
	 * @brief Constructor of class
	*/
	public function __construct()
	{
		$this->format = "border: 4px ridge %s; background-color: %s; color: #000000;".
		"text-align: center; margin-left: 30%; margin-right: 30%;padding: 1%;border-radius: 10px;";
	}
	
	/**
	 * @brief Display the success message
	 * @param string msg Message
	*/
	public function success($msg)
	{
		$format = str_replace("%s", "#00FF00", $this->format);
		echo '<div style="'.$format.'">'.$msg.'</div>';
	}
	
	/**
	 * @brief display the warning message
	 * @param string msg Message
	*/
	public function warning($msg)
	{
		$format = str_replace("%s", "#FFA900", $this->format);
		echo '<div style="'.$format.'">'.$msg.'</div>';
	}
	
	/**
	 * @brief display the error message
	 * @param string msg Message
	*/
	public function error($msg)
	{
		$format = str_replace("%s", "#FF3020", $this->format);
		echo '<div style="'.$format.'">'.$msg.'</div>';
	}
}

?>

