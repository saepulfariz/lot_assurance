<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbLotDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_lot' => [
                'type'       => 'INT',
                'constraint'     => 11,
            ],


            'ply_code' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'print_tag_code' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],
            'no_recipe_size_spec' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'no_recipe_size_act' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'no_recipe_size_judg' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],


            'ply_type' => [
                'type'       => 'VARCHAR',
                'constraint'     => 1,
                'null' => true
            ],
            'time_start' => [
                'type'       => 'TIME',
                'null' => true
            ],


            'material_code_spec' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'material_code_act' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'material_code_judg' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],

            'marking_colour_spec' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'marking_colour_act' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'marking_colour_judg' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],

            'expired_date' => [
                'type'       => 'DATE',
                'null' => true
            ],
            'approval_lab' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],

            'lot_number' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],


            'width_5_spec' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'width_5_act1' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'width_5_judg1' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],
            'width_5_act2' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'width_5_judg2' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],
            'width_5_act3' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'width_5_judg3' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],

            'angle_1_spec' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'angle_1_act' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'angle_1_judg' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],


            'stager_02_act' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'stager_02_judg' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],

            'overlap_joint_41_act' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],

            'overlap_joint_41_judg' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],


            'pricking_condition_judg' => [
                'type'       => 'INT',
                'constraint'     => 1,
                'null' => true
            ],


            'qty_roll' => [
                'type'       => 'INT',
                'constraint'     => 11,
            ],

            'qty_metter' => [
                'type'       => 'INT',
                'constraint'     => 11,
            ],
            'qty_lot_sc' => [
                'type'       => 'INT',
                'constraint'     => 11,
            ],
            'qty_lot_f' => [
                'type'       => 'INT',
                'constraint'     => 11,
            ],
            'problem_loss_time' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],



            'cid' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'uid' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
            ],

        ]);
        $this->forge->addKey('id_detail', true);
        $this->forge->createTable('tb_lot_detail');
    }

    public function down()
    {
        $this->forge->dropTable('tb_lot_detail');
    }
}
