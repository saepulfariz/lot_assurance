<?php

namespace App\Controllers;

use App\Models\LotDetailModel;
use App\Models\LotModel;
use CodeIgniter\RESTful\ResourceController;

class LotAssuranceDetail extends BaseController
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
        //
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new($id)
    {

        $lot = $this->modellot->find($id);


        if (!$lot) {
            $this->alert->set('warning', 'Warning', 'Not Valid');
            return redirect()->to('lot');
        }

        $data = [
            'title' => 'data'
        ];

        return view('lot_list/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create($id)
    {

        $lot = $this->modellot->find($id);


        if (!$lot) {
            $this->alert->set('warning', 'Warning', 'Not Valid');
            return redirect()->to('lot');
        }

        $data = [
            'id_lot' => $id,
            'ply_code' => $this->request->getVar('ply_code'),
            'print_tag_code' => $this->request->getVar('print_tag_code'),
            'no_recipe_size_spec' => $this->request->getVar('no_recipe_size_spec'),
            'no_recipe_size_act' => $this->request->getVar('no_recipe_size_act'),
            'no_recipe_size_judg' => $this->request->getVar('no_recipe_size_judg'),
            'ply_type' => $this->request->getVar('ply_type'),
            'time_start' => $this->request->getVar('time_start'),
            'material_code_spec' => $this->request->getVar('material_code_spec'),
            'material_code_act' => $this->request->getVar('material_code_act'),
            'material_code_judg' => $this->request->getVar('material_code_judg'),
            'marking_colour_spec' => $this->request->getVar('marking_colour_spec'),
            'marking_colour_act' => $this->request->getVar('marking_colour_act'),
            'marking_colour_judg' => $this->request->getVar('marking_colour_judg'),
            'expired_date' => $this->request->getVar('expired_date'),
            'approval_lab' => $this->request->getVar('approval_lab'),
            'lot_number' => $this->request->getVar('lot_number'),
            'width_5_spec' => $this->request->getVar('width_5_spec'),
            'width_5_act1' => $this->request->getVar('width_5_act1'),
            'width_5_judg1' => $this->request->getVar('width_5_judg1'),
            'width_5_act2' => $this->request->getVar('width_5_act2'),
            'width_5_judg2' => $this->request->getVar('width_5_judg2'),
            'width_5_act3' => $this->request->getVar('width_5_act3'),
            'width_5_judg3' => $this->request->getVar('width_5_judg3'),
            'angle_1_spec' => $this->request->getVar('angle_1_spec'),
            'angle_1_act' => $this->request->getVar('angle_1_act'),
            'angle_1_judg' => $this->request->getVar('angle_1_judg'),
            'stager_02_act' => $this->request->getVar('stager_02_act'),
            'stager_02_judg' => $this->request->getVar('stager_02_judg'),
            'overlap_joint_41_act' => $this->request->getVar('overlap_joint_41_act'),
            'overlap_joint_41_judg' => $this->request->getVar('overlap_joint_41_judg'),
            'pricking_condition_judg' => $this->request->getVar('pricking_condition_judg'),
            'qty_roll' => $this->request->getVar('qty_roll'),
            'qty_metter' => $this->request->getVar('qty_metter'),
            'qty_lot_sc' => $this->request->getVar('qty_lot_sc'),
            'qty_lot_f' => $this->request->getVar('qty_lot_f'),
            'problem_loss_time' => $this->request->getVar('problem_loss_time'),
        ];


        $this->modellotdetail->save($data);
        $this->alert->set('success', 'Success', 'Success Add');
        return redirect()->to('lot/' . $id);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $lot = $this->modellotdetail->find($id);


        // dd($lot);

        if (!$lot) {
            $this->alert->set('warning', 'Warning', 'Not Valid');
            return redirect()->to('lot');
        }

        $this->modellotdetail->delete($id);
        $this->alert->set('success', 'Success', 'Success Delete');
        return redirect()->to('lot');
    }
}
