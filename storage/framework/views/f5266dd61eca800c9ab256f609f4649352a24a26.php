<?php $__currentLoopData = $ajax_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="form-group">
    <label>Harga</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Rp</span>
        </div>
        <input type="text" class="form-control" name="harga" id="harga" value="<?php echo e($d->harga); ?>" readonly required>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\warning\resources\views//transaksi/barang_masuk/ajax.blade.php ENDPATH**/ ?>