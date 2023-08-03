<div class="container-fluid">
 <a href="<?php echo base_url(); ?>index.php/estudiante/indexlte">
   <button  type="button" class="btn btn-outline-primary"><img width="25" src="<?php echo base_url();?>adminlte/dist/img/inicio.jpg " ><br>VOLVER AL INICIO</button>
 </a>
</div>
<center> <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo base_url();?>adminlte/dist/img/camion.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/dist/img/proveedor2.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/dist/img/proveedor3.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/dist/img/proveedor4.jpg"     class="d-block w-15" alt="...">
            </div>
           
          </div></center>

 <br><br><br>


     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <style type="text/css">
        body{
            
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
            <h1>Lista de Proveedores</h1>
          </div>
        </center>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <a href="<?php echo base_url(); ?>index.php/estudiante/agregararproveedor">
                <button  type="button" class="btn btn-outline-primary"><img width="50" src="<?php echo base_url();?>adminlte/dist/img/camion.jpg " ><br>Agregar Datos del Proveedro</button>
            </a>
            

     <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>


                  <tr>

                    <th>No</th>
                    <th>Proveedor</th>
                    <th>Pais</th>
                    <th>Cantidad</th>
                    <th>Peso</th>
                    <th>Lote</th>
                    <th>Creacion</th>
                   
                   
                   
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