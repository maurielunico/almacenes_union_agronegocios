<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
         <center> <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo base_url();?>adminlte/dist/img/logodog.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/DogAd.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/dist/img/DogCachorro.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/dist/img/DogRpm.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/Bessercach.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/BesserRpm.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/BesserCat.jpg"     class="d-block w-15" alt="...">
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
          <div class="col-sm-6">
            <h1>Lista de Productos</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <a href="<?php echo base_url(); ?>index.php/estudiante/agregardogfit">
                <button  type="button" class="btn btn-outline-primary">Crear Producto</button>
            </a>

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

                    

                </tbody>
                  <tfoot>
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
                  </tfoot>
                </table>
              </div>