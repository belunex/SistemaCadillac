<?php
    class Usuarios_model extends CI_Model{

        public function validarIngresoAdmin($login,$password)
        {
            $this->db->select('id, CONCAT(nombres," ",primerApellido," ",IFNULL(segundoApellido,"")) AS nameUser,
                                nombreUsuario, fechaRegistro, rolUsuario');
            $this->db->from('usuarios');
            $this->db->where('nombreUsuario',$login);
            $this->db->where('contrasenia',$password);
            $this->db->where('estado','1');
            return $this->db->get();
        }

/*-------------------------------------------------------------------------------------------------*/        

        public function listaUsuarios()
        {
            $this->db->select('id, CONCAT(nombres,primerApellido,segundoApellido) AS Usuarios,ci,
                                fechaContratacion,numeroTelefono,direccion,correoElectronico,
                                nombreUsuario,rolUsuario,fechaRegistro,idUsuario');
            $this->db->from('usuarios');
            $this->db->where('id <>',$this->session->userdata('idUsuario'));
            $this->db->where('estado','1');
            return $this->db->get();
        }

        public function insertarUsuario($data)
        {
            $this->db->insert('usuarios',$data);
        }

        public function recuperarUsuario($idUsuario)
        {
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->where('id',$idUsuario);
            return $this->db->get();
        }

        public function modificarUsuario($idUsuario,$data)
        {
            $this->db->where('id',$idUsuario);
            $this->db->update('usuarios',$data);
        }
    }
?>