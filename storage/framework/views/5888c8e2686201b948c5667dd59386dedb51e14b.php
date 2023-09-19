
<?php $__env->startSection('container'); ?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data barang keluar</h4>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <button type="button " class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addBarangModal">
                                    Input Tanggal Cetak
                                </button>
                            </div>
                        </div>
                        <div class="card-body">


                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No barang keluar</th>
                                            <th>model</th>
                                            <th>brand</th>
                                            <th>harga</th>
                                            <th>tanggal keluar</th>
                                            <th>jumlah</th>
                                            <th>total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $__currentLoopData = $brg_keluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($brg->no_brg_keluar); ?></td>
                                            <td><?php echo e($brg->model); ?></td>
                                            <td><?php echo e($brg->nama_brand); ?></td>
                                            <td>Rp. <?php echo e($brg->harga); ?></td>
                                            <td> <?php echo e(date('d F Y', strtotime($brg->created_at))); ?></td>
                                            <td><?php echo e($brg->jml_brg_keluar); ?></td>
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
                <form method="GET" action="/laporan_barang_keluar/cetak_brg_keluar" enctype="multipart/form-data" target="_blank">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>tanggal mulai</label>
                                <input id="tgl_mulai" type="date" class="form-control" placeholder="tanggal_mulai" name="tgl_mulai">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>tanggal akhir</label>
                                <input id="tgl_akhir" type="date" class="form-control" placeholder="tanggal_mulai" name="tgl_akhir">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warning\resources\views//laporan/brg_keluar/lap_brg_keluar.blade.php ENDPATH**/ ?>