<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
   
   
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Kdam+Thmor+Pro&family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <title>Bienbenido a Union Agronegocios</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
 <link rel="stylesheet" href="<?php echo base_url();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url();?>adminlte/dist/css/adminlte.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <style type="text/css">
        body{
            
            background-color: blue;
            color: blue;
        }
    </style>

 <center> <img src="<?php echo base_url();?>adminlte/dist/img/union.png"   style="opacity: .9"></center>
 <br><br>

  <div class="login-logo">
     <h1>Bienvenido </h1>
    
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <?php

      switch ($msg)
      {
        case '1';
        $mensaje="ERROR DE INGRESO";
        $clase="primary";
        break;
        case '2';
        $mensaje="ACCESO NO VALIDO";
        $clase="danger";
        break;
        case '3';
        $mensaje="GRACIAS POR USAR EL SISTEMA ";
        $clase="warning";
        break;
        default:
        $mensaje="INGRESE SU USUARIO Y CLAVE PARA INICIAR SESION";
        $clase="primary";
        break;
      } 
        

      ?>


      <p class="login-box-msg text-<?php echo $clase; ?>"><?php echo $mensaje; ?></p>





<?php

echo form_open_multipart('usuarios/validarusuario', array('id'=>'form1','class'=>'needs-validation','method'=>'post'));



?>


        <div class="input-group mb-3">

          <input type="text" class="form-control" placeholder="Login" name="login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
    <?php

    echo form_close();


    ?>






      
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>