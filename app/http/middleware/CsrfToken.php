<?php

namespace App\Http\Middleware;

use Vinala\Kernel\Http\Request;

/**
* VerifyCsrfToken Middleware
*
* @author 
**/
class CsrfToken
{

	/**
	* Handle the middleware
	*
	* @param Vinala\Kernel\Http\Request $req
	* @return bool|string
	**/
	public function handle(Request $req)
	{
		if( ! $this->check($req) )
		{
			\Redirect::back();
		}

		if (\Session::token() != $req->_token) 
		{ 
			exception(\LogicException::class , 'Csrf Token is not allowed');
		}
		
		return pass();
	}


	/**
	* Check if Token exists in request
	*
	* @param Vinala\Kernel\Http\Request $req 
	* @return bool
	*/
	public function check(Request $req)
	{
		return ( isset($req->_token) && ! empty($req->_token));
	}
	

}