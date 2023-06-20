<?php

namespace App\Controllers;

//use App\Models\Pelicula as ModelsPelicula;
use App\Models\PeliculaModel;

class Pelicula extends BaseController {
    
      
    public function new() {
        //echo 'new';
        echo view('pelicula/new',[
            'pelicula' => [
                'titulo' =>'',
                'descripcion' => ''

            ]
        ]);        
    }

    public function show($id) {
        
        $peliculaModel = new PeliculaModel();

        //var_dump($peliculaModel->find($id)['titulo']);
        
        return view('pelicula/show',[
            'pelicula' => $peliculaModel->find($id)

        ]);        
    }

    public function create(){

        $peliculaModel = new PeliculaModel();

        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);

        echo 'creado';

        //var_dump($this->request->getPost('titulo'));
    }

    public function edit($id){

        $peliculaModel = new PeliculaModel();        
            
        echo view('pelicula/edit',[
            'pelicula' => $peliculaModel->find($id)
        ]);

    }

    public function update($id){

        $peliculaModel = new PeliculaModel();
        $peliculaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        echo 'update';

    }

    public function delete($id){

        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);
        echo 'delete';
    }
        
    
    function index(){

        $peliculaModel = new PeliculaModel();
        //$data = ['nombrevariablevista' => 'Contenido','variable2' => 'Contenido2'];
        return view('pelicula/index',['data' => $peliculaModel->findAll(), ]);
    }
  

 
}













