<?php namespace App\Controllers;
use App\Models\Model_pregunta;

class Pregunta extends BaseController
{
	 function __construct(){
	
	 } 
	// Funcion que carga la vista general
	public function general()
	{
		$data = [];
		$modelo = new model_pregunta();
		$respuesta = $modelo->consultarPreguntas();
		$data["lista"] = $respuesta;

		echo view('header');
		echo view('preguntas/list', $data);
		echo view('footer');
	}

	//Funcion que permite la carga de la vista 
	public function registrar()
	{
		$modelo = new model_pregunta();
		$data = [];
		$data["titulo"]="Registrar";

		if ($this->request->getVar("idByUrl")) {
			$id = $this->request->getVar("idByUrl");
			$consulta = $modelo->consultarPregunta(["id" => $id]);

			$data["pregunta"]=$consulta;
			$data["titulo"]="Editar";
		}

		echo view('header');
		echo view('preguntas/register', $data);
		echo view('footer');
	}

	//Funcion que contiene la lógica para registrar preguntas
	public function agregar()
	{
		$modelo = new model_pregunta();
		$texto = $this->request->getVar("question");
		$data = [
			"text" => $texto
		];

		$res=$modelo->agregar($data);
	
		echo $res;
	}

	// Funcion que contiene la logica para editar las preguntas
	public function editar()
	{
		$modelo = new model_pregunta();
		$id = $this->request->getVar("id");
		$texto = $this->request->getVar("question");
		$data = [
			"text" => $texto,
		];
	
		$res=$modelo->editar($data, ["id" => $id]);
	
		echo $res;

	}

	//Función que contiene la logica para eliminar preguntas
	public function eliminar(){

		$modelo = new model_pregunta();
		$id = $this->request->getVar("id");
		$eliminado = $modelo->eliminar(["id" => $id]);

		if($eliminado==1){
			$retorno = [
				"estado" => "exito",
				"mensaje" => "Pregunta eliminada correctamente.",
				"redirect" => base_url("general")
			];
			echo json_encode($retorno);
		}else{
			$retorno = [
				"estado" => "error",
				"mensaje" => "Ocurrió un error al eliminar la pregunta.",
				"redirect" => base_url("general")
			];
			echo json_encode($retorno);
		}
	}

}
