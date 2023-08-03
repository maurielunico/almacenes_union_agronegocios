<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //linea de seguiridad que impide la ejecutacion del http

//nombre de la clase base.php
class Estudiante extends CI_Controller {

	//metodo 
	public function index()
	{
        $lista=$this->estudiante_model->listaestudiante();
        $data['productos']=$lista;

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_lista',$data);
		$this->load->view('inc/pie');
	}
    public function japi_listalte()
    {
     $lista=$this->estudiante_model->listaestudiante();
        $data['productos']=$lista;
        $this->load->view('japi_listalte', $data);
    }

    public function dogfit_listalte()
    {
    
        $this->load->view('Dogfit_listalte');
    }
    public function fino_listalte()
    {
    
        $this->load->view('fino_listalte');
    }

     public function proveedor()
    {
    
        $this->load->view('proveedor');
    }
      public function premiunlte()
    {
    
        $this->load->view('premiunlte');
    }
      public function premiunespelte()
    {
    
        $this->load->view('premiunespelte');
    }
      public function superpremiunlte()
    {
    
        $this->load->view('superpremiunlte');
    }

public function personallte()
    {
    
        $this->load->view('personallte');
    }
    public function salidalte()
    {
    
        $this->load->view('salidalte');
    }
    public function ubicacionlte()
    {
    
        $this->load->view('ubicacionlte');
    }
     public function reportelte()
    {
    
        $this->load->view('reportelte');
    }

    


    public function subirfoto()
    {
        if($this->session->userdata('login'))
        {
       
        $data['idProducto']=$_POST['idProducto'];

        $this->load->view('inc/cabecera');
        $this->load->view('inc/menu');
        $this->load->view('subirform',$data);
        $this->load->view('inc/pie');
    }
    else
    {
        redirect('usuarios/index/2','refresh');
    }
    }

     public function subir()
    {
        if($this->session->userdata('login'))
        {
       
        $idProducto=$_POST['idProducto'];

        $nombrearchivo=$idProducto.".jpg";

        $config['upload_path']='./foto';
        $config['file_name']=$nombrearchivo;
        $direccion="./foto".$nombrearchivo;

        if(file_exists($direccion))
        {
            unlink($direccion);
        }
        
        $config['allowed_types']='jpg';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload())
        {
            $data['error']=$this->upload->display_errors();
        }
        else
        {
            $data['foto']=$nombrearchivo;
            $this->estudiante_model->modificarestudiante($idProducto,$data);
            $this->upload->data();
        }
        redirect('estudiante/indexlte','refresh');
        }
    else
    {
        redirect('usuarios/index/2','refresh');
    }
    }


    public function agregar()
    {
        //mostrar un formulario (vista) para agregar nuevo estudiante

         

        
		$this->load->view('est_formulario');
		

    }

    public function agregarbd()
    {
       // atri. BD      |    formulario
       $data['producto']=$_POST['producto'];
        $data['precio']=$_POST['precio'];
       

        $this->estudiante_model->agregarestudiante($data);

        redirect('estudiante/indexlte','refresh');
    }

    public function eliminarbd()
    {
        $idProducto=$_POST['idProducto'];
        $this->estudiante_model->eliminarestudianate($idProducto);
        redirect('estudiante/indexlte','refresh');
    }

    public function modificar()
    {
        $idProducto=$_POST['idProducto'];
        $data['infoestudiante']=$this->estudiante_model->recuperarestudiante($idProducto);

        $this->load->view('inc/cabecera');
        $this->load->view('inc/menu');
        $this->load->view('est_modificar',$data);
        $this->load->view('inc/pie');
    }

    public function modificarbd()
    {
        $idProducto=$_POST['idProducto'];

        $data['producto']=$_POST['producto'];
        $data['precio']=$_POST['precio'];
       

        $this->estudiante_model->modificarestudiante($idProducto,$data);

        redirect('estudiante/indexlte','refresh');
      
    }

    public function agregardogfit()
    {
       
        $this->load->view('dog_formulario');
        


    }

    public function modificardogfit()
    {

        
        $this->load->view('modificardogfit');


    }

    public function modificardogfitbd()
    {
       

    }

    public function eliminardogfit()
    {

    }

    public function agregarfino()
    {
       
        $this->load->view('fino_formulario');
        


    }

 public function modificarfino()
    {

    }

    public function modificarfinotbd()
    {

    }

    public function eliminarfino()
    {

    }

    public function agregarpersonal()
    {
       
        
        $this->load->view('perso_formulario');
      


    }

     public function modificarpersonal()
    {

    }

    public function modificarpersonalbd()
    {

    }

    public function eliminarpersonal()
    {

    }

    public function agregararproveedor()
    {
       
        $this->load->view('prov_formulario');
        

    }

     public function modificarproveedor()
    {

    }

    public function modificarproveedorbd()
    {

    }

    public function eliminarproveedor()
    {

    }

    public function agregarsalida()
    {
       
       
       
        $this->load->view('sali_formulario');
        


    }

     public function modificarsalida()
    {
         $this->load->view('modificarsalida');

    }

    public function modificarsalidabd()
    {
        
        $idProducto=$_POST['idProducto'];

        $data['producto']=$_POST['producto'];
        $data['precio']=$_POST['precio'];
       

        $this->estudiante_model->modificarestudiante($idProducto,$data);

        redirect('estudiante/indexlte','refresh');

    }

    public function eliminarsalida()
    {

    }


    public function deshabilitarbd()
    {
        $idProducto=$_POST['idProducto'];
        $data['habilitado']='0';

        $this->estudiante_model->modificarestudiante($idProducto,$data);

        redirect('estudiante/indexlte','refresh');

    }

    public function deshabilitados()
	{
        $lista=$this->estudiante_model->listaestudiantedeshabilitado();
        $data['producto']=$lista;

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_listadeshabilitado',$data);
		$this->load->view('inc/pie');
	}

    public function habilitarbd()
    {
        $idProducto=$_POST['idProducto'];
        $data['habilitado']='1';

        $this->estudiante_model->modificarestudiante($idProducto,$data);

        redirect('estudiante/deshabilitados','refresh');

    }
   

    public function indexlte()
    {
        if($this->session->userdata('login'))
        {
            

        $fechaprueba=formatearFecha('2023-06-21 15:42:40');
       $data['fechatest']=$fechaprueba;


        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('est_listalte');
        $this->load->view('inclte/pie');
        }
        else
        {
        
            redirect('usuarios/index/2','refresh');
        } 


    }

    public function invitadolte()
    {
      if($this->session->userdata('login'))
        {

        $this->load->view('inclte2/cabecera');
        $this->load->view('inclte2/menusuperior');
        $this->load->view('inclte2/menulateral');
        $this->load->view('est_invitado');
        $this->load->view('inclte2/pie');
        }
        else
        {
        
            redirect('usuarios/index/2','refresh');
        } 


  
    }


   public function japi2_listalte()
    {
     $this->load->view('japi2_listalte');
    }

    public function dogfit2_listalte()
    {
    
        $this->load->view('Dogfit2_listalte');
    }
    public function fino2_listalte()
    {
    
        $this->load->view('fino2_listalte');
    } 

    public function salida2_listalte()
    {
    
        $this->load->view('fino2_listalte');
    } 

    public function proveedor2_listalte()
    {
    
        $this->load->view('proveedor2_listalte');
    } 

    public function personal2_listalte()
    {
    
        $this->load->view('fino2_listalte');
    } 

}
