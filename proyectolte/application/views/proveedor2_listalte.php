 <center> <img src="<?php echo base_url();?>adminlte/dist/img/alimento.jpg"   style="opacity: .9"></center>

 <br><br><br>


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
            <center><h1>Lista de Proveedores</h1></center>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <a href="<?php echo base_url(); ?>index.php/estudiante/agregararproveedor">
                <button  type="button" class="btn btn-outline-primary">Agregar Datos del Proveedro</button>
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
                    <th>Creacion</th>
                   
                   
                   
                  </tr>
                  </thead>
                  <tbody>


                </tbody>
                 
                </table>
              </div>