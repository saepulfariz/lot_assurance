<?php

namespace App\Models;

use CodeIgniter\Model;

class LotDetailModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_lot_detail';
    protected $primaryKey       = 'id_detail';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_lot',
        'ply_code',
        'print_tag_code',
        'no_recipe_size_spec',
        'no_recipe_size_act',
        'no_recipe_size_judg',
        'ply_type',
        'time_start',
        'material_code_spec',
        'material_code_act',
        'material_code_judg',
        'marking_colour_spec',
        'marking_colour_act',
        'marking_colour_judg',
        'expired_date',
        'approval_lab',
        'lot_number',
        'width_5_spec',
        'width_5_act1',
        'width_5_judg1',
        'width_5_act2',
        'width_5_judg2',
        'width_5_act3',
        'width_5_judg3',
        'angle_1_spec',
        'angle_1_act',
        'angle_1_judg',
        'stager_02_act',
        'stager_02_judg',
        'overlap_joint_41_act',
        'overlap_joint_41_judg',
        'pricking_condition_judg',
        'qty_roll',
        'qty_metter',
        'qty_lot_sc',
        'qty_lot_f',
        'problem_loss_time',
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
