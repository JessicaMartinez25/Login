<?php 
    class conexion {
        public $servidor = 'localhost';
        public $usuario = 'root';
        public $password= 'seguridad';
        public $database = 'login2024';
        public $port = 3306;


        public function conectar(){
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->database,
                $this->port
            );

        }
    }

?>