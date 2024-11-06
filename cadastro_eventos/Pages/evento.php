<?php
    Class Evento
    {
        private $pdo;

        public $msgErro = "";

        public function conectar($nome, $host, $usuario, $senha)
        {
            global $pdo;

            try
            {
                $pdo = new PDO("mysql:dbname=".$nome, $usuario, $senha);
            }
            catch (PDOException $erro)
            {
                $msgErro = $erro->getMessage();
            }
        }
        public function cadastrar($nome, $descricao, $responsavel, $link, $descricao_atracao)
        {
            $sql = $pdo->prepare("INSERT INTO evento (nome, descricao, responsavel, link, descricao_evento) VALUES(:n,:d,:r,:l,:da)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":d",$descricao);
            $sql->bindValue(":r",$responsavel);
            $sql->bindValue(":l",$link);
            $sql->bindValue(":de",$descricao_evento);
            $sql->execute();
            return true;
        }

    }

?>