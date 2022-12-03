
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->

  <?php
  mostrarPerfil();
  ?>
  

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a  class="nav-link active">
        <i class="bi bi-people-fill"></i>
          <p>
            Usuarios
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="RegistrarUser.php" class="nav-link">
            <i class="bi bi-check2-square"></i>
              <p>Registrar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="VerUsers.php" class="nav-link">
            <i class="bi bi-eye-fill"></i>
              <p>Ver</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link active">
        <i class="bi bi-cart-fill"></i>
          <p>
            Productos
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="RegistrarProductosAdmin.php" class="nav-link">
            <i class="bi bi-check2-square"></i>
              <p>Registrar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="verProductosAdmin.php" class="nav-link">
            <i class="bi bi-eye-fill"></i>
              <p>Ver</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link active">
        <i class="bi bi-cart-check-fill"></i>
          <p>
            Pedidos
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="verPedidos.php" class="nav-link">
            <i class="bi bi-eye-fill"></i>
              <p>Ver</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>