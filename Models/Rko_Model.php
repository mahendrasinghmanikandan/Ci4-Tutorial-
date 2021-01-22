<?php namespace App\Models;

use CodeIgniter\Model;

class Rko_Model extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    

    protected $allowedFields = ['name','pass'];
  
    // protected $validationRules    = ["name"=>"is_unique[user.name]"];
    protected $validationMessages = [];
    // protected $skipValidation     = false;
    protected $beforeInsert = ['hashPassword'];

protected function hashPassword(array $data)
{
	//print_r($data);
	//Array ( [data] => Array ( [name] => mani [pass] => mani ) )

    if(isset($data['data']['pass'])){
    
     
    $data['data']['pass'] = password_hash($data['data']['pass'], PASSWORD_DEFAULT);
    
    return $data;
}
}
}