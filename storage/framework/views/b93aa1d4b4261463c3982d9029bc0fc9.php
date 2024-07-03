<h2>Registro</h2>

<?php if($errors->any()): ?>
    <div>
        <div>Hubo un problema</div>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="/register" method="POST">
    <?php echo csrf_field(); ?>

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>">
    </div>

    <div>
        <label for="password">Contrasena</label>
        <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>">
    </div>

    <div>
        <label for="password_confirmation">Confirmar contrasena</label>
        <input type="password_confirmation" name="password_confirmation" id="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>">
    </div>
</form>
<?php /**PATH /home/manuco/projects/tienda-back/resources/views/auth/register.blade.php ENDPATH**/ ?>