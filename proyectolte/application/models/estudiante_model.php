<?php

    class Estudiante_model extends CI_Model{
        public function listaestudiante()
        {
            $this->db->select('*');
            $this->db->from('productos');
         $this->db->where('habilitado','1');
            return $this->db->get();
        }

        public function listaestudiantedeshabilitado()
        {
            $this->db->select('*');
            $this->db->from('productos');
           $this->db->where('habilitado','0');
            return $this->db->get();
        }

        public function agregarestudiante($data)
        {
            $this->db->insert('productos',$data);
        }

        public function eliminarestudianate($idProducto)
        {
            $this->db->where('idProducto',$idProducto);
            $this->db->delete('productos');
        }

        public function recuperarestudiante($idProducto)
        {
           $this->db->select('*');
        $this->db->from('productos');
          $this->db->where('idProducto',$idProducto);
           return $this->db->get();
        }

        public function modificarestudiante($idProducto,$data)
        {
            $this->db->where('idProducto',$idProducto);
            $this->db->update('productos',$data);
        }

        public function agregardogfit()
        {
           // $this->db->insert('productos',$data);
        }

        public function eliminardogfit()
        {

        }
        public function modificardogfit()
        {
            
        }
         public function agregarfino()
        {
           // $this->db->insert('productos',$data);
        }

        public function eliminarfino()
        {

        }
        public function modificarfino()
        {
            
        }

         public function agregarproveedor()
        {
           // $this->db->insert('productos',$data);
        }

        public function eliminarproveedor()
        {

       }
        public function modificarproveedor()
        {
            
        }
         public function agregarpersonal()
        {
           // $this->db->insert('productos',$data);
        }

        public function eliminarpersonal()
        {

        }
        public function modificarpersonal()
        {
            
        }

         public function agregarsalida()
        {
           // $this->db->insert('productos',$data);
        }

        public function eliminarsalida()
        {

        }
        public function modificarsalida()
        {
            
        }
    }