<?php namespace App\Controllers;

use App\Models\Smodel;

class Shadow extends BaseController
{

   
	public function index()
	{ 
        helper('html');
     
     
        $model = new Smodel();

        $data1=
        [
        	"email"=>"mani",
        	"id"=>"61"
        ];

        $data["g"]=$model->where($data1)->findAll();

        echo view('Htmlhelper', $data);


    }

}
