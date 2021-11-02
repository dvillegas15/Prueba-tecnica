<?php 
namespace App\Models;
use CodeIgniter\Model;

class Model_votacion extends Model {

    // Funcion que agrega las preguntas
    public function agregar($datos){
        $seleccion = $this->db->table("vote");
        return ($seleccion->insert($datos)) ? $this->db->insertID() : 0;
    }

    // Funcion que consulta la pregunta teniendo en cuenta una condicion
    public function consultarPregunta($datos){
        $pregunta = $this->db->table("question");
        $pregunta->where($datos);
        return $pregunta->get()->getResultArray();
    }

    //Función que conuslta las opciones teniendo en cuenta la condición
    public function consultarOpciones($condicion){
        $consulta = $this->db->table("option");
        $consulta->select("*");
        $consulta->where($condicion);
        return $consulta->get()->getResultArray();
    }

    // Funcion que consulta las preguntas
    public function consultarPreguntas(){
        $consulta = $this->db->table("question");
        $consulta->select("*");
        return $consulta->get()->getResultArray();
    }
}
