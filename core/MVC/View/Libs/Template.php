<?php


namespace Fiesta\Core\MVC\View;

/**
* Smarty Template class
*/
class Template
{
	public static $smarty;

	public static function ini($root="")
	{
		self::$smarty=new \Smarty;
		//
		self::$smarty->force_compile = false;
		//self::$smarty->debugging = true;
		//self::$smarty->caching = true;
		//self::$smarty->cache_lifetime = 120;
		//Smarty::muteExpectedErrors();

		self::$smarty->setTemplateDir('../app/storage/view/compile');
		self::$smarty->setCompileDir('../app/storage/view/template');
	}

	public static function show($view,$data=null)
	{
		if(!is_null($data))
			foreach ($data as $key => $value)
				{self::$smarty->assign($key, $value);}
		//
		return self::$smarty->display($view);
	}
}
