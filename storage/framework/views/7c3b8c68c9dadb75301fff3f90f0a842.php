<?php $__env->startSection('content'); ?>

<div class="card mt-3">
    <h5 class="card-header">Crear Categoría</h5>
    <div class="card-body">
        <form action="/category/store" method="post" class="row needs-validation" novalidate>
            <?php echo csrf_field(); ?>

            <div class="form-group col-md-4">
                <label for="name">Nombre: *</label>
                <input type="text" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>"
                    name="name" id="name" required>
                <?php if($errors->has('name')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name')); ?>

                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group col-md-12 mt-3">
                <input type="submit" class="btn btn-primary" value="Crear">
                <a href="/categories" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manuco/projects/tienda-back/resources/views/categories/create.blade.php ENDPATH**/ ?>