
<?php

    class Banco{
        private $host = 'localhost';
        private $user = 'root';
        private $dataBase = 'cadastro_pessoas';
        private $senha = '';

        public function conecta(){
            $conexao = mysqli_connect($this->host, $this->user, $this->senha, $this->dataBase);
            mysqli_set_charset($conexao, "UTF8");

            if(mysqli_connect_errno()){
                echo 'Erro na conexão do banco'.mysqli_connect_error();
            }
            return $conexao;
        }
    }
 

?>