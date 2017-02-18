<?php

namespace App\Http\Middleware;

use Vinala\Kernel\Http\Request;
use Vinala\Kernel\Authentication\Auth;

/**
* Authentication Middleware
*
* @version 1.0
* @author Youssef Had
* @package App\Http\Middleware
* @since v3.3.0
*/
class Authentication
{

	/**
	* Handle the middleware
	*
	* @param Vinala\Kernel\Http\Request $req
	* @return bool|string
	**/
	public function handle(Request $req)
	{
		if (Auth::guest())
		{
			redirect('@login');
		}
		else return pass();
	}

}