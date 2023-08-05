<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Operaciones_model;
class Operaciones extends Controller
{
    public function index()
    {
        $data = [];
        if ($this->request->getMethod() === 'post') {
            $numero1 = $this->request->getPost('numero1');
            $numero2 = $this->request->getPost('numero2');
            $operacion = $this->request->getPost('operacion');
            $resultado = $this->calcularResultado($numero1, $numero2, $operacion);

            $data['resultado'] = $resultado;
        }

        return view('formulario_operacion', $data);
    }

    private function calcularResultado($numero1, $numero2, $operacion)
    {
        switch ($operacion) {
            case 'suma':
                return $numero1 + $numero2;
            case 'resta':
                return $numero1 - $numero2;
            case 'multiplicacion':
                return $numero1 * $numero2;
            case 'division':
                return $numero1 / $numero2;
            default:
                return 0;
        }
    }

    public function ver_operaciones()
{
    $model = new Operaciones_model();
    $data['registros'] = $model->findAll();

    return view('ver_operaciones', $data);
}   
}
