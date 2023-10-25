<?php
    class Servicio_model extends CI_Model
    {
        public function listaServicios()
        {
            $this->db->select('idServicio, tipoServicio, descripcion, precioBase,
                                fechaRegistro, idUsuario');
            $this->db->from('servicios');
            $this->db->where('estado','1');
            return $this->db->get();
        }

        public function agregarServicio($data)
        {
            $this->db->insert('servicios',$data);
        }

        public function recuperarServicio($idServicio)
        {
            $this->db->select('*');
            $this->db->from('servicios');
            $this->db->where('idServicio',$idServicio);
            return $this->db->get();
        }

        public function modificarServicio($idServicio,$data)
        {
            $this->db->where('idServicio',$idServicio);
            $this->db->update('servicios',$data); 
        }

        public function deshabilitarServicio($idServicio,$data)
        {
            $this->db->where('idServicio',$idServicio);
            $this->db->update('servicios',$data); 
        }
    }
?>