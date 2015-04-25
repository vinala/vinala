<?php 

namespace Fiesta\MVC\Model;

/**
* Directory not fount exception
*/
class ColumnNotEmptyException extends \Exception{

	function __construct($column,$model) {
		$this->message = "Column $column already have value in $model model ";
	}
	
}