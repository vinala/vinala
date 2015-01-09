<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
| hna route dial l application dialk aya route 
| khask t7eto hena mais route khas ikon diffrent 
| 3la had les valeurs:
| /app - /core - /libs - /App.php - /readme.txt 
| - /robots.txt
*/


Routes::get("/",function()
{
	Page::put('hello');
});
Routes::get("/mailtest",function()
{
	View::get('mail',array('data'=>"youssef had"));
});

Routes::post("/login",function()
{
	if(Auth::attempt(array('mail'=>Res::post('mail'),'password'=> Res::post('password')),true))
		{
			Url::redirect("@clients");
		}
});

Routes::get("/mail",function()
{
	if(Mail::send("mail lorem openal_stream(source, format, rate)",array('name'=> 'Youssef HAD'),function($message)
	{
		$message->to("youssefhad2@gmail.com")
			->subject("Welcome")
			->attach("app/res/images/gifts/cake.png")
			->cc("youssefhad2@gmail.com")
			->type("text");

	}))
		echo "oui";
	else echo "non";
});

Routes::get("/login",function()
{
	View::make('login');
});

Routes::get("/guest",function()
{
	if(Auth::check())
		echo 'bienvenue';
	else echo "go fuck your self";
});

Routes::get("/ran",function()
{
	echo Hash::random(10);
});



Routes::get("/hash",function()
{
	echo Hash::make('said');
});


Routes::get("/suc/{}",function($id)
{
	$hsh=Hash::make($id);
	echo $hsh."<br>";
	if(Hash::check($id,$hsh)) echo "ok";
	else echo "non";
});

Routes::get("/clients",array("auth",function()
{

	$nom=Auth::user()->nom;
	echo "welcome ".$nom."<br>";
	//
	?>
	<a href="<?php echo Links::get('lgout') ?>">Logout</a>
	<?php

}));


Routes::post("/new",array("csrf",function()
{
	$new=new userM();
	$new->nom=Res::post('nom');
	$new->add();
	//
	echo "user added";
}));

Routes::get("/new",function()
{
	View::make('new');
});

Routes::get("/clients/logout",array("auth",function()
{
	Auth::logout();
	//
	Url::redirect("@".Config::get('auth.login'));
}));


Routes::resource("ysf","testCtrl");
Routes::resource("profil/usr","userC");
Routes::resource("client","clientC");


Routes::get("/t",function()
{
	// for ($i=0; $i < 20; $i++) 
	// 	echo Faker::ampm()."<br>";
	// $item=array();
	// //
	// foreach (range(1,30) as $value) {
	// 	$t=array();
	// 	Table::add($t,Faker::title(),"title");
	// 	Table::add($t,Faker::name(),"Nom");
	// 	Table::add($t,Faker::address(),"addresse");
	// 	Table::add($t,Faker::country(),"Pays");
	// 	//
	// 	Table::push($item,$t);
	// }
	// //
	// Table::show($item);
	echo "<img src='".Faker::image(100,100,"sea")."'/>";
	
	
});




