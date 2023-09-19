
<?php $__env->startSection('container'); ?>

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">add barang masuk</h4>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">add barang masuk</div>
                        </div>
                        <form method="post" enctype="multipart/form-data" action="/barang_masuk/store">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email2">Nomor Barang Masuk</label>
                                    <input type="text" value=" NBM-00<?php echo e($msk->count()+1); ?>" class="form-control" placeholder="Nomor Barang Masuk" name="no_brg_masuk" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama Bar ang</label>
                                    <select class="form-control" name="id_barang" id="id_barang" required>
                                        <option value="" hidden="">-- pilih model --</option>
                                        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($d->id); ?>"><?php echo e($d->model); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>



                                <div id="detail_barang"></div>

                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="jumlah barang masuk" id="jml_brg_msk" name="jml_brg_masuk" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">pcs</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>total</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        </div>
                                        <input type="text" id="total" class="form-control" placeholder="total" name="total" required>
                                    </div>
                                </div>


                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="/barang_masuk" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#jml_brg_msk").keyup(function() {
            var jml_brg_msk = $("#jml_brg_msk").val();
            var harga = $("#harga").val();

            var total = parseInt(harga) * parseInt(jml_brg_msk);
            $("#total").val(total);

        });
    });
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script type="text/javascript">
    $("#id_barang").change(function() {
        var id_barang = $("#id_barang").val();
        $.ajax({
            type: "GET",
            url: "/barang_masuk/ajax",
            data: "id_barang=" + id_barang,
            cache: false,
            success: function(data) {
                $("#detail_barang").html(data);
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warning\resources\views//transaksi/barang_masuk/tambah.blade.php ENDPATH**/ ?>