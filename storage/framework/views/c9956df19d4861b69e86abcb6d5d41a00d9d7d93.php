
<?php $__env->startSection('container'); ?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data barang retur</h4>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">

                                <a type="button " class="btn btn-primary btn-round ml-auto" href="/barang_retur/create">
                                    Tambah Barang Retur
                                </a>
                            </div>
                        </div>
                        <div class="card-body">


                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No barang retur</th>
                                            <th>model</th>
                                            <th>brand</th>
                                            <th>harga</th>
                                            <th>jumlah</th>
                                            <th>total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $__currentLoopData = $brg_retur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($brg->no_brg_retur); ?></td>
                                            <td><?php echo e($brg->model); ?></td>
                                            <td><?php echo e($brg->nama_brand); ?></td>
                                            <td>Rp. <?php echo e($brg->harga); ?></td>
                                            <td><?php echo e($brg->jml_brg_retur); ?></td>
                                            <td><?php echo e($brg->jenis); ?></td>
                                            <td>Rp. <?php echo e($brg->total); ?></td>

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
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warning\resources\views//transaksi/barang_retur/barang_retur.blade.php ENDPATH**/ ?>