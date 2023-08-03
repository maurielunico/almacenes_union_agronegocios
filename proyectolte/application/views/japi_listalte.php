<div class="container-fluid">
 <a href="<?php echo base_url(); ?>index.php/estudiante/indexlte">
   <button  type="button" class="btn btn-outline-primary"><img width="25" src="<?php echo base_url();?>adminlte/dist/img/inicio.jpg " ><br>VOLVER AL INICIO</button>
 </a>
</div>
<center> <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo base_url();?>adminlte/dist/img/logojapi.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/japiAd.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/dist/img/japicat.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/dist/img/japicach.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/japinatural.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/japisabores.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/japitrad.jpg"     class="d-block w-15" alt="...">
            </div>
          </div></center>

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
         <center><div class="col-sm-6">
           <h1>Lista de Productos</h1>
          </div>
         </center>
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
                <br>

              

                <br>
                <a href="<?php echo base_url(); ?>index.php/estudiante/agregar">
                <button  type="button" class="btn btn-outline-primary"><img width="25" src="<?php echo base_url();?>adminlte/dist/img/agregar.jpg " ><br>Crear Producto</button>
            </a>

           


            

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>


                 <tr>
                    <th>No</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Peso</th>
                    <th>Lote</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Nacionalidad</th>
                    <th>Fecha Entrada</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>

                      <td> <?php echo form_open_multipart('estudiante/modificar'); ?>
      
       <button type="submit" class="btn btn-outline-success"><img width="25" src="<?php echo base_url();?>adminlte/dist/img/editar.jpg " ></button>        

    <?php echo form_close(); ?>                      </td>

   <td> <?php echo form_open_multipart('estudiante/eliminarbd'); ?>
       
       <button type="submit" class="btn btn-outline-danger"><img width="25" src="<?php echo base_url();?>adminlte/dist/img/borrar.jpg " ></button>        

    <?php echo form_close(); ?>
  </td>
                 
                  </tbody>
                  
                </table>
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