
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <style type="text/css">
        .main-sidebar{
            
            background-color: darkgoldenrod;   
        }
    </style>
    <!-- Brand Logo -->
    <a   class="brand-link"  >
      <img src="<?php echo base_url();?>adminlte/dist/img/union.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .6">
      <span  class="brand-text font-weight-light">Union<br> Agronegocios</span>
      <style type="text/css">
        .font-ligth{
        
          background-color: red;
        }
      </style>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
    
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>adminlte/dist/img/chelo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">Mauricio Orellana Hinojosa</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
        
               
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Personal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/estudiante/personallte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Empleados</p>
                </a>
              </li>
              
            </ul>
          </li>
          
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
               Nuestras Marcas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/estudiante/premiunlte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calidad Premiun</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/estudiante/premiunespelte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calidad Premiun Especial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/estudiante/superpremiunlte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calidad Super Premiun</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reportes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/estudiante/reportelte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte General</p>
                </a>
              
            </ul>
          </li>
         <!-- <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/estudiante/ubicacionlte" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                ubicacion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>-->
           
          <li class="nav-item">
            <a  class="nav-link">
              <i class="nav-icon fas fa-paw"></i>
              <p>
              Control de Producto
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/estudiante/fino_listalte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entrada de Producto SUPER PREMIUN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/estudiante/dogfit_listalte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entrada de Producto PREMIUN ESPECIAL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/estudiante/japi_listalte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entrada de Producto PREMIUN</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/estudiante/salidalte" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
               Salida de Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              
            </ul>
          </li>

         
          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/estudiante/Proveedor" class="nav-link">
              <i class="nav-icon fas fa-store-alt-slash"></i>
              <p>
               Proveedor
              </p>
            </a>
          </li>
         
            
              
             
              
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>