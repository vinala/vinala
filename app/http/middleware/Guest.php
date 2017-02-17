<?php

namespace App\Http\Middleware;

use Vinala\Kernel\Http\Request;
use Vinala\Kernel\Authentication\Auth;

/**
* Guest Middleware
*
* @author 
**/
class Guest
{

	/**
	* The path to return if user not logged in
	*
	* @return string
	*/
	private function login()
	{
		return '/';
	}
	

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
			redirect(['route' => $this->login() ]);
		}
		else return pass();
	}

}