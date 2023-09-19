
<?php $__env->startSection('container'); ?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data User Karyawan</h4>

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
                                <a class="btn btn-danger btn-round ml-auto" href="/laporan_user/cetak_user" target="_blank">
                                    Cetak
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama</th>
                                            <th>username</th>
                                            <th>password</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($brg->nama); ?></td>
                                            <td><?php echo e($brg->username); ?></td>
                                            <td><?php echo e($brg->password); ?></td>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warning\resources\views//laporan/user/lap_user.blade.php ENDPATH**/ ?>