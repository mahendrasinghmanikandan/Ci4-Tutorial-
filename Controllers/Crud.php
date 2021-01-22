<?php namespace App\Controllers;

use App\Models\Crud_model;

class Crud extends BaseController
{
    
                
     public function __construct(){

     	helper(['html','form']);

     }

	

  public function index()
  {

        $obj=new Crud_model();   

        $data=[];

        $data['values']=$obj->findAll();
      
      if($this->request->getMethod()=="post")
      {

          $obj->save($_POST);      
          
          return redirect()->to(base_url("Crud"));

          
      }

       echo view("Crud_view",$data);    
  	  
  }

 
   public function Delete($id)
   {
     
      $obj=new Crud_model(); 

      $obj->delete($id);

      return redirect()->to(base_url('Crud'));


   }

   public function Update($id)
   {
     
      $obj=new Crud_model(); 

      $post=$obj->find($id);

      $data=['post'=>$post];



      if($this->request->getMethod()=="post")
      {
           
      $data=
            [
              "id"=>$id,
              "name"=>$_POST['name']
            ];  

       $obj->save($data);

       return redirect()->to(base_url('Crud'));
  
      }  

      echo view("Update",$data);

      


   }
	
  	

}
