
<?php $__env->startSection('container'); ?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data barang</h4>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <!-- <h4 class="card-title">Add Row</h4> -->
                                <!-- <button type="button" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addbarangModal">
                                    <i class="fa fa-plus"></i>
                                    Add Row
                                </button> -->
                                <button type="button " class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addBarangModal">
                                    Tambah Barang
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <!-- Modal -->
                            <!-- <div class="modal fade" id="addbarangModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h1 class="modal-title">
                                                Tambah barang
                                            </h1>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="/barang/store" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="nama" type="text" class="form-control" placeholder="Nama" name="nama">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group form-group-default">
                                                            <label>barangname</label>
                                                            <input id="barangname" type="text" class="form-control" placeholder="barangname" name="barangname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group form-group-default">
                                                            <label>password</label>
                                                            <input id="password" type="password" class="form-control" placeholder="password" name="password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer no-bd">
                                            <button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>brand</th>
                                            <th>model</th>
                                            <th>stok</th>
                                            <th>jenis</th>
                                            <th>harga</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($brg->nama_brand); ?></td>
                                            <td><?php echo e($brg->model); ?></td>
                                            <td><?php echo e($brg->stok); ?></td>
                                            <td><?php echo e($brg->jenis); ?></td>
                                            <td><?php echo e($brg->harga); ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="#modalEditBarang<?php echo e($brg->id); ?>" data-toggle="modal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#modalHapusBarang<?php echo e($brg->id); ?>" data-toggle="modal" class="btn btn-link btn-danger" title="" class="btn btn-link btn-primary btn-lg">
                                                        <i class="fa fa-times"></i>
                                                    </a>


                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="addBarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/barang/store" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama Model</label>
                                <input id="nama" type="text" class="form-control" placeholder="Nama" name="model">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Jenis</label>
                                <input id="nama" type="text" class="form-control" placeholder="Nama" name="jenis">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>brand</label>
                                <select class="form_control" name="id_brand" required>
                                    <option value="" hidden="">--Pilih Brand--</option>
                                    <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($brd->id); ?>"><?php echo e($brd->nama_brand); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>harga</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="harga" name="harga" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="stok" name="stok" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalEditBarang<?php echo e($e->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Edit barang
                </h1>
            </div>
            <div class="modal-body">
                <form method="post" action="/barang/<?php echo e($e->id); ?>/update" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama Model</label>
                                <input id="nama" type="text" class="form-control" placeholder="Nama" name="model" value="<?php echo e($e->model); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>brand</label>
                                <select class="form_control" name="id_brand" required>
                                    <option value="<?php echo e($e->nama_brand); ?>"><?php echo e($e->nama_brand); ?></option>
                                    <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($brd->id); ?>"><?php echo e($brd->nama_brand); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>harga</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    </div>
                                    <input type="number" value="<?php echo e($e->harga); ?>" class="form-control" placeholder="harga" name="harga" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>jenis</label>
                                <div class="input-group mb-3">
                                    <input type="text" value="<?php echo e($e->jenis); ?>" class="form-control" placeholder="jenis" name="jenis" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="number" value="<?php echo e($e->stok); ?>" class="form-control" placeholder="stok" name="stok" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" id="addRowButton" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalDetailBarang<?php echo e($s->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    detail barang
                </h1>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <tr>
                            <td>Nama Model </td>
                            <td> : </td>
                            <td> <?php echo e($s->model); ?></td>
                        </tr>

                        <tr>
                            <td>brand </td>
                            <td> : </td>
                            <td> <?php echo e($s->id_brand); ?></td>
                        </tr>

                        <tr>
                            <td>password </td>
                            <td> : </td>
                            <td> <?php echo e($s->password); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->


<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalHapusBarang<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Hapus barang
                </h1>
            </div>
            <div class="modal-body">
                <form method="get" action="/barang/<?php echo e($d->id); ?>/destroy" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <input type="hidden" value="<?php echo e($d->id); ?>" required>
                    </div>
                    <div class="form-group">
                        <h4>Apakah anda akan menghapus ini?</h4>
                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" id="addRowButton" class="btn btn-danger">Hapus</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warning\resources\views//barang/barang.blade.php ENDPATH**/ ?>