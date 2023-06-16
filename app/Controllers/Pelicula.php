<?php

namespace App\Controllers;

use App\Models\Pelicula as ModelsPelicula;
use App\Models\PeliculaModel;

class Pelicula extends BaseController {
    
      
    public function new() {
        echo 'new';
        
    }

    public function show($id) {
        
        $peliculaModel = new PeliculaModel();

        //var_dump($peliculaModel->find($id)['titulo']);
        
        return view('pelicula/show',[
            'pelicula' => $peliculaModel->find($id)

        ]);        
    }
        
    
    function index(){

        $peliculaModel = new PeliculaModel();


        //$data = ['nombrevariablevista' => 'Contenido','variable2' => 'Contenido2'];
        return view('index',['data' => $peliculaModel->findAll(), ]);
    }
  

 
}













