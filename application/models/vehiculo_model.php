<?php
    class Vehiculo_model extends CI_Model
    {
        public function listaVehiculos()
        {
            $this->db->select('idVehiculo, marca, modelo, anioFabricacion, matricula, color, kilometraje, 
                                fechaRegistro, idUsuario');
            $this->db->from('vehiculos');
            $this->db->where('estado','1');
            return $this->db->get();
        }

        public function agregarVehiculo($data)
        {
            $this->db->insert('vehiculos',$data);
        }

        public function recuperarVehiculo($idVehiculo)
        {
            $this->db->select('*');
            $this->db->from('vehiculos');
            $this->db->where('idVehiculo',$idVehiculo);
            return $this->db->get();
        }

        public function modificarVehiculo($idVehiculo,$data)
        {
            $this->db->where('idVehiculo',$idVehiculo);
            $this->db->update('vehiculos',$data); 
        }

        public function deshabilitarVehiculo($idVehiculo,$data)
        {
            $this->db->where('idVehiculo',$idVehiculo);
            $this->db->update('vehiculos',$data); 
        }
    }
?>