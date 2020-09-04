<?php
    class Conexao{
        private $user = "felipe";
        private $senha = "654321";
        private $conectado;

        public function Conexao($usuario, $senha){
            if($this->user == $usuario && $this->senha == $senha){
                echo "Conectado com sucesso!";
                $this->conectado = true;
            }else{
                echo "Login incorreto. Tente novamente";
                $this->conectado = false;
            }
        }
    }
?>