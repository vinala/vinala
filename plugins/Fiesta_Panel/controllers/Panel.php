<?php 

namespace Fiesta\Vendor\Panel2;

use Fiesta\Kernel\Router\Route;
use Fiesta\Kernel\MVC\View\View;

/**
* 
*/
class Panel
{
	public static function setRoute()
	{
		Route::get("fiesta",function()
		{
			View::import("fst_panel","home");
		});
	}

	public static function setAjaxRoutes()
	{
		Route::get(Config::get('panel.route')."/{op}",function($op){

				//check if prefixe existe in this Kernel version
				$prefixe = Config::check('security.prefix') ? Config::get('security.prefix')."_" : "" ;
				//
				switch ($op) {
					case $prefixe.'new_seed' : Seeds::add(); break;
					case $prefixe.'exec_migration' : Migrations::exec(); break;
					case $prefixe.'rollback_migration' : Migrations::rollback(); break;
					case $prefixe.'new_migration' : Migrations::add(); break;
					case $prefixe.'new_controller' : Controller::create(); break;
					case $prefixe.'new_dir_lang' : Lang::createDir(); break;
					case $prefixe.'new_file_lang' : Lang::createFile(); break;
					case $prefixe.'new_link' : Link::create(); break;
					case $prefixe.'new_model' : Model::create(); break;
					case $prefixe.'new_view' : View::create(); break;
					case $prefixe.'exec_cos_migration' : Migrations::exec_cos(); break;
					case $prefixe.'rollback_cos_migration' : Migrations::rollback_cos(); break;
				}
			});
	}
}