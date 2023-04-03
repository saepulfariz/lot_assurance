<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container mt-2">
    <div class="row">
        <div class="col text-center">
            <h3>LOT ASSURANCE CUTTING TTO MC</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?= base_url('lot/new'); ?>" class="btn btn-primary mb-2">New</a>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Date</th>
                                    <th>Shift</th>
                                    <th>Group</th>
                                    <th>Mesin</th>
                                    <th>Valid</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($lot as $d) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['date']; ?></td>
                                        <td><?= $d['shift']; ?></td>
                                        <td><?= $d['group']; ?></td>
                                        <td><?= $d['machine']; ?></td>
                                        <td><?= $d['is_valid']; ?></td>
                                        <td>
                                            <a href="<?= base_url('lot/' . $d['id_lot']); ?>">View</a> | <a href="<?= base_url('lot/' . $d['id_lot'] . '/edit'); ?>">Edit</a> |

                                            <form action='<?= base_url('lot/' . $d['id_lot']); ?>' method='post' enctype='multipart/form-data'>
                                                <?= csrf_field(); ?>
                                                <input type='hidden' name='_method' value='DELETE' />
                                                <!-- GET, POST, PUT, PATCH, DELETE-->
                                                <button type='submit' class='btn btn-sm btn-danger del-tombol'>Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>