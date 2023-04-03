<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbLot extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_lot' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'date' => [
                'type'       => 'DATE',
            ],
            'shift' => [
                'type'       => 'INT',
                'constraint'     => 1,
            ],
            'group' => [
                'type'       => 'VARCHAR',
                'constraint'     => 1,
            ],
            'machine' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
            ],

            // scrap proses cutting
            'problem_left_off' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'join_material' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'trouble_cutting' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'trouble_break' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'melipat_proses_cutting' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'nyangkut_pada_conveyor' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'melipat_di_festoner' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'ganti_sudut' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'variasi_sudut' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'variasi_width' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'tersangkut_di_unfill' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'tersangkut_di_cutter' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],

            // scrap proses calender
            'joint_material_calender' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'sortir_coak' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'botak' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'open_cord' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'side_gum' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'ply_scorch' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'melipat_akhir_calender' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],

            'chaffer' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],

            'plan_roll' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'plan_metter' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],

            'actual_roll' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],
            'actual_metter' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null' => true
            ],

            'is_valid' => [
                'type'       => 'INT',
                'constraint'     => 1,
            ],
            'ttd_foreman' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'nama_foreman' => [
                'type'       => 'VARCHAR',
                'constraint'     => 128,
                'null' => true,
            ],
            'time_foreman' => [
                'type'       => 'DATETIME',
                'null' => true,
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
        $this->forge->addKey('id_lot', true);
        $this->forge->createTable('tb_lot');
    }

    public function down()
    {
        $this->forge->dropTable('tb_lot');
    }
}
