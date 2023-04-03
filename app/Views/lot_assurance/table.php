<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col text-center">
            <h3>LOT ASSURANCE CUTTING TTO MC</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            Nama : <input type="text" class="form-control">
        </div>
        <div class="col-md-2">
            Date : <input type="date" class="form-control">
        </div>
        <div class="col-md-2">
            <div class="row">
                <div class="col">
                    <label for="shift">Shift</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col">
                    <label for="group">Group</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-2">
            Mesin : <input type="text" class="form-control">
        </div>
    </div>
    <!-- <div class="row">
        <div class="col">
            <label for="ply_code">Ply Code</label>
            <input type="text" id="ply_code" name="ply_code[]" class="form-control">
        </div>
    </div> -->
    <div class="row mt-2">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-light text-center table-bordered align-middle">
                    <thead class="align-middle">
                        <tr>
                            <th rowspan="3">Ply Code</th>
                            <th rowspan="2">Print
                                Tag code
                                (CC/s)</th>
                            <th rowspan="2" colspan="3">No Recipe
                                Size</th>
                            <th rowspan="3">Ply Type
                                1/2/
                                3/4</th>
                            <th rowspan="2">Time (Wib)</th>
                            <th colspan="9">Material Textile Rubberized used</th>
                            <th colspan="14">Body Ply Dimention (CC/h)</th>

                            <th rowspan="2">Pricking Condit'n (M)</th>

                            <th colspan="3">Production Qty</th>

                            <th rowspan="3">Problem
                                Loss Time</th>

                        </tr>
                        <tr>

                            <th colspan="3">Material Code
                                (CC/s)</th>
                            <th colspan="3">Marking Colour
                                (CC/s)</th>
                            <th rowspan="2">Expired Date
                                (SC/f)</th>
                            <th rowspan="2">Approval
                                Lab (CC/s) OK/NG</th>
                            <th rowspan="2"> Lot Number (SC/f)</th>
                            <th colspan="7">Width ±5 mm</th>
                            <th colspan="3">Angle
                                ±1°</th>
                            <th colspan="2">Stager
                                0 ±2 mm</th>
                            <th colspan="2">Overlap Joint
                                4 ±1 cord</th>


                            <th rowspan="2">Roll</th>
                            <th rowspan="2">Meter</th>
                            <th rowspan="2">Lot Number (SC/f)</th>
                        </tr>
                        <tr>
                            <th>Judge <span class="text-primary">(O/X)</span></th>
                            <th>Spec</th>
                            <th>Act</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>
                            <th>Start</th>
                            <th>Spec</th>
                            <th>Act</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>

                            <th>Spec</th>
                            <th>Act</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>


                            <th>Spec</th>
                            <th>Act 1</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>

                            <th>Act 2</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>

                            <th>Act 3</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>

                            <th>Spec</th>
                            <th>Act</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>

                            <th>Act</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>

                            <th>Act</th>
                            <th>Judge <span class="text-primary">(O/X)</span></th>



                            <th>Judge <span class="text-primary">(O/X)</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>