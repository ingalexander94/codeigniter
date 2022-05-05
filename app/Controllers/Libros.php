<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{

    public function index() {
        $libro = new Libro();
        $datos['libros'] = $libro->orderBy('id', 'ASC')->findAll();
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/pie');
        return view("libros/listar", $datos);
    }

    public function crear() {
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/pie');
        return view("libros/crear", $datos);
    }

    public function guardar() {
        $libro = new Libro();
        if($imagen = $this->request->getFile('imagen')) {
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/uploads/', $nuevoNombre);
            $nombre = $this->request->getVar('nombre');
            $nuevoLibro = ['nombre'=> $nombre, "imagen" => $nuevoNombre];
            $libro->insert($nuevoLibro);
        }
        return $this->response->redirect(base_url('libros/listar'));
    }

    public function eliminar($id) {
        $libro = new Libro();
        $datosLibro = $libro->where("id", $id)->first();
        $ruta = '../public/uploads/'.$datosLibro['imagen'];
        unlink($ruta);
        $libro->where("id", $id)->delete($id);
        return $this->response->redirect(base_url('libros/listar'));
    }

    public function editar() {

    }

}