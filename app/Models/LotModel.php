<?php

namespace App\Models;

use CodeIgniter\Model;

class LotModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_lot';
    protected $primaryKey       = 'id_lot';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_lot',
        'nama',
        'date',
        'shift',
        'group',
        'machine',
        'problem_left_off',
        'join_material',
        'trouble_cutting',
        'trouble_break',
        'melipat_proses_cutting',
        'nyangkut_pada_conveyor',
        'melipat_di_festoner',
        'ganti_sudut',
        'variasi_sudut',
        'variasi_width',
        'tersangkut_di_unfill',
        'tersangkut_di_cutter',
        'joint_material_calender',
        'sortir_coak',
        'botak',
        'open_cord',
        'side_gum',
        'ply_scorch',
        'melipat_akhir_calender',
        'chaffer',
        'plan_roll',
        'plan_metter',
        'actual_roll',
        'actual_metter',
        'is_valid',
        'ttd_foreman',
        'nama_foreman',
        'time_foreman',
        'cid',
        'uid',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

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
