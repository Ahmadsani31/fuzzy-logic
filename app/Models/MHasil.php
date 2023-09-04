<?php

namespace App\Models;

use CodeIgniter\Model;

class MHasil extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'hasil';
    protected $primaryKey       = 'HasilID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['PerhitunganID', 'Hitung1', 'Hitung2', 'Hitung3'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'CreatedAT';
    protected $updatedField  = 'UpdatedAT';
    protected $deletedField  = 'DeletedAT';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
