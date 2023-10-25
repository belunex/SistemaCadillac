<?php
    class Cliente_model extends CI_Model
    {
        public function listaClientes()
        {
            $this->db->select('idCliente,CONCAT(primerApellido," ",IFNULL(segundoApellido,"")," ",nombres) AS Cliente,
                                numeroTelefono, correoElectronico, fechaRegistro, idUsuario');
            $this->db->from('clientes');
            $this->db->where('estado','1');
            return $this->db->get();
        }

        public function agregarCliente($data)
        {
            $this->db->insert('clientes',$data);
        }

        public function recuperarCliente($idCliente)
        {
            $this->db->select('*');
            $this->db->from('clientes');
            $this->db->where('idCliente',$idCliente);
            return $this->db->get();
        }

        public function modificarCliente($idCliente,$data)
        {
            $this->db->where('idCliente',$idCliente);
            $this->db->update('clientes',$data); 
        }

        public function deshabilitarCliente($idCliente,$data)
        {
            $this->db->where('idCliente',$idCliente);
            $this->db->update('clientes',$data); 
        }
    }
?>