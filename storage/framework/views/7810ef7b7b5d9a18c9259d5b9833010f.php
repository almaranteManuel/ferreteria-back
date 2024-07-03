<?php $__env->startSection('content'); ?>

    <div class="card mt-3">
        <h5 class="card-header">Ingresar producto</h5>
        <div class="card-body">
            <form action="<?php echo e(url('/store')); ?>" method="post" class="row needs-validation"
                enctype="multipart/form-data" novalidate>
                <?php echo csrf_field(); ?>

                <!-- NOMBRE DEL PRODUCTO -->
                <div class="form-group col-md-6">
                    <label for="name">Nombre: *</label>
                    <input type="text" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>"
                        name="name" id="name" required />
                    <?php if($errors->has('name')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('name')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <!-- DESCRIPCION DEL PRODUCTO -->
                <div class="form-group col-md-6">
                    <label for="description">Descripcion: *</label>
                    <input type="text" class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>"
                        name="description" id="description" required />
                    <?php if($errors->has('description')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('description')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                

                

                <!-- CATEGORIA DEL PRODUCTO -->
                <div class="col-md-6 mt-2">
                    <div class="form-group <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <label for="category_id">Categoria: *</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <?php if($categories->isEmpty()): ?>
                                <option value="" disabled selected>
                                    No se encontraron categorías
                                </option>
                            <?php else: ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>">
                                        <?php echo e($category->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                        <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>


                

                <!-- UNIDAD DE MEDIDA DEL PRODUCTO -->
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="unidad_medida_id">Precio: *</label>
                        <input id="price" type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" required>
                    </div>
                </div>

                <!-- PERIODO DE REGISTRO DEL PRODUCTO -->
                

                <div class="form-group col-md-12 mt-3">
                    <input type="submit" class="btn btn-primary" value="Ingresar" />
                    <a href="/products" class="btn btn-dark">Regresar</a>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('AfterScript'); ?>
    <script>
        // DECLARACION DE VARIABLES
        const d = document;
        const vencimientoFechaCheck = d.getElementById("activarFechaVencimiento");
        const vencimientoFechaInput = d.getElementById("fechaVencimientoProducto");

        // DECLARACION DE FUNCIONES
        const onElementChecked = () => {
            vencimientoFechaInput.disabled = vencimientoFechaInput.disabled ?
                false :
                true;
        };

        d.addEventListener("DOMContentLoaded", () => {
            // Asignar el evento al checkbox
            vencimientoFechaCheck.addEventListener("change", onElementChecked);
        });
    </script>
    <script>
        $(document).ready(function() {
            // Inicializa Selectize
            initSearchSelect('usuario_id');
            initSearchSelect('categoria_id');
            initSearchSelect('categoria_id');
            initSearchSelect('estante_id');
            initSearchSelect('unidad_medida_id');
            initSearchSelect('periodo_id');


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manuco/projects/tienda-back/resources/views/products/create.blade.php ENDPATH**/ ?>