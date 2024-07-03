<?php $__env->startSection('content'); ?>

    <div class="card">
        <h5 class="card-header">Información personal</h5>
        <div class="card-body">
            <form action="" method="post" class="row needs-validation"
                novalidate>
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group col-md-6">
                    <label for="name">Nombre: </label>
                    <input type="text" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>"
                        name="name" id="name" value="<?php echo e($user->name); ?>" required>
                    <?php if($errors->has('name')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('name')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group col-md-6">
                    <label for="phone">Teléfono: </label>
                    <input type="text" class="form-control <?php echo e($errors->has('phone') ? 'is-invalid' : ''); ?>"
                        name="phone" id="phone" value="" required>
                    <?php if($errors->has('phone')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('phone')); ?>

                        </div>
                    <?php endif; ?>
                </div>


                <div class="form-group col-md-6 mt-2">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
                        name="email" id="email" value="" required>
                    <?php if($errors->has('email')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('email')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <h5 class="text-primary mt-5">Seguridad</h5>
                <hr>



                <div class="form-group col-md-4">
                    <label for="old_password">Contraseña actual: </label>
                    <input type="password"
                        class="form-control <?php echo e($errors->has('old_password') ? 'is-invalid' : ''); ?>"
                        name="old_password" id="old_password" required>
                    <?php if($errors->has('old_password')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('old_password')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group col-md-4">
                    <label for="new_password">Contraseña nueva: </label>
                    <input type="password" class="form-control <?php echo e($errors->has('new_password') ? 'is-invalid' : ''); ?>"
                        name="new_password" id="new_password">
                    <?php if($errors->has('new_password')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('new_password')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group col-md-4">
                    <label for="confirm_password">Confirmar contraseña: </label>
                    <input type="password"
                        class="form-control <?php echo e($errors->has('confirm_password') ? 'is-invalid' : ''); ?>"
                        name="confirm_password" id="confirm_password">
                    <?php if($errors->has('confirm_password')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('confirm_password')); ?>

                        </div>
                    <?php endif; ?>
                </div>



                <div class="form-group col-md-12 mt-3">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                    <a href="/" class="btn btn-dark">Regresar</a>
                </div>
            </form>
        </div>

    </div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('AfterScript'); ?>
    <script>
        //validar numero de telefono
        $(document).ready(function() {
            $('#phone').on('input', function() {
                let telefono = $(this).val();
                telefono = telefono.replace(/\D/g, '');
                if (telefono.length >= 4) {
                    telefono = telefono.substr(0, 4) + '-' + telefono.substr(4, 4);
                }
                $(this).val(telefono);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manuco/projects/tienda-back/resources/views/profile/edit.blade.php ENDPATH**/ ?>