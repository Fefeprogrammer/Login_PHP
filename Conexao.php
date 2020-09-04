<?php
    class Conexao{
        private $email = "felipe@felipe.com";
        private $senha = "123456";
        private $conectado;

        function Conexao($email, $senha){
            if($this->email == $email && $this->senha == $senha){
                echo "Conexão estabelecida";
                echo "<br>Seu e-mail é $this->email e sua senha é $this->senha";
                $conectado = true;
            }else{
                echo "Login incorreto!";
                $conectado = false;
            }
        }

        public function getConectado(){
            return $this->conectado;
        }

        public function setConectado($conectado){
            $this->conectado = $conectado;
        }
    }  
?>