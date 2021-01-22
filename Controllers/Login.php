<?php namespace App\Controllers;

use App\Models\Rko_Model;

class Login extends BaseController
{
  
    public function __construct()
    {

        helper(['html','form']);

     }
   
	public function index()
	{ 

     $data=[];   

     $model=new Rko_Model();

     if($this->request->getMethod()=="post")
     {
       
       $name=$_POST['name']; 

       $pass=$_POST['pass']; 
        
       $res=$model->where("name",$name)->first();

           if($res=="")
           {
            $session=session();

            $session->setFlashdata("name","In-Valid Name");
            
            $data['name']=[];

           }else{
         
             if(password_verify($pass,$res['pass']))
              {

                
                if($res['name']=="user")
                {
                   
                  $data=[
                        "id"=>$res['id'], 
                        "name"=>$res['name']
                      ];
                 $s=session();                      
                 $s->set($data);
              return redirect()->to(base_url('Uprofile'));

                }else{
                   
                      $data=[
                        "id"=>$res['id'], 
                        "name"=>$res['name']
                      ];
                 $s=session();                      
                 $s->set($data);
              return redirect()->to(base_url('Aprofile'));

                }

             
               }else{

                $session=session();

                $session->setFlashdata("pass","In-Valid Password");

                $data['pass']=[];

               }

           }

     }   
        
     echo view("Login",$data);

    }

}
