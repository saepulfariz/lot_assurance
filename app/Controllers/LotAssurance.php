<?php

namespace App\Controllers;

use App\Models\LotDetailModel;
use App\Models\LotModel;
use CodeIgniter\RESTful\ResourceController;

class LotAssurance extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    private $modellot;
    private $modellotdetail;
    public function __construct()
    {
        $this->modellot = new LotModel();
        $this->modellotdetail = new LotDetailModel();
    }
    public function index()
    {
        $data = [
            'title' => 'data',
            'lot' => $this->modellot->findAll()
        ];

        return view('lot_assurance/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $lot = $this->modellot->find($id);


        if (!$lot) {
            $this->alert->set('warning', 'Warning', 'Not Valid');
            return redirect()->to('lot');
        }

        $data = [
            'title' => 'Data',
            'lot' => $lot,
            'detail' => $this->modellotdetail->where('id_lot', $id)->findAll()
        ];

        return view('lot_assurance/show', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {

        $field = [
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

        ];

        // foreach ($field as $key => $value) {
        //     echo "'$key',<br>";
        // }

        // dd('k');
        $data = [
            'title' => 'data',
        ];

        return view('lot_assurance/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'date' => $this->request->getVar('date'),
            'shift' => $this->request->getVar('shift'),
            'group' => $this->request->getVar('group'),
            'machine' => $this->request->getVar('machine'),
            'problem_left_off' => $this->request->getVar('problem_left_off'),
            'join_material' => $this->request->getVar('join_material'),
            'trouble_cutting' => $this->request->getVar('trouble_cutting'),
            'trouble_break' => $this->request->getVar('trouble_break'),
            'melipat_proses_cutting' => $this->request->getVar('melipat_proses_cutting'),
            'nyangkut_pada_conveyor' => $this->request->getVar('nyangkut_pada_conveyor'),
            'melipat_di_festoner' => $this->request->getVar('melipat_di_festoner'),
            'variasi_sudut' => $this->request->getVar('variasi_sudut'),
            'variasi_width' => $this->request->getVar('variasi_width'),
            'tersangkut_di_unfill' => $this->request->getVar('tersangkut_di_unfill'),
            'tersangkut_di_cutter' => $this->request->getVar('tersangkut_di_cutter'),
            'joint_material_calender' => $this->request->getVar('joint_material_calender'),
            'sortir_coak' => $this->request->getVar('sortir_coak'),
            'botak' => $this->request->getVar('botak'),
            'open_cord' => $this->request->getVar('open_cord'),
            'side_gum' => $this->request->getVar('side_gum'),
            'ply_scorch' => $this->request->getVar('ply_scorch'),
            'melipat_akhir_calender' => $this->request->getVar('melipat_akhir_calender'),
            'chaffer' => $this->request->getVar('chaffer'),
            'plan_roll' => $this->request->getVar('plan_roll'),
            'plan_metter' => $this->request->getVar('plan_metter'),
            'actual_roll' => $this->request->getVar('actual_roll'),
            'actual_metter' => $this->request->getVar('actual_metter'),
            'is_valid' => 0,
            // 'ttd_foreman' => $this->request->getVar('ttd_foreman'),
            // 'nama_foreman' => $this->request->getVar('nama_foreman'),
            // 'time_foreman' => $this->request->getVar('time_foreman'),
        ];


        // $data  = createLog($data, 1);
        $this->modellot->save($data);
        $this->alert->set('success', 'Success', 'Success Add');
        return redirect()->to('lot');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {

        $lot = $this->modellot->find($id);


        if (!$lot) {
            $this->alert->set('warning', 'Warning', 'Not Valid');
            return redirect()->to('lot');
        }

        $data = [
            'title' => 'Data',
            'lot' => $lot
        ];

        return view('lot_assurance/edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'date' => $this->request->getVar('date'),
            'shift' => $this->request->getVar('shift'),
            'group' => $this->request->getVar('group'),
            'machine' => $this->request->getVar('machine'),
            'problem_left_off' => $this->request->getVar('problem_left_off'),
            'join_material' => $this->request->getVar('join_material'),
            'trouble_cutting' => $this->request->getVar('trouble_cutting'),
            'trouble_break' => $this->request->getVar('trouble_break'),
            'melipat_proses_cutting' => $this->request->getVar('melipat_proses_cutting'),
            'nyangkut_pada_conveyor' => $this->request->getVar('nyangkut_pada_conveyor'),
            'melipat_di_festoner' => $this->request->getVar('melipat_di_festoner'),
            'variasi_sudut' => $this->request->getVar('variasi_sudut'),
            'variasi_width' => $this->request->getVar('variasi_width'),
            'tersangkut_di_unfill' => $this->request->getVar('tersangkut_di_unfill'),
            'tersangkut_di_cutter' => $this->request->getVar('tersangkut_di_cutter'),
            'joint_material_calender' => $this->request->getVar('joint_material_calender'),
            'sortir_coak' => $this->request->getVar('sortir_coak'),
            'botak' => $this->request->getVar('botak'),
            'open_cord' => $this->request->getVar('open_cord'),
            'side_gum' => $this->request->getVar('side_gum'),
            'ply_scorch' => $this->request->getVar('ply_scorch'),
            'melipat_akhir_calender' => $this->request->getVar('melipat_akhir_calender'),
            'chaffer' => $this->request->getVar('chaffer'),
            'plan_roll' => $this->request->getVar('plan_roll'),
            'plan_metter' => $this->request->getVar('plan_metter'),
            'actual_roll' => $this->request->getVar('actual_roll'),
            'actual_metter' => $this->request->getVar('actual_metter'),
            'is_valid' => 0,
            // 'ttd_foreman' => $this->request->getVar('ttd_foreman'),
            // 'nama_foreman' => $this->request->getVar('nama_foreman'),
            // 'time_foreman' => $this->request->getVar('time_foreman'),
        ];


        // $data  = createLog($data, 1);
        $this->modellot->update($id, $data);
        $this->alert->set('success', 'Success', 'Success Edit');
        return redirect()->to('lot');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $lot = $this->modellot->find($id);

        if (!$lot) {
            $this->alert->set('warning', 'Warning', 'Not Valid');
            return redirect()->to('lot');
        }

        $this->modellot->delete($id);
        $this->alert->set('success', 'Success', 'Success Delete');
        return redirect()->to('lot');
    }
}
