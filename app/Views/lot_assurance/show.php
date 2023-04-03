<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container mt-2 mb-2">
    <div class="row">
        <div class="col text-center">
            <h3>LOT ASSURANCE CUTTING TTO MC</h3>
        </div>
    </div>
    <div class="row">
        <form action="<?= base_url('lot/' . $lot['id_lot']); ?>" method="post">
            <div class="col">
                <div class="card mb-2">
                    <div class="card-header">
                        Biodata
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nama">Nama</label>
                                <input type="text" required name="nama" id="nama" class="form-control" readonly disabled value="<?= $lot['nama']; ?>">
                            </div>
                            <div class="col-md-2">
                                <label for="date">Date</label>
                                <input type="date" required name="date" id="date" class="form-control" readonly disabled value="<?= $lot['date']; ?>">
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="shift">Shift</label>
                                        <input type="number" required name="shift" id="shift" class="form-control" readonly disabled value="<?= $lot['shift']; ?>">
                                    </div>
                                    <div class="col-6">
                                        <label for="group">Group</label>
                                        <input type="text" required name="group" id="group" class="form-control" readonly disabled value="<?= $lot['group']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="machine">Machine</label>
                                <input type="text" required name="machine" id="machine" class="form-control" readonly disabled value="<?= $lot['machine']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        List LOT - <a href="<?= base_url('lot/list/' . $lot['id_lot'] . '/new'); ?>" class="btn btn-primary btn-sm">New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ply Code</th>
                                        <th>Ply Type</th>
                                        <th>Time</th>
                                        <th>Expired Date</th>
                                        <th>Roll</th>
                                        <th>Meter</th>
                                        <th>Lot Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1;
                                    foreach ($detail as $d) : ?>

                                        <tr>
                                            <td><?= $a++; ?></td>
                                            <td><?= $d['ply_code']; ?></td>
                                            <td><?= $d['ply_type']; ?></td>
                                            <td><?= date('H:i:s', strtotime($d['time_start'])); ?></td>
                                            <td><?= $d['expired_date']; ?></td>
                                            <td><?= $d['qty_roll']; ?></td>
                                            <td><?= $d['qty_metter']; ?></td>
                                            <td><?= $d['qty_lot_sc']; ?>/ <?= $d['qty_lot_f']; ?></td>
                                            <td>
                                                <a href="<?= base_url('lot/list/' . $d['id_detail']); ?>" class="btn btn-sm mb-2 btn-info">View</a>
                                                <a href="<?= base_url('lot/list/' . $d['id_detail'] . '/edit'); ?>" class="btn btn-sm mb-2 btn-warning">Edit</a>
                                                <form action='<?= base_url('lot/list/' . $d['id_detail']); ?>' method='post' enctype='multipart/form-data'>
                                                    <?= csrf_field(); ?>
                                                    <input type='hidden' name='_method' value='DELETE' />
                                                    <!-- GET, POST, PUT, PATCH, DELETE-->
                                                    <button type='button' onclick="deleteTombol(this)" class='btn btn-sm btn-danger mb-2'>Delete</button>
                                                </form>


                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        Scrap Proses Cutting
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="problem_left_off">problem_left_off</label>
                                <input type="text" name="problem_left_off" id="problem_left_off" class="form-control" readonly disabled value="<?= $lot['problem_left_off']; ?>">
                            </div>
                            <div class="col-md-2">
                                <label for="join_material">join_material</label>
                                <input type="text" name="join_material" id="join_material" class="form-control" readonly disabled value="<?= $lot['join_material']; ?>">
                            </div>
                            <div class="col-md-2">
                                <label for="trouble_cutting">trouble_cutting</label>
                                <input type="text" name="trouble_cutting" id="trouble_cutting" class="form-control" readonly disabled value="<?= $lot['trouble_cutting']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="trouble_break">trouble_break</label>
                                <input type="text" name="trouble_break" id="trouble_break" class="form-control" readonly disabled value="<?= $lot['trouble_break']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="melipat_proses_cutting">melipat_proses_cutting</label>
                                <input type="text" name="melipat_proses_cutting" id="melipat_proses_cutting" class="form-control" readonly disabled value="<?= $lot['melipat_proses_cutting']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="nyangkut_pada_conveyor">nyangkut_pada_conveyor</label>
                                <input type="text" name="nyangkut_pada_conveyor" id="nyangkut_pada_conveyor" class="form-control" readonly disabled value="<?= $lot['nyangkut_pada_conveyor']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="melipat_di_festoner">melipat_di_festoner</label>
                                <input type="text" name="melipat_di_festoner" id="melipat_di_festoner" class="form-control" readonly disabled value="<?= $lot['melipat_di_festoner']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="ganti_sudut">ganti_sudut</label>
                                <input type="text" name="ganti_sudut" id="ganti_sudut" class="form-control" readonly disabled value="<?= $lot['ganti_sudut']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="variasi_sudut">variasi_sudut</label>
                                <input type="text" name="variasi_sudut" id="variasi_sudut" class="form-control" readonly disabled value="<?= $lot['variasi_sudut']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="variasi_width">variasi_width</label>
                                <input type="text" name="variasi_width" id="variasi_width" class="form-control" readonly disabled value="<?= $lot['variasi_width']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="tersangkut_di_unfill">tersangkut_di_unfill</label>
                                <input type="text" name="tersangkut_di_unfill" id="tersangkut_di_unfill" class="form-control" readonly disabled value="<?= $lot['tersangkut_di_unfill']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="tersangkut_di_cutter">tersangkut_di_cutter</label>
                                <input type="text" name="tersangkut_di_cutter" id="tersangkut_di_cutter" class="form-control" readonly disabled value="<?= $lot['tersangkut_di_cutter']; ?>">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6 mb-2">
                        <div class="card mb-2">
                            <div class="card-header">
                                Scrap Proses Calender
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="joint_material_calender">joint_material_calender</label>
                                        <input type="text" name="joint_material_calender" id="joint_material_calender" class="form-control" readonly disabled value="<?= $lot['joint_material_calender']; ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="sortir_coak">sortir_coak</label>
                                        <input type="text" name="sortir_coak" id="sortir_coak" class="form-control" readonly disabled value="<?= $lot['sortir_coak']; ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="botak">botak</label>
                                        <input type="text" name="botak" id="botak" class="form-control" readonly disabled value="<?= $lot['botak']; ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="open_cord">open_cord</label>
                                        <input type="text" name="open_cord" id="open_cord" class="form-control" readonly disabled value="<?= $lot['open_cord']; ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="side_gum">side_gum</label>
                                        <input type="text" name="side_gum" id="side_gum" class="form-control" readonly disabled value="<?= $lot['side_gum']; ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="ply_scorch">ply_scorch</label>
                                        <input type="text" name="ply_scorch" id="ply_scorch" class="form-control" readonly disabled value="<?= $lot['ply_scorch']; ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="melipat_akhir_calender">melipat_akhir_calender</label>
                                        <input type="text" name="melipat_akhir_calender" id="melipat_akhir_calender" class="form-control" readonly disabled value="<?= $lot['melipat_akhir_calender']; ?>">
                                    </div>


                                    <div class="col-md-3">
                                        <label for="chaffer">chaffer</label>
                                        <input type="text" name="chaffer" id="chaffer" class="form-control" readonly disabled value="<?= $lot['chaffer']; ?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <div class="card">
                            <div class="card-header">
                                Satuan
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="mb-2">
                                            <label for="plan_roll">plan_roll</label>
                                            <input type="text" name="plan_roll" id="plan_roll" class="form-control" readonly disabled value="<?= $lot['plan_roll']; ?>">
                                        </div>

                                        <div class="mb-2">
                                            <label for="plan_metter">plan_metter</label>
                                            <input type="text" name="plan_metter" id="plan_metter" class="form-control" readonly disabled value="<?= $lot['plan_metter']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">


                                        <div class="mb-2">
                                            <label for="actual_roll">actual_roll</label>
                                            <input type="text" name="actual_roll" id="actual_roll" class="form-control" readonly disabled value="<?= $lot['actual_roll']; ?>">
                                        </div>

                                        <div class="mb-2">
                                            <label for="actual_metter">actual_metter</label>
                                            <input type="text" name="actual_metter" id="actual_metter" class="form-control" readonly disabled value="<?= $lot['actual_metter']; ?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                FOREMAN
                            </div>
                            <div class="card-body">
                                <h3>TTD</h3>
                                <input type="text" class="form-control" readonly disabled value="<?= $lot['nama_foreman']; ?>" name="nama_foreman" placeholder="Nama Foreman">
                            </div>
                            <div class="card-footer text-end">
                                <a href="<?= base_url('lot'); ?>" class="btn-secondary btn">Back</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>
</div>
<?= $this->endSection('content') ?>