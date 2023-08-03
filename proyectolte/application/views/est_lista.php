<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
<script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
<style type="text/css">
        body{
            background-color: pink;
            color: blue;
        }
    </style>

<h1>BIENBENIDOS A NUESTRA PAGINA DE COMPRAS</h1><br>
<h2>SOLO COLACA EL NOMBRE DEL PRODUCTO Y EL PRECIO CORRESPONDIENTE</h2>
<div class="container">
        <div class="row">
            <div class="col-md-12">

            <a href="<?php echo base_url(); ?>index.php/estudiante/agregar">
                <button  type="button" class="btn btn-success">Crear Producto</button>
            </a>

            <a href="<?php echo base_url(); ?>index.php/estudiante/deshabilitados">
                <button type="button" class="btn btn-warning">Ver lista descartados</button>
            </a>

            <h1>Lista de Productos LTE</h1>

             <table class="table">
                <tr>
                    <td>N°</td>
                    <td>Producto</td>
                    <td>Precio</td>
                   
                    <td>Modificar</td>
                    <td>Eliminar</td>
                    <td>Deshabilitar</td>
                </tr>

                <?php
                    $indice=1;
                    foreach($productos->result() as $row)
                    {
                        ?>

                        <tr>
                            <td><?php echo $indice; ?></td>
                            <td><?php echo $row->producto; ?></td>
                            <td><?php echo $row->precio; ?></td>



                            <td>
                            <?php
        echo form_open_multipart('estudiante/modificar');
    ?>
       <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
       <button type="submit" class="btn btn-success">MODIFICAR</button>        

    <?php
        echo form_close();
    ?>                         
                            </td>



                             <td> 

    <?php
        echo form_open_multipart('estudiante/eliminarbd');
    ?>
       <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
       <button type="submit" class="btn btn-danger">ELIMINAR</button>        

    <?php
        echo form_close();
    ?>                                

                            </td>

<td>
<?php
        echo form_open_multipart('estudiante/deshabilitarbd');
    ?>
       <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
       <button type="submit" class="btn btn-primary">DESHABILITAR</button>        

    <?php
        echo form_close();
    ?>        
</td>

                        </tr>

                        <?php
                        $indice++;
                    }

                ?>

                
             </table>

        </div>

     </div>
</div>

<script src="<?php echo base_url();?>boos/js/bootstrap.bundle.min.js"></script>