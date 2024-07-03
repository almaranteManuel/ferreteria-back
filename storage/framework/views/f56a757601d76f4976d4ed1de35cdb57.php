<?php $__env->startSection('content'); ?>

    <div class="card mt-3">
        <h5 class="card-header">Detalle del producto</h5>
        <div class="card-body row">
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="col">
                        
                    </div>
                    <div class="col-md-8">
                        <label for="nombre_opcion">Nombre: </label>
                        <input type="text" class="form-control <?php echo e($errors->has('nombre_opcion') ? 'is-invalid' : ''); ?>"
                            name="nombre_opcion" id="nombre_opcion" value="<?php echo e($product->name); ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_id">Proveedor:</label>
                    <input type="text" class="form-control <?php echo e($errors->has('nombre_opcion') ? 'is-invalid' : ''); ?>"
                        name="nombre_opcion" id="nombre_opcion" disabled>
                </div>
            </div>

            <div class="col-md-6 mt-2">
                <div class="form-group">
                    <label for="usuario_id">Cantidad:</label>
                    <input type="text" class="form-control <?php echo e($errors->has('nombre_opcion') ? 'is-invalid' : ''); ?>"
                        name="nombre_opcion" id="nombre_opcion"  disabled>
                </div>
            </div>


            <div class="col-md-6 mt-2">
                <div class="form-group">
                    <label for="categoria_id">Categoria:</label>
                    <input type="text" class="form-control" value="<?php echo e($product->category->name); ?>" disabled>
                </div>
            </div>


            <div class="col-md-6 mt-2">
                <div class="form-group">
                    <label for="estante_id">Estante:</label>
                    <input type="text" class="form-control <?php echo e($errors->has('nombre_opcion') ? 'is-invalid' : ''); ?>"
                        disabled>
                </div>
            </div>

            <div class="col-md-6 mt-2">
                <div class="form-group">
                    <label for="unidad_medida_id">Unidad de medida:</label>
                    <input type="text" class="form-control <?php echo e($errors->has('nombre_opcion') ? 'is-invalid' : ''); ?>"
                         disabled>
                </div>
            </div>

            <div class="form-group col-md-12 mt-md-2">
                <label for="descripcion_opcion">Descripción: </label>
                <textarea id="auto-resize-textarea" class="form-control" disabled><?php echo e($product->description); ?></textarea>
            </div>

            <div class="form-group col-md-12 mt-3">
                <a href="/products" class="btn btn-dark">Regresar</a>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manuco/projects/tienda-back/resources/views/products/detail.blade.php ENDPATH**/ ?>