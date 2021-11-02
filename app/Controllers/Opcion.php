<?php namespace App\Controllers;
use App\Models\Model_opcion;

class Opcion extends BaseController
{
	 function __construct(){
	
	 } 
	// Funcion que carga la vista general, ademas se consulta los datos que permiten la visualización de la tabla
	public function general()
	{
		$data = [];
		$modelo = new model_opcion();
		$id = $this->request->getVar("idByUrl");
		$pregunta = $modelo->consultarPregunta(["id" => $id]);
		$respuestas = $modelo->consultarOpciones(["id_question" => $id]);
		$data["pregunta"] = $pregunta;
		$data["lista"] = $respuestas;

		echo view('header');
		echo view('opciones/list', $data);
		echo view('footer');
	}

	//Funcion que carga la vista registrar, ademas se valida si viene dato por URL
	public function registrar()
	{
		$modelo = new model_opcion();
		$data = [];
		$data["titulo"]="Registrar";
		$data["idQ"] = $this->request->getVar("idByUrl");
		if ($this->request->getVar("idOpt")) {
			$id = $this->request->getVar("idOpt");
			$consulta = $modelo->consultarOpcion(["id" => $id]);

			$data["opcion"]=$consulta;
			$data["titulo"]="Editar";
		}
		echo view('header');
		echo view('opciones/option', $data);
		echo view('footer');
	}

	//Funcion que contiene la logica para agregar opciones, capturando todas las variables que se mandaron del JS
	public function agregar()
	{
		$modelo = new model_opcion();
		$texto = $this->request->getVar("option");
		$idQ = $this->request->getVar("idQ");
		$data = [
			"text" => $texto,
			"id_question" => $idQ,
		];

		$res=$modelo->agregar($data);
	
		echo $res;
	}

	//Función que contiene la logica para eliminar una opcion
	public function eliminar(){

		$modelo = new model_opcion();
		$id = $this->request->getVar("id");
		$eliminado = $modelo->eliminar(["id" => $id]);

		if($eliminado==1){
			$retorno = [
				"estado" => "exito",
				"mensaje" => "Opción eliminada correctamente.",
				"redirect" => base_url("general")
			];
			echo json_encode($retorno);
		}else{
			$retorno = [
				"estado" => "error",
				"mensaje" => "Ocurrió un error al eliminar la opción.",
				"redirect" => base_url("general")
			];
			echo json_encode($retorno);
		}
	}

}
