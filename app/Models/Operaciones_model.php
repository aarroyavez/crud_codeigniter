<?php
// Archivo: application/models/Operaciones_model.php

class Operaciones_model extends CI_Model {
    public function guardar_operacion($numero1, $numero2, $operacion, $resultado) {
        // Crear un arreglo con los datos a insertar
        $data = array(
            'numero1' => $numero1,
            'numero2' => $numero2,
            'operacion' => $operacion,
            'resultado' => $resultado
        );

        // Insertar los datos en la tabla 'operaciones'
        $this->db->insert('operaciones', $data);
    }

    public function get_operaciones() {
        // Obtener todos los registros de la tabla 'operaciones'
        $query = $this->db->get('operaciones');
        return $query->result();
    }
}
