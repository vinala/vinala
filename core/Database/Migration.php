<?php 


/**
* migaration class
*/
class Migration
{
	
	public static function getAll($name)
	{
		$r=glob("app/schemas/*.php");
		$r2=array();
		foreach ($r as $value) {
			
			$temp=explode("_",$value);
			
			$temp2=explode(".",$temp[1]);
			
			$r2[]=$temp2[0];
			
		}
		
		$r3=array_unique($r2);
		//
		
		echo "<div class='form-group col-md-7' style='display:block'><select name=".$name." class='form-control'>";
		foreach ($r3 as $value) {
			echo "<option value='".$value."'>".$value."</option>";
		} 
		echo "</select></div>";
	}

	/**
	 * Reverse the migrations.
	 */
	public function down()
	{
		# code...
	}
}