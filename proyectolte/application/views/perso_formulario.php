<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <style type="text/css">
        body{
            background-image: img src = "img/japi.jpg" ;
            background-color: beige;
            color: blue;
        }
    </style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Productos</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Por favor llene los campos para agregar el Producto Correspondiente</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
 <?php
        echo form_open_multipart('estudiante/agregarbd');
    ?>
                <input type="text" name="nombre" placeholder="Escriba el nombre del nuevo personal" class="form-control">

                <input type="text" name="apellido paterno" placeholder="Escriba el apellido paterno" class="form-control">
                <input type="text" name="apellido materno" placeholder="Escriba el apellido materno" class="form-control">
                <input type="text" name="edad" placeholder="Coloque la edad correspondiente" class="form-control">
                <input type="text" name="c.i." placeholder="Escriba el carnet identidad" class="form-control">
                <input type="text" name="cargo" placeholder="Coloque el cargo correspondiente" class="form-control">
               
                 
 
               
                <button type="submit" class="btn btn-outline-success">Agregar</button>

    <?php
        echo form_close();
    ?>

    <!--  </form>-->



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->