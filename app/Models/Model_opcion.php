<?php 
namespace App\Models;
use CodeIgniter\Model;

class Model_opcion extends Model {

    // Función que agrega la opciones
    public function agregar($datos){
        $consulta = $this->db->table("option");
        return ($consulta->insert($datos)) ? $this->db->insertID() : 0;
    }

    // Función que consulta la opcion por medio de su ID
    public function consultarOpcion($datos){
        $consulta = $this->db->table("option");
        $consulta->where($datos);
        return $consulta->get()->getResultArray();
    }

     // Función que consulta la pregunta por medio de su ID
    public function consultarPregunta($datos){
        $pregunta = $this->db->table("question");
        $pregunta->where($datos);
        return $pregunta->get()->getResultArray();
    }

    //Función que conuslta las opciones teniendo en cuenta la condición
    public function consultarOpciones($condicion){
        $consulta = $this->db->table("option");
        $consulta->select("option.id as id_opcion, option.text");
        $consulta->where($condicion);
        return $consulta->get()->getResultArray();
    }

    // Funcion que una opción, con el ID que llega por parametro
    public function eliminar($condicion){
        $consulta = $this->db->table("option");
        $consulta->where($condicion);
        return ($consulta->delete()) ? 1 : 0;

    }

    // Funcion que edita la opción
    public function editar($datos, $condicion){
        $consulta = $this->db->table("option");
        $consulta->where($condicion);
        return ($consulta->update($datos)) ? 1 : 0;
    }

}
