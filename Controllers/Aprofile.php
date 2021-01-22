<?php namespace App\Controllers;

use App\Models\Rko_Model;

class Aprofile extends BaseController
{
  
    public function __construct()
    {

        helper(['html','form']);

     }
   
	public function index()
	{ 

     $data=[];   

     $model=new Rko_Model();

     if(session()->has("id"))
     {
       
       echo session()->get("id");

       echo session()->get("name");
      

     }   
        
     echo view("Aprofile",$data);

    }

}
