<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet">
</head>

<body>

    <section style="background-image: url('img/bg.jpg'); background-repeat: no-repeat;
  background-attachment: fixed; background-size: cover;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="img/wrng.jpg" style="width: 185px;" alt="logo" class="rounded">
                                        <h4 class="mt-5 mb-3 pb-1">Warning</h4>
                                    </div>

                                    <?php if(session()->has('error')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php echo e(session('error')); ?>

                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php endif; ?>

                                    <form method="post" action="/cek_login">
                                        <?php echo csrf_field(); ?>



                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" id="form2Example11" class="form-control" placeholder="Username" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Password" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 border-0" type="submit">Log
                                                in</button>

                                        </div>



                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center border-0 gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Our Story</h4>
                                    <p class="small mb-0 text-justify">"Warning Clothing was established in 2000, stood at the beginning we aimed to raise awareness about local products that become stronger in Indonesia, inspired by all the elements, such as music, movies, lifestyle, and culture. We try to put them all into an aesthetic that is more emotional bandage, flicked, and the criticism circumstances of time. By lifting the concept of "slice of life", we intend for us to continue to accompany the journey of life in every era, framing, convey and interpret life in a unique way".</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\warning\resources\views/login.blade.php ENDPATH**/ ?>