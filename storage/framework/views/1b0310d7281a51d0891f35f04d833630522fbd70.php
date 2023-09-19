
<?php $__env->startSection('container'); ?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data brand</h4>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <!-- <h4 class="card-title">Add Row</h4> -->
                                <!-- <button type="button" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addbrandModal">
                                    <i class="fa fa-plus"></i>
                                    Add Row
                                </button> -->
                                <button type="button " class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addbrandModal">
                                    Tambah Brand
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama brand</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($brd->nama_brand); ?></td>

                                            <td>
                                                <div class="form-button-action">
                                                    <a href="#modalEditbrand<?php echo e($brd->id); ?>" data-toggle="modal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#modalHapusbrand<?php echo e($brd->id); ?>" data-toggle="modal" class="btn btn-link btn-danger" title="" class="btn btn-link btn-primary btn-lg">
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
<div class="modal fade" id="addbrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/brand/store" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama Brand</label>
                                <input id="nama" type="text" class="form-control" placeholder="Nama" name="nama_brand">
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

<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalEditbrand<?php echo e($e->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Edit brand
                </h1>
            </div>
            <div class="modal-body">
                <form method="post" action="/brand/<?php echo e($e->id); ?>/update" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama brand</label>
                                <input name="id" value="<?php echo e($e->id); ?>" type="hidden" required>
                                <input id="addName" type="text" class="form-control" placeholder="Nama" name="nama_brand" value="<?php echo e($e->nama_brand); ?>" required>
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

<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalDetailbrand<?php echo e($s->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    detail brand
                </h1>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <tr>
                            <td>Name </td>
                            <td> : </td>
                            <td> <?php echo e($s->nama_brand); ?></td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalHapusbrand<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Hapus brand
                </h1>
            </div>
            <div class="modal-body">
                <form method="get" action="/brand/<?php echo e($d->id); ?>/destroy" enctype="multipart/form-data">
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
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warning\resources\views/brand/brand.blade.php ENDPATH**/ ?>