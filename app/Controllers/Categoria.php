<?php

namespace App\Controllers;

use App\Models\CategoriaModel;


class Categoria extends BaseController{


    public function index(){
        $categoriaModel = new CategoriaModel();
        return view('categoria/index',['data' => $categoriaModel->findAll(), ]);
    }
    
    public function new() {
        echo view('categoria/new',[
            'categoria' => [
                'titulo' => ''
            ]
        ]);        
    }

    public function create(){

        $categoriaModel = new CategoriaModel();

        $categoriaModel->insert([
             'titulo' => $this->request->getPost('titulo'),            
        ]);

        echo 'creado';

        //var_dump($this->request->getPost('titulo'));
    }

    public function show($id) {
        
        $categoriaModel = new CategoriaModel();

        //var_dump($peliculaModel->find($id)['titulo']);
        
        return view('categoria/show',[
            'categoria' => $categoriaModel->find($id)

        ]);        
    }

    public function edit($id){

        $categoriaModel = new CategoriaModel();        
            
        echo view('categoria/edit',[
            'categoria' => $categoriaModel->find($id)
        ]);

    }

    public function update($id){

        $categoriaModel = new CategoriaModel();
        $categoriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo')            
        ]);

        echo 'update';

    }

    public function delete($id){

        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        echo 'delete';
    }


}
