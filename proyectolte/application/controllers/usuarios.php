
<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //linea de seguiridad que impide la ejecutacion del http

//nombre de la clase base.php
class Usuarios extends CI_Controller {

	//metodo 
	public function index()
	{
        

        if($this->session->userdata('login'))
        {
            redirect('usuarios/panel','refresh');
        }
        else
        {
        $data['msg']=$this->uri->segment(3);
        $this->load->view('login',$data);
        }
	}

    public function validarusuario()
    {
        $login= $_POST['login'];
        $password=md5($_POST['password']);

        $consulta=$this->usuario_model->validar($login,$password); 

        if($consulta->num_rows()>0) 
        {
            foreach ($consulta->result() as $row) {
                $this->session->set_userdata('idUsuario',$row->idUsiario);
                $this->session->set_userdata('login',$row->login);
                $this->session->set_userdata('tipo',$row->tipo);
                redirect('usuarios/panel','refresh');
            }
        }
        else
        {
           redirect('usuarios/index/1','refresh'); 
        }
    }


public function panel()
{
  if($this->session->userdata('login'))
        {
            $tipo=$this->session->userdata('tipo');
            if($tipo=='admin')
            {
                redirect('estudiante/indexlte','refresh');
            }
            else
            {
                redirect('estudiante/invitadolte','refresh');
            }
        }
        else
        {
        
            redirect('usuarios/index/2','refresh');
        }  
}

public function logout()
{
    $this->session->sess_destroy();
     redirect('usuarios/index/3','refresh');
}










    public function agregar()
    {
        //mostrar un formulario (vista) para agregar nuevo estudiante

         

        $this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
		$this->load->view('est_formulario');
		$this->load->view('inclte/pie');

    }

    public function agregarbd()
    {
        //atri. BD      |    formulario
        $data['producto']=$_POST['producto'];
        $data['precio']=$_POST['precio'];
       

        $this->estudiante_model->agregarestudiante($data);

        redirect('estudiante/index','refresh');
    }

    public function eliminarbd()
    {
        $idProducto=$_POST['idProducto'];
        $this->estudiante_model->eliminarestudianate($idProducto);
        redirect('estudiante/index','refresh');
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

        redirect('estudiante/index','refresh');
      
    }

    public function deshabilitarbd()
    {
        $idProducto=$_POST['idProducto'];
        $data['habilitado']='0';

        $this->estudiante_model->modificarestudiante($idProducto,$data);

        redirect('estudiante/index','refresh');

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
        $lista=$this->estudiante_model->listaestudiante();
        $data['productos']=$lista;

        $fechaprueba=formatearFecha('2023-06-21 15:42:40');
       $data['fechatest']=$fechaprueba;


        $this->load->view('inclte/cabecera');
        $this->load->view('inclte/menusuperior');
        $this->load->view('inclte/menulateral');
        $this->load->view('est_listalte',$data);
        $this->load->view('inclte/pie');
    }

}