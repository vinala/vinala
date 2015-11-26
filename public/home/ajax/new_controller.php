<?php 

$Root="../../";

$class=$_POST['new_controller_class_name'];
$file=$_POST['new_controller_file_name'];

if(!file_exists($Root."../app/controllers/$file.php"))
	{
		$myfile = fopen($Root."../app/controllers/$file.php", "w");
		$txt = "<?php\n\nuse Fiesta\Core\MVC\Controller\Controller;\n\n";

		$txt.="/**\n* class de controller $class\n*/\n\nclass $class extends Controller\n{\n\t";

		//view
		$txt.="\n\t\n\tpublic static ".'$id = null'.";\n\tpublic static ".'$object = null'.";\n\n";

		//index
		$txt.="\n\t/**\n\t * Display a listing of the resource.\n\t *\n\t * \n\t * @return Response\n\t */";
		$txt.="\n\tpublic static function index()\n\t{\n\t\t//\n\t}";

		//show
		$txt.="\n\n\n\t/**\n\t * Get the resource by id\n\t *\n\t * @param id(mixed) id of the object \n\t * @return Response\n\t */";
		$txt.="\n\tpublic static function show(".'$id'.")\n\t{\n\t\t//\n\t}";

		//add
		$txt.="\n\n\n\t/**\n\t * Show the form for creating a new resource.\n\t *\n\t  * @return Response\n\t */";
		$txt.="\n\tpublic static function add()\n\t{\n\t\t//\n\t}";

		//insert
		$txt.="\n\n\n\t/**\n\t * Insert newly created resource in storage.\n\t *\n\t  * @return Response\n\t */";
		$txt.="\n\tpublic static function insert()\n\t{\n\t\t//\n\t}";

		//edit
		$txt.="\n\n\n\t/**\n\t * Show the form for editing the specified resource.\n\t *\n\t * @param id(mixed) id of the object \n\t * @return Response\n\t */";
		$txt.="\n\tpublic static function edit(".'$id'.")\n\t{\n\t\t//\n\t}";

		//update
		$txt.="\n\n\n\t/**\n\t * Update the specified resource in storage.\n\t *\n\t * @param id(mixed) id of the object \n\t * @return Response\n\t */";
		$txt.="\n\tpublic static function update(".'$id=null'.")\n\t{\n\t\t//\n\t}";

		//delete
		$txt.="\n\n\n\t/**\n\t * Delete the specified resource in storage.\n\t *\n\t * @param id(mixed) id of the object \n\t * @return Response\n\t */";
		$txt.="\n\tpublic static function delete(".'$id'.")\n\t{\n\t\t//\n\t}";


		$txt.="\n}";

		fwrite($myfile, $txt);
		fclose($myfile);
		//
		echo "le controller est créé";
	}
	else
	{
		echo "Le fichier deja existe";
	}

?>