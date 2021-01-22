<?php namespace App\Models;

use CodeIgniter\Model;

class Crud_model extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    

    protected $allowedFields = ['name'];
  
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}