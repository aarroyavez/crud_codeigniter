<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Operaciones_model;

class Operaciones extends Controller
{
    public function index()
    {
        if ($this->request->getMethod() === 'post') {
            $numero1 = $this->request->getPost('numero1');
            $numero2 = $this->request->getPost('numero2');
            $operacion = $this->request->getPost('operacion');
            $resultado = $this->calcularResultado($numero1, $numero2, $operacion);
        } else {
            $resultado = null;
        }

        $data = [
            'resultado' => $resultado
        ];

        return view('formulario_operacion', $data);
    }

    public function ver_operaciones()
    {
        $operacionesModel = new Operaciones_model();
        $data['operaciones'] = $operacionesModel->findAll();

        return view('ver_operaciones', $data); // Cargamos la vista ver_operaciones.php
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

    public function guardar_operacion()
    {
        $numero1 = $this->request->getPost('numero1');
        $numero2 = $this->request->getPost('numero2');
        $operacion = $this->request->getPost('operacion');
        $resultado = $this->calcularResultado($numero1, $numero2, $operacion);

        $datos = [
            'numero1' => $numero1,
            'numero2' => $numero2,
            'operacion' => $operacion,
            'resultado' => $resultado
        ];

        $operacionesModel = new Operaciones_model();
        $operacionesModel->insert($datos);

        return redirect()->to(site_url('operaciones'))->with('success', 'Operación guardada exitosamente.');
    }

    
}
