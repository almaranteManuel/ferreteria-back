<?php $__env->startSection('content'); ?>

        <div class="container my-ld-2">
            
            <div class="container-fluid justify-content-center">
                <section class="container min-vh-100 p-lg-5">
                    <?php if(auth()->guard()->check()): ?>
                        <div class="col my-1">
                            <h1>Bienvenido, <?php echo e(Auth::user()->name); ?></h1>
                        </div>
                    <?php else: ?>
                        <div class="bg-dark rounded-5 p-lg-5">
                            <div class="col my-1">
                                <h4 class="text-white fw-light fs-5 text-center">¡Bienvenido Administrador!</h4>
                            </div>
                            <div class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="<?php echo e(asset('images/logo-nobg.png')); ?>" width="180" alt="Logo sistema" />
                            </div>
                            <form method="POST" action="/login">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo: </label>
                                    <input type="email" class="form-control" name="email" id="email" :value="old('email')" />
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" />
                                </div>
                                <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Iniciar sesion">
                            </form>
                        </div>
                    <?php endif; ?>
                </section>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manuco/projects/tienda-back/resources/views/dashboard/dashboard.blade.php ENDPATH**/ ?>