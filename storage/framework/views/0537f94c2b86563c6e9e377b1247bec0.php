<?php $__env->startSection('content'); ?>

    <div class="card mt-3">
        <h5 class="card-header">Editar información del producto</h5>
        <div class="card-body">
            <form action="" method="post" class="row needs-validation"
                enctype="multipart/form-data" novalidate>
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>



                <div class="form-group col-md-6">
                    <label for="nombre_opcion">Nombre: </label>
                    <input type="text" class="form-control <?php echo e($errors->has('nombre_opcion') ? 'is-invalid' : ''); ?>"
                        name="nombre_opcion" id="nombre_opcion" value="<?php echo e($product->name); ?>" required>
                    <?php if($errors->has('nombre_opcion')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('nombre_opcion')); ?>

                        </div>
                    <?php endif; ?>
                </div>


                <div class="form-group col-md-6">
                    <label for="descripcion_opcion">Descripcion: </label>
                    <input type="text" class="form-control <?php echo e($errors->has('descripcion_opcion') ? 'is-invalid' : ''); ?>"
                        name="descripcion_opcion" id="descripcion_opcion" value="<?php echo e($product->description); ?>" required>
                    <?php if($errors->has('descripcion_opcion')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('descripcion_opcion')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <!-- IMAGEN DEL PRODUCTO -->
                <div class="form-group col-md-6 mt-2">
                    <label for="imagenProducto">Imagen: </label>

                    <input type="file" class="form-control <?php echo e($errors->has('imagenProducto') ? 'is-invalid' : ''); ?>"
                        name="imagenProducto" id="imagenProducto" accept="image/*" />

                    <?php if($errors->has('imagenProducto')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('imagenProducto')); ?>

                        </div>
                    <?php endif; ?>
                </div>


                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="usuario_id">Proveedor:</label>
                        
                    </div>
                </div>


                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="categoria_id">Categoria:</label>
                        <select name="categoria_id" id="categoria_id" class="form-control" required>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>" <?php echo e($product->category->id == $category->id ? 'selected' : ''); ?>>
                                    <?php echo e($category->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>


                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="estante_id">Estante:</label>
                        
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="unidad_medida_id">Unidad de Medida:</label>
                        
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="periodo_id">Período:</label>
                        
                    </div>
                </div>



                <div class="form-group col-md-12 mt-3">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                    <a href="/products" class="btn btn-dark">Regresar</a>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('AfterScript'); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manuco/projects/tienda-back/resources/views/products/edit.blade.php ENDPATH**/ ?>