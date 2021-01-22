<?php namespace App\Controllers;

use App\Models\Rko_Model;

class Signup extends BaseController
{
  
    public function __construct()
    {

        helper(['html','form']);

     }
   
	public function index()
	{ 


     if($this->request->getMethod()=="post")
     {
        
        $model=new Rko_Model();

    if($model->save($_POST)==False)
    {
        $s=session();

        $s->setFlashdata("error","This name already Used");
    }

       return redirect()->to(base_url("Signup"));

     }   
        
     echo view("Signup_view");

    }

}
