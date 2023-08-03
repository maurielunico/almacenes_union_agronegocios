<div class="container-fluid">
 <a href="<?php echo base_url(); ?>index.php/estudiante/indexlte">
   <button  type="button" class="btn btn-outline-primary"><img width="25" src="<?php echo base_url();?>adminlte/dist/img/inicio.jpg " ><br>VOLVER AL INICIO</button>
 </a>
</div>
<center> <img width="500" src="<?php echo base_url();?>adminlte/dist/img/personal.jpg"   ></center><br>
 
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
          <h1>Lista de Personal UNION AGRONEGOCIOS</h1>
          </div>
         </center>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <a href="<?php echo base_url(); ?>index.php/estudiante/agregarpersonal">
                <button  type="button" class="btn btn-outline-primary"><img width="25" src="<?php echo base_url();?>adminlte/dist/img/negocio.jpg " ><br>Agregar Datos del Personal Nuevo</button>
            </a>

     <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>


                  <tr>

                    <th>No</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>C.I.</th>
                    <th>Cargo</th>
                    <th>Fecha de Contratacion</th>
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