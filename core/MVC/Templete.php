<?php

/**
* Smarty Templete class
*/
class Templete
{
	public static $smarty;


	public static function ini($root="")
	{
		require_once $root.'../core/Associates/Smarty/Smarty.class.php';
		//
		self::$smarty=new Smarty;
		//
		self::$smarty->force_compile = false;
		//self::$smarty->debugging = true;
		//self::$smarty->caching = true;
		//self::$smarty->cache_lifetime = 120;
		//Smarty::muteExpectedErrors();

		self::$smarty->setTemplateDir('../app/storage/view/compile');
		self::$smarty->setCompileDir('../app/storage/view/template');
		//self::$smarty->setCacheDir('app/storage/view/cache');
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
