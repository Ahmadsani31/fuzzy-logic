<?php

namespace App\Models;

use CodeIgniter\Model;

class MPerhitungan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'perhitungan';
    protected $primaryKey       = 'PerhitunganID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['VarA', 'VarB', 'VarC', 'VarD', 'VarE', 'VarF'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'CreatedAT';
    protected $updatedField  = 'UpdatedAT';
    protected $deletedField  = 'DeletedAT';

    // Validation
    protected $validationRules      = [
        'VarA'  => 'required',
        'VarB'  => 'required',
        'VarC'  => 'required',
        'VarD'  => 'required',
        'VarE'  => 'required',
        'VarF'  => 'required',
    ];
    protected $validationMessages   = [
        'VarA' => [
            'required'   => 'C- Organik is missing.',
        ],
        'VarB' => [
            'required'   => 'P2O5 HCL is missing.',
        ],
        'VarC' => [
            'required'   => 'K2O HCL is missing.',
        ],
        'VarD' => [
            'required'   => 'Kejenuhan Basa is missing.',
        ],
        'VarE' => [
            'required'   => 'KTK (me/100g) is missing.',
        ],
        'VarF' => [
            'required'   => 'pH H2O is missing.',
        ],
    ];
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
