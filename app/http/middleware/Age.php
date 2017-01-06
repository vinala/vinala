<?php 

namespace App\Http\Middleware ;

use Closure;
use Vinala\Kernel\Http\Middleware\Middleware;
use Vinala\Kernel\Http\Request;

/**
* Documentation
*
* @version 1.0
* @author Youssef Had
* @package App\Http\Middleware
* @since v3.3.0
*/
class Age
{
	
	/**
	* Handle the CSRF middleware
	*
	* @param 
	* @param 
	* @return 
	*/
	public function handle(Request $req)
	{
		if ($req->age < 50 ) { return go(); }
		else 
		{ 
			// redirect(['route'=>'non']);
			return 'ttt';
		}
		
	}
	

}	