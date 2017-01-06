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
		if( ! isset($req->_token))
		{
			\Redirect::back();
		}

		if (\Session::token() != $req->_token) 
		{ 
			exception(\LogicException::class , 'Csrf Token is not allowed');
		}
		
		return pass();
	}

}