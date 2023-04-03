<?= $this->extend('template/index') ?>


<?php


$request = \Config\Services::request();
$segment = $request->uri->getSegment(3);


?>

<?= $this->section('content') ?>
<div class="container mt-2 mb-2">
    <div class="row">
        <div class="col text-center">
            <h3>LOT ASSURANCE CUTTING TTO MC</h3>
        </div>
    </div>
    <form action="<?= base_url('lot/list/' . $lot['id_detail']); ?>" method="post">
        <?= csrf_field(); ?>
        <input type='hidden' name='_method' value='PUT' />
        <!-- GET, POST, PUT, PATCH, DELETE-->

        <div class="row">
            <div class="col">

                <div class="card mb-2">
                    <div class="card-header">
                        LIST
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">

                            <div class="col-md-2">
                                <label for="ply_code">ply_code</label>
                                <input type="text" required name="ply_code" id="ply_code" disabled class="form-control" value="<?= $lot['ply_code']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="print_tag_code">print_tag_code</label>
                                <select type="text" name="print_tag_code" id="print_tag_code" disabled class="form-control">
                                    <option <?= ($lot['print_tag_code'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                    <option <?= ($lot['print_tag_code'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                </select>
                            </div>



                            <div class="col-md-2">
                                <label for="ply_type">ply_type</label>
                                <select type="text" name="ply_type" id="ply_type" disabled class="form-control">
                                    <option <?= ($lot['ply_type'] == 1) ? 'selected' : ''; ?> value="1">1</option>
                                    <option <?= ($lot['ply_type'] == 2) ? 'selected' : ''; ?> value="2">2</option>
                                    <option <?= ($lot['ply_type'] == 3) ? 'selected' : ''; ?> value="3">3</option>
                                    <option <?= ($lot['ply_type'] == 4) ? 'selected' : ''; ?> value="4">4</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="time_start">time_start</label>
                                <input type="time" required name="time_start" id="time_start" disabled class="form-control" value="<?= date('H:i:s', strtotime($lot['time_start'])); ?>">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="fw-bold" for="">No Recipe Size</label>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="no_recipe_size_spec">no_recipe_size_spec</label>
                                        <input type="text" name="no_recipe_size_spec" id="no_recipe_size_spec" disabled class="form-control" value="<?= $lot['no_recipe_size_spec']; ?>">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="no_recipe_size_act">no_recipe_size_act</label>
                                        <input type="text" name="no_recipe_size_act" id="no_recipe_size_act" disabled class="form-control" value="<?= $lot['no_recipe_size_act']; ?>">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="no_recipe_size_judg">no_recipe_size_judg</label>
                                        <select type="text" name="no_recipe_size_judg" id="no_recipe_size_judg" disabled class="form-control">
                                            <option <?= ($lot['no_recipe_size_judg'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                            <option <?= ($lot['no_recipe_size_judg'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-2">
                    <div class="card">
                        <div class="card-header">
                            Material Texttile Rubberized Used
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6 mb-2">
                                    <label class="fw-bold" for="">Matrial Code (CC/s)</label>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="material_code_spec">material_code_spec</label>
                                            <input type="text" name="material_code_spec" id="material_code_spec" disabled class="form-control" value="<?= $lot['material_code_spec']; ?>">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="material_code_act">material_code_act</label>
                                            <input type="text" name="material_code_act" id="material_code_act" disabled class="form-control" value="<?= $lot['material_code_act']; ?>">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="material_code_judg">material_code_judg</label>
                                            <select type="text" name="material_code_judg" id="material_code_judg" disabled class="form-control">
                                                <option <?= ($lot['material_code_judg'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                                <option <?= ($lot['material_code_judg'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="fw-bold" for="">Marking Colour (CC/s)</label>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="marking_colour_spec">marking_colour_spec</label>
                                            <input type="text" name="marking_colour_spec" id="marking_colour_spec" disabled class="form-control" value="<?= $lot['marking_colour_spec']; ?>">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="marking_colour_act">marking_colour_act</label>
                                            <input type="text" name="marking_colour_act" id="marking_colour_act" disabled class="form-control" value="<?= $lot['marking_colour_act']; ?>">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="marking_colour_judg">marking_colour_judg</label>
                                            <select type="text" name="marking_colour_judg" id="marking_colour_judg" disabled class="form-control">
                                                <option <?= ($lot['marking_colour_judg'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                                <option <?= ($lot['marking_colour_judg'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-2 mb-2">
                                    <label for="expired_date">expired_date</label>
                                    <input type="date" required name="expired_date" id="expired_date" disabled class="form-control" value="<?= $lot['expired_date']; ?>">
                                </div>

                                <div class="col-md-2 mb-2">
                                    <label for="approval_lab">approval_lab</label>
                                    <input type="text" required name="approval_lab" id="approval_lab" disabled class="form-control" value="<?= $lot['approval_lab']; ?>">
                                </div>

                                <div class="col-md-2 mb-2">
                                    <label for="lot_number">lot_number</label>
                                    <input type="text" required name="lot_number" id="lot_number" disabled class="form-control" value="<?= $lot['lot_number']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-2">
                    <div class="card">
                        <div class="card-header">
                            Body Ply Dimention (CC/h)
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12 mb-2">
                                    <label class="fw-bold" for="">Width ±5 mm</label>

                                    <div class="row mb-2">
                                        <div class="col-md-2">
                                            <label for="width_5_spec">width_5_spec</label>
                                            <input type="text" name="width_5_spec" id="width_5_spec" disabled class="form-control" value="<?= $lot['width_5_spec']; ?>">
                                        </div>

                                        <div class="col-md-2">
                                            <label for="width_5_act1">width_5_act1</label>
                                            <input type="text" name="width_5_act1" id="width_5_act1" disabled class="form-control" value="<?= $lot['width_5_act1']; ?>">
                                        </div>

                                        <div class="col-md-2">
                                            <label for="width_5_judg1">width_5_judg1</label>
                                            <select type="text" name="width_5_judg1" id="width_5_judg1" disabled class="form-control">
                                                <option value="1">O</option>
                                                <option value="0">X</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2">
                                            <label for="width_5_act2">width_5_act2</label>
                                            <input type="text" name="width_5_act2" id="width_5_act2" disabled class="form-control" value="<?= $lot['width_5_act2']; ?>">
                                        </div>

                                        <div class="col-md-2">
                                            <label for="width_5_judg2">width_5_judg2</label>
                                            <select type="text" name="width_5_judg2" id="width_5_judg2" disabled class="form-control">

                                                <option <?= ($lot['width_5_judg2'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                                <option <?= ($lot['width_5_judg2'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                            </select>
                                        </div>



                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-2">
                                            <label for="width_5_act3">width_5_act3</label>
                                            <input type="text" name="width_5_act3" id="width_5_act3" disabled class="form-control" value="<?= $lot['width_5_act3']; ?>">
                                        </div>

                                        <div class="col-md-2">
                                            <label for="width_5_judg3">width_5_judg3</label>
                                            <select type="text" name="width_5_judg3" id="width_5_judg3" disabled class="form-control">

                                                <option <?= ($lot['width_5_judg3'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                                <option <?= ($lot['width_5_judg3'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="fw-bold" for="">Angle ±1°</label>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="angle_1_spec">angle_1_spec</label>
                                            <input type="text" name="angle_1_spec" id="angle_1_spec" disabled class="form-control" value="<?= $lot['angle_1_spec']; ?>">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="angle_1_act">angle_1_act</label>
                                            <input type="text" name="angle_1_act" id="angle_1_act" disabled class="form-control" value="<?= $lot['angle_1_act']; ?>">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="angle_1_judg">angle_1_judg</label>
                                            <select type="text" name="angle_1_judg" id="angle_1_judg" disabled class="form-control">

                                                <option <?= ($lot['angle_1_judg'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                                <option <?= ($lot['angle_1_judg'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-5 mb-2">
                                    <label class="fw-bold" for="">Stager 0 ±2 mm</label>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="stager_02_act">stager_02_act</label>
                                            <input type="text" name="stager_02_act" id="stager_02_act" disabled class="form-control" value="<?= $lot['stager_02_act']; ?>">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="stager_02_judg">stager_02_judg</label>
                                            <select type="text" name="stager_02_judg" id="stager_02_judg" disabled class="form-control">

                                                <option <?= ($lot['stager_02_judg'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                                <option <?= ($lot['stager_02_judg'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>


                                <div class="col-md-5 mb-2">
                                    <label class="fw-bold" for="">Overlap Joint 0 ±1 Cord</label>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="overlap_joint_41_act">overlap_joint_41_act</label>
                                            <input type="text" name="overlap_joint_41_act" id="overlap_joint_41_act" disabled class="form-control" value="<?= $lot['overlap_joint_41_act']; ?>">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="overlap_joint_41_judg">overlap_joint_41_judg</label>
                                            <select type="text" name="overlap_joint_41_judg" id="overlap_joint_41_judg" disabled class="form-control">

                                                <option <?= ($lot['overlap_joint_41_judg'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                                <option <?= ($lot['overlap_joint_41_judg'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-2 mt-md-4">
                                    <label for="pricking_condition_judg">pricking_condition_judg</label>
                                    <select type="text" name="pricking_condition_judg" id="pricking_condition_judg" disabled class="form-control">

                                        <option <?= ($lot['pricking_condition_judg'] == 1) ? 'selected' : ''; ?> value="1">O</option>
                                        <option <?= ($lot['pricking_condition_judg'] == 0) ? 'selected' : ''; ?> value="0">X</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-2">
                    <div class="card-header">
                        Production Qty
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-2">
                                <label for="qty_roll">qty_roll</label>
                                <input type="text" required name="qty_roll" id="qty_roll" disabled class="form-control" value="<?= $lot['qty_roll']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="qty_metter">qty_metter</label>
                                <input type="text" required name="qty_metter" id="qty_metter" disabled class="form-control" value="<?= $lot['qty_metter']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="qty_lot_sc">qty_lot_sc</label>
                                <input type="text" required name="qty_lot_sc" id="qty_lot_sc" disabled class="form-control" value="<?= $lot['qty_lot_sc']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="qty_lot_f">qty_lot_f</label>
                                <input type="text" required name="qty_lot_f" id="qty_lot_f" disabled class="form-control" value="<?= $lot['qty_lot_f']; ?>">
                            </div>


                            <div class="col-md-2">
                                <label for="problem_loss_time">problem_loss_time</label>
                                <input type="text" name="problem_loss_time" id="problem_loss_time" disabled class="form-control" value="<?= $lot['problem_loss_time']; ?>">
                            </div>


                        </div>

                        <div class="row">
                            <div class="col">


                                <a href="<?= base_url('lot/' . $segment); ?>" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>

    </form>
</div>
<?= $this->endSection('content') ?>