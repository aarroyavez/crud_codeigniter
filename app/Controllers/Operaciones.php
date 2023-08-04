<?php
// Archivo: application/controllers/Operaciones.php

class Operaciones extends CI_Controller {
    public function index() {
        // Cargar la vista 'operaciones_view'
        $this->load->view('operaciones_view');
    }

    public function guardar_operacion() {
        // Obtener los datos del formulario
        $numero1 = $this->input->post('numero1');
        $numero2 = $this->input->post('numero2');
        $operacion = $this->input->post('operacion');

        // Realizar la operación matemática
        switch ($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
            case 'division':
                $resultado = $numero1 / $numero2;
                break;
            default:
                $resultado = 'Operación no válida';
        }

        // Cargar el modelo 'Operaciones_model' y guardar los datos en la base de datos
        $this->load->model('Operaciones_model');
        $this->Operaciones_model->guardar_operacion($numero1, $numero2, $operacion, $resultado);

        // Redirigir al inicio
        redirect('Operaciones');
    }
}
