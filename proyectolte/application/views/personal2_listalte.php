<center> <img src="<?php echo base_url();?>adminlte/dist/img/personal.jpg"   style="opacity: .9"></center><br>
 
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
            <h1>Lista de Personal UNION AGRONEGOCIOS</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <a href="<?php echo base_url(); ?>index.php/estudiante/agregarpersonal">
                <button  type="button" class="btn btn-outline-primary">Agregar Datos del Personal Nuevo</button>
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

                   


                </tbody>
                  <tfoot>
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
                  </tfoot>
                </table>
              </div>