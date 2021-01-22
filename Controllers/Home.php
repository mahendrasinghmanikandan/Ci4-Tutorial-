<?php namespace App\Controllers;

class Home extends BaseController
{
    
                
     public function __construct(){

     	helper(['html','form']);

     }

	public function index()
	{
                 
        

        // multi-dimentional array

        //$data['names']=["Randy","Rock","cena"];


        //associative array 

           $data=["name1"=>"Randy","name2"=>"Rock","name3"=>"cena"];

         echo view("array",$data);
		
	}
    


  public function htmlhelper()
  {
    //how to run   
    //http://127.0.0.1/ci4topics/Home/htmlhelper

  	echo view("Htmlhelper");

  } 


  public function form()
  {

  	  $data=[];
       
      if($this->request->getMethod()=="post")
      {
       
       $rules=[
                
                "name"=>"required",
                "email"=>"required|valid_email",
                "pass1"=>"required",
                "pass2"=>"required|matches[pass1]"               
              
              ];

       $errors=[
       
               "email"=>[

                  "required"=>"plz type your email",

                  "valid_email"=>"plz type your valid email"

               ]


               ];       


           if(!$this->validate($rules,$errors))
           {
             
             $data['vresult']=$this->validator;

             

           }else{
             
             return redirect()->to(base_url("Home/form"));

           }   

      }
      
      echo view("form",$data);
 

  }

	
  	

}
