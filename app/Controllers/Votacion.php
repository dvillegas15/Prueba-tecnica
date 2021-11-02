<?php namespace App\Controllers;
use App\Models\Model_votacion;

class Votacion extends BaseController
{
	 function __construct(){
	
	 } 
	// Funcion que carga la vista general, ademas se consulta los datos que permiten la visualización de la tabla
	public function general()
	{
		$data = [];
		$modelo = new model_votacion();
		$respuesta = $modelo->consultarPreguntas();
		$data["lista"] = $respuesta;

		echo view('header');
		echo view('votacion/list', $data);
		echo view('footer');
	}

	public function generalOpciones()
	{
		$data = [];
		$modelo = new model_votacion();
		$id = $this->request->getVar("idByUrl");
		$pregunta = $modelo->consultarPregunta(["id" => $id]);
		$respuestas = $modelo->consultarOpciones(["id_question" => $id]);
		$data["pregunta"] = $pregunta;
		$data["lista"] = $respuestas;

		echo view('header');
		echo view('votacion/listOption', $data);
		echo view('footer');
	}

	//Funcion que contiene la logica para agregar una votacion, capturando todas las variables que se mandaron del JS
	public function agregar()
	{
		$data=[];
		$modelo = new model_votacion();
		$idPregunta = $this->request->getVar("pregunta");
		$idOpcion = $this->request->getVar("opcion");
		$data = [
			"id_pregunta" => $idPregunta,
			"id_opcion" => $idOpcion,
		];
		$res=$modelo->agregar($data);
	
		echo $res;
	}

	
}


