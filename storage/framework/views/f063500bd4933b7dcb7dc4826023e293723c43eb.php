
<?php $__env->startSection('container'); ?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <!-- Card -->
            <h4 class="page-title">Card</h4>

            <!-- Card With Icon States Color -->
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-user-6"></i>
                                    </div>
                                </div>
                                <div class="col col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Data User</p>
                                        <h4 class="card-title"><?php echo e($user); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-box"></i>
                                    </div>
                                </div>
                                <div class="col col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Data Barang</p>
                                        <h4 class="card-title"><?php echo e($barang); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-symbol"></i>
                                    </div>
                                </div>
                                <div class="col col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Data Brand</p>
                                        <h4 class="card-title"><?php echo e($brand); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-box-3"></i>
                                    </div>
                                </div>
                                <div class="col col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Data Barang Masuk</p>
                                        <h4 class="card-title"><?php echo e($barangMasuk); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-box-3"></i>
                                    </div>
                                </div>
                                <div class="col col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Data Barang Keluar</p>
                                        <h4 class="card-title"><?php echo e($barangKeluar); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-box-3"></i>
                                    </div>
                                </div>
                                <div class="col col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Data Barang Retur</p>
                                        <h4 class="card-title"><?php echo e($barangRetur); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Barang Masuk & Barang Keluar</div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="doughnutChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Bar Chart</div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>

        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    const ctx = document.getElementById('doughnutChart');
    const data = {

        $barangMasuk

    };

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Barang Masuk', 'Barang Keluar'],
            datasets: [{
                label: '# of Votes',
                data: [data, 19],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warning\resources\views/home.blade.php ENDPATH**/ ?>