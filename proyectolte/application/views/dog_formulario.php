<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
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
                <h3 class="card-title">Rellene los campos para crear su producto DogFit</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
 <?php
        echo form_open_multipart('estudiante/agregarbd');
    ?>
                <input type="text" name="producto" placeholder="Escriba el producto" class="form-control">

                <input type="text" name="cantidad" placeholder="Escriba la cantidad" class="form-control">
                <input type="text" name="peso" placeholder="Escriba el peso" class="form-control">
                <input type="text" name="lote" placeholder="Escriba el lote correspondiente" class="form-control">
                 <input type="text" name="fecha vencimineto" placeholder="Escriba la fecha de vencimineto" class="form-control">
               
               
                <input type="text" name="nacionalidad" placeholder="Escriba la nacionalidad" class="form-control">
                 
               
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