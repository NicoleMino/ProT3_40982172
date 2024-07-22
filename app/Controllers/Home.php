<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'pagina';
        echo view('Front/head_view', $data);
        echo view('Front/navbar_view');
        echo view('Front/principal');
        echo view('Front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo'] = 'quienes_somos';
        echo view('Front/head_view', $data);
        echo view('Front/navbar_view');
        echo view('Front/quienes_somos');
        echo view('Front/footer_view');
    }
    public function registro()
    {
        $data['titulo'] = 'registro';
        echo view('Front/head_view', $data);
        echo view('Front/navbar_view');
        echo view('Front/registro');
        echo view('Front/footer_view');
    }
    public function login()
    {
        $data['titulo'] = 'login';
        echo view('Front/head_view', $data);
        echo view('Front/navbar_view');
        echo view('Front/login');
        echo view('Front/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo'] = 'acerca_de';
        echo view('Front/head_view', $data);
        echo view('Front/navbar_view');
        echo view('Front/acerca_de');
        echo view('Front/footer_view');
    }
    public function Cuentos()
    {
        $data['titulo'] = 'Cuentos';
        echo view('Front/head_view', $data);
        echo view('Front/navbar_view');
        echo view('Front/Cuentos');
        echo view('Front/footer_view');
    }
    public function Juego()
    {
        $data['titulo'] = 'Juego';
        echo view('Front/head_view', $data);
        echo view('Front/navbar_view');
        echo view('Front/Juego');
        echo view('Front/footer_view');
    }
}
