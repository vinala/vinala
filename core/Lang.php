<?php 

/**
* Language class
*/
class Lang
{
	static $textes;
	public static $lang;
	static $app_langs = array(
		'fr','en','ar' 
		);




	public static function ini($lang=NULL)
	{
		if(empty($lang)) $lang=self::detect();
		self::set($lang);
	}

	public static function get($key)
	{
		//echo $texte[$key];
		try {
			echo self::$textes[$key];
		} catch (Exception $e) {
			error_log("Langue : index non trouvez [".$key."] in Lang::get()");
		}
		
	}

	public static function ref($key)
	{
		//echo $texte[$key];
		return self::$textes[$key];
	}

	public static function set($lang)
	{
		//extract the lang
		
		switch ($lang) {
			case 'ar': self::$lang="ar"; break;
			case 'fr': self::$lang="fr"; break;
			case 'en': self::$lang="en"; break;
			/*
			 set other language here :
			 case 'language_bref': self::$lang="Folder_name_in_lang_directory"; break;
			*/
			default: self::$lang=Config::get('lang.default'); break;
		}

		
		foreach (glob("app/lang/".self::$lang."/*.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value) {
				self::$textes[$key]=$value;
			}
		}
	}

	public static function detect()
	{

		if(Base::full(Cookie::get(Config::get('lang.cookie'))))
		{
			if (in_array(Cookie::get(Config::get('lang.cookie')), self::$app_langs)) {
			    Res::stsession("lang",Cookie::get(Config::get('lang.cookie')));
			}
			else Res::stsession("lang",Config::get('lang.default'));
		}
		else if(isset($_SESSION["lang"]))
		{

		}
		else 
		{ 
			Res::stsession("lang",Config::get('lang.default'));
		}


		return Res::session("lang");
	}

	
}
