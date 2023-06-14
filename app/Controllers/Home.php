<?php

namespace App\Controllers;

class Home extends BaseController{
    
    public function index(){
    	//0/0;
    	echo 'hola mundo';
        return view('welcome_message');
    }


    // public function hola(){
    // 	//return view('welcome_message');
    // 	echo json_encode(array('key1' => 'value1','key2' => 'value2' ));
    // }

    public function update($id){

    	echo $id;

    }

}
