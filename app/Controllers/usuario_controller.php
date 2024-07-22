<?php

namespace App\Controllers;

use App\Models\usuario_Model;;

use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $dato['titulo'] = 'Registro';
        echo view('Front/head_view', $dato);
        echo view('Front/navbar_view');
        echo view('Back/usuario/registro');
        echo view('Front/footer_view');
    }

    public function formValidation() // 
    {
        $input = $this->validate(
            [
                'nombre' => 'required|min_length[3]',
                'apellido' => 'required|min_length[3]|max_length[25]',
                'usuario' => 'required|min_length[3]',
                'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
                'pass' => 'required|min_length[3]|max_length[10]',
            ],
        );
        $fromModel = new usuario_Model();

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('Front/head_view', $data);
            echo view('Front/navbar_view');
            echo view('Back/usuario/registro', ['validation' => $this->validator]);
            echo view('Front/footer_view');
        } else {
            $fromModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'usuario' => $this->request->getVar('usuario'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return $this->response->redirect('login'); // Redirección 
        }
    }
}
