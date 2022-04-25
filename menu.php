
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="far fa-credit-card"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ABM Ventas</div>
      </a>

     
      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>

   
      <hr class="sidebar-divider">

      
      <div class="sidebar-heading">
        Administración
      </div>

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseClientes">
          <i class="fas fa-fw fa-cog"></i>
          <span>Clientes</span>
        </a>
        <div id="collapseClientes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cliente-formulario.php">Nuevo cliente</a>
            <a class="collapse-item" href="cliente-listado.php">Listado de clientes</a>
          </div>
        </div>
      </li>

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProductos" aria-expanded="true" aria-controls="collapseProductos">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Productos</span>
        </a>
        <div id="collapseProductos" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="producto-formulario.php">Nuevo producto</a>
            <a class="collapse-item" href="producto-listado.php">Listado de productos</a>
            <a class="collapse-item" href="tipoproducto-listado.php">Tipo de productos</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentas" aria-expanded="true" aria-controls="collapseVentas">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ventas</span>
        </a>
        <div id="collapseVentas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="venta-formulario.php">Nueva venta</a>
            <a class="collapse-item" href="venta-listado.php">Listado de ventas</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuario" aria-expanded="true" aria-controls="collapseUsuario">
          <i class="fas fa-fw fa-users"></i>
          <span>Usuarios</span>
        </a>
        <div id="collapseUsuario" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="usuario-formulario.php">Nuevo usuario</a>
            <a class="collapse-item" href="usuario-listado.php">Listado de usuarios</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">

      
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
   