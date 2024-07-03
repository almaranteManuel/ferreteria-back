<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <?php if(auth()->guard()->check()): ?>
            <button class="btn btn-primary text-white fw-bold" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <span class="text-center">Menú</span>
            </button>
        <?php endif; ?>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(auth()->guard()->guest()): ?>
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-md-5">
                        <a class="nav-link active" aria-current="page" href="/"><?php echo e(__('Ferreteria')); ?></a>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-md-5">
                        <a class="nav-link active" aria-current="page" href="/"><?php echo e(__('Inicio')); ?></a>
                    </li>
                </ul>
            <?php endif; ?>

            <div class="mx-md-5">
                <ul id="auth-menu" class="navbar-nav justity-content-between">
                    <?php if(auth()->guard()->guest()): ?>

                        <li class="nav-menu text-white mx-1 ">
                            
                        </li>

                        <li class="nav-menu text-white mx-1">
                            
                        </li>
                    <?php else: ?>
                        <li class="col-sm-10 nav-item">


                        </li>
                        <li class="col-sm-2 nav-item">
                            <a class="nav-link text-white btn-outline-light btn" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="px-1"><?php echo e(__('Salir')); ?></span>
                            </a>
                        </li>

                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>

                        <form id="logout-form" action="" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </div>
</nav>

<?php if(auth()->guard()->check()): ?>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header bg-dark">
            <button type="button" class="btn btn-primary text-white" data-bs-dismiss="offcanvas" aria-label="Close">
                <span class="text-center">Menú</span>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action">
                    <a href="" class="text-dark text-decoration-none text-uppercase">
                        <?php echo e(__('Inicio')); ?></a>
                </li>

                <li class="list-group-item list-group-item-action">
                    <a href="/profile" class="text-dark text-decoration-none text-uppercase">
                        Mi Perfil</a>
                </li>

                <li class="list-group-item list-group-item-action">
                    <a href="/categories" class="text-dark text-decoration-none text-uppercase">
                        Categorias</a>
                </li>

                <li class="list-group-item list-group-item-action">
                    <a href="/products" class="text-dark text-decoration-none text-uppercase">
                        Productos</a>
                </li>

                <li class="list-group-item list-group-item-action">
                    <a href="/marcos-company/" class="text-dark text-decoration-none text-uppercase">
                        Inventario</a>
                </li>

                <li class="col-sm-2 nav-item">
                    <a class="nav-link text-white btn-outline-light btn" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="px-1">Salir</span>
                    </a>
                </li>

                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/manuco/projects/tienda-back/resources/views/includes/header.blade.php ENDPATH**/ ?>