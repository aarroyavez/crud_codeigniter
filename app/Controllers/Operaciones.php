<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Operaciones_model;

class Operaciones extends Controller
{
    public function index()
    {
        return view('formulario_operacion');
    }

    public function guardar_operacion()
    {
        $numero1 = $this->request->getPost('numero1');
        $numero2 = $this->request->getPost('numero2');
        $operacion = $this->request->getPost('operacion');

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
                $resultado = 0;
        }

        $datos = [
            'numero1' => $numero1,
            'numero2' => $numero2,
            'operacion' => $operacion,
            'resultado' => $resultado
        ];

        $model = new Operaciones_model();
        $model->insert($datos);

        return redirect()->to(site_url('operaciones'));
    }
}
