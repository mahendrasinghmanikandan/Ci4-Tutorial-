<?php namespace App\Models;

use CodeIgniter\Model;

class Smodel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['pass', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = ["email"=>"is_unique[user.email]"];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}