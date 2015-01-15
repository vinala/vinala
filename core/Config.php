<?php 
/**
* Config Class
*/
class Config
{
	

	public static function get($value='')
	{
		$ret=null;
		$val=explode('.', $value);
			//
		switch ($val[0]) {
			case 'database':
				if(is_null(App::$root)) $tbl=(include 'app/config/database.php');
				else $tbl=(include App::$root.'app/config/database.php');
				//
				if($val[1]=="default")
				{
					$ret=$tbl[$val[1]];
				}
				else if($val[1]=="host")
				{
					$ret=$tbl['connections'][$tbl['default']]['host'];
				}
				else if($val[1]=="database")
				{
					$ret=$tbl['connections'][$tbl['default']]['database'];
				}
				else if($val[1]=="username")
				{
					$ret=$tbl['connections'][$tbl['default']]['username'];
				}
				else if($val[1]=="password")
				{
					$ret=$tbl['connections'][$tbl['default']]['password'];
				}
				else if($val[1]=="migration")
				{
					$ret=$tbl['migration'];
				}
				else
				{ 
					if(count($val)>=3)
					{
						switch ($tbl['default']) {
							case 'sqlite':
								if(count($val)==3)
									$ret=$tbl['connections']['sqlite'];
								else if(count($val)==4)
								{
									$ret=$tbl['connections']['sqlite'][$val[3]];
								}
								break;

							case 'mysql':
								if(count($val)==3)
									$ret=$tbl['connections']['mysql'];
								else if(count($val)==4)
								{
									$ret=$tbl['connections']['mysql'][$val[3]];
								}
								break;

							case 'pgsql':
								if(count($val)==3)
									$ret=$tbl['connections']['pgsql'];
								else if(count($val)==4)
								{
									$ret=$tbl['connections']['pgsql'][$val[3]];
								}
								break;

							case 'sqlsrv':
								if(count($val)==3)
									$ret=$tbl['connections']['sqlsrv'];
								else if(count($val)==4)
								{
									$ret=$tbl['connections']['sqlsrv'][$val[3]];
								}
								break;
						}
					}
				}
				break;
			case 'panel':
				if(is_null(App::$root)) { $tbl=(include 'app/config/panel.php'); }
				else { $tbl=(include App::$root.'app/config/panel.php'); }
				//
				if($val[1]=="route") $ret=$tbl['route'];
				else if($val[1]=="password1") $ret=$tbl['password1'];
				else if($val[1]=="password2") $ret=$tbl['password2'];
				else if($val[1]=="mainColor") $ret=$tbl['mainColor'];
				else if($val[1]=="tabsColor") $ret=$tbl['tabsColor'];
				//
				break;
			case 'app':
				if(is_null(App::$root)) $tbl=(include 'app/config/app.php');
				else $tbl=(include App::$root.'app/config/app.php');
				//
				if($val[1]=="project") $ret=$tbl['project'];
				else if($val[1]=="projectFolder") $ret=$tbl['projectFolder'];
				else if($val[1]=="url") $ret=$tbl['url'];
				else if($val[1]=="lang") $ret=$tbl['lang'];
				else if($val[1]=="owner") $ret=$tbl['owner'];
				else if($val[1]=="title") $ret=$tbl['title'];
				//
				break;
			case 'license':
				if(is_null(App::$root)) $tbl=(include 'app/config/license.php');
				else $tbl=(include App::$root.'app/config/license.php');
				//
				if($val[1]=="authorized") $ret=$tbl['authorized'];
				else if($val[1]=="pageblock") $ret=$tbl['pageblock'];
				else if($val[1]=="webMsg") $ret=$tbl['webMsg'];
				else if($val[1]=="pageMsg") $ret=$tbl['pageMsg'];
				//
				break;	
			case 'maintenance':
				if(is_null(App::$root)) $tbl=(include 'app/config/maintenance.php');
				else $tbl=(include App::$root.'app/config/maintenance.php');
				//
				if($val[1]=="activate") $ret=$tbl['activate'];
				else if($val[1]=="maintenanceEvent") $ret=$tbl['maintenanceEvent'];
				else if($val[1]=="maintenanceResponse") $ret=$tbl['maintenanceResponse'];
				else if($val[1]=="outRoutes") $ret=$tbl['outRoutes'];
				//
				break;		
			case 'lang':
				if(is_null(App::$root)) $tbl=(include 'app/config/lang.php');
				else $tbl=(include App::$root.'app/config/lang.php');
				//
				if($val[1]=="default") $ret=$tbl['default'];
				else if($val[1]=="cookie") $ret=$tbl['cookie'];
				//
				break;		
			case 'security':
				if(is_null(App::$root)) $tbl=(include 'app/config/security.php');
				else $tbl=(include App::$root.'app/config/security.php');
				//
				if($val[1]=="key1") $ret=$tbl['key1'];
				else if($val[1]=="key2") $ret=$tbl['key2'];
				//
				break;		
			case 'auth':
				if(is_null(App::$root)) $tbl=(include 'app/config/auth.php');
				else $tbl=(include App::$root.'app/config/auth.php');
				//
				if($val[1]=="table") $ret=$tbl['table'];
				else if($val[1]=="hashed_fields") $ret=$tbl['hashed_fields'];
				else if($val[1]=="saved_fields") $ret=$tbl['saved_fields'];
				else if($val[1]=="rememeber_cookie") $ret=$tbl['rememeber_cookie'];
				else if($val[1]=="login") $ret=$tbl['login'];
				else if($val[1]=="csrf_token") $ret=$tbl['csrf_token'];
				//
				break;		
			case 'mail':
				if(is_null(App::$root)) $tbl=(include 'app/config/mail.php');
				else $tbl=(include App::$root.'app/config/mail.php');
				//
				if($val[1]=="host") $ret=$tbl['host'];
				else if($val[1]=="port") $ret=$tbl['port'];
				else if($val[1]=="from")
				{
					if(count($val)==2) $ret=$tbl['from'];
					else if(count($val)==3)
					{
						if($val[2]=="adresse") $ret=$tbl['from']['adresse'];
						else if($val[2]=="name") $ret=$tbl['from']['name'];
					}
				} 
				else if($val[1]=="encryption") $ret=$tbl['encryption'];
				else if($val[1]=="username") $ret=$tbl['username'];
				else if($val[1]=="password") $ret=$tbl['password'];
				else if($val[1]=="subject") $ret=$tbl['subject'];
				//
				break;
			case 'view':
				if(is_null(App::$root)) $tbl=(include 'app/config/view.php');
				else $tbl=(include App::$root.'app/config/view.php');
				//
				if($val[1]=="pagination_param") $ret=$tbl['pagination_param'];
				else if($val[1]=="pagination_style") $ret=$tbl['pagination_style'];
				else if($val[1]=="pagination_class") $ret=$tbl['pagination_class'];
				else if($val[1]=="paginationSimpleNext") $ret=$tbl['paginationSimpleNext'];
				else if($val[1]=="paginationSimplePrevious") $ret=$tbl['paginationSimplePrevious'];
				
				//
				break;

			case 'loggin':
				if(is_null(App::$root)) $tbl=(include 'app/config/loggin.php');
				else $tbl=(include App::$root.'app/config/loggin.php');
				//
				if($val[1]=="debug") {$ret=$tbl['debug'];}
				else if($val[1]=="msg") $ret=$tbl['msg'];
				else if($val[1]=="log") $ret=$tbl['log'];
				
				// else if($val[1]=="paginationSimplePrevious") $ret=$tbl['paginationSimplePrevious'];
				break;
			
		}
		return $ret;
	}

}


