<?php namespace App\Controllers;

use App\Models\Rko_Model;

class Number extends BaseController
{
  
    public function __construct()
    {

        helper('number');

     }
   
	public function index()
	{ 

     echo"<h1>" .number_to_size(10000). "</h1>"; 
     echo"<h1>" .number_to_amount(123456749,6). "</h1>"; 
     echo"<h1>" .number_to_currency(10000000000, 'Inr'). "</h1>"; 
     echo"<h1>" .number_to_roman(23). "</h1>"; 

    } 

}
