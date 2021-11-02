<?php 

namespace App\Models;
use CodeIgniter\Model;

class Model_pregunta extends Model {

    // Funcion que agrega las preguntas
    public function agregar($datos){
        $preguntas = $this->db->table("question");
        return ($preguntas->insert($datos)) ? $this->db->insertID() : 0;
    }

    // Funcion que consulta la pregunta teniendo en cuenta una condicion
    public function consultarPregunta($datos){
        $pregunta = $this->db->table("question");
        $pregunta->where($datos);
        return $pregunta->get()->getResultArray();
    }

    // Funcion que consulta las preguntas
    public function consultarPreguntas(){
        $consulta = $this->db->table("question");
        $consulta->select("*");
        return $consulta->get()->getResultArray();
    }

    // Funcion que elimina una pregunta
    public function eliminar($condicion){
        $consulta = $this->db->table("question");
        $consulta->where($condicion);
        return ($consulta->delete()) ? 1 : 0;

    }
    // Funcion que edita una pregunta
    public function editar($datos, $condicion){
        $consulta = $this->db->table("question");
        $consulta->where($condicion);
        return ($consulta->update($datos)) ? 1 : 0;
    }

}
