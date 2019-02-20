<?php

    Class Conectar{

        public $conexion;
        public $nombre;
        public $comentario;

        function __construct($server, $usuario, $password, $db){
            $this->conexion = new mysqli($server, $usuario, $password, $db);
            if($this->conexion->connect_error){
                die('Error de Conexion ('.$this->conexion->connect_errno.')'.$this->conexion->connect_error);
			}

        }

        public function desconectar(){
            $this->conexion=null;
        }

        public function añadir_comentario($nombre, $comentario){
            $this->nombre=$nombre;
            $this->comentario=$comentario;
            $sql = "INSERT INTO comentario (nombre, comentario) VALUES('".$nombre."', '".$comentario."')";
            $resultado = $this->conexion->query($sql);
        }

        public function mostrar_comentarios(){
            $sql = "SELECT * FROM comentario";
            $resultado = $this->conexion->query($sql);
            return $resultado;

        }
    }


?>