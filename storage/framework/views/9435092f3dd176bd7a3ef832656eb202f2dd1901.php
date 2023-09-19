<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body onload="window.print();">

    <h1>Data Barang Masuk</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nomor Barang Masuk</th>
                <th scope="col">model</th>
                <th scope="col">jumlah barang masuk</th>
                <th scope="col">total</th>
                <th scope="col">tanggal masuk</th>
            </tr>
        </thead>
        <tbody>

            <?php if($sum_total == 0): ?>
            <tr>
                <td colspan="6">
                    <center>data tidak ditemukan</center>
                </td>
            </tr>
            <?php endif; ?>
            <?php $__currentLoopData = $brg_msk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($brg->no_brg_masuk); ?></td>
                <td><?php echo e($brg->model); ?></td>
                <td><?php echo e($brg->jml_brg_masuk); ?></td>
                <td><?php echo e($brg->total); ?></td>
                <td><?php echo e($brg->created_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>total harga</td>
                <td>Rp. <?php echo e(number_format($sum_total)); ?></td>
            </tr>

        </tbody>
    </table>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html><?php /**PATH C:\xampp\htdocs\warning\resources\views//laporan/brg_msk/cetak_brg_msk.blade.php ENDPATH**/ ?>