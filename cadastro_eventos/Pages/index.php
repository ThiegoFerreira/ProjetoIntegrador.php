<?php
require_once 'evento.php';
$evento = new Evento();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eventos</title>
    <link rel="stylesheet" href="../CSS/style-index.css">
</head>

<body>
    <header class="menu-adm">
        <div class="logo">
            <img src="../Images/logo.png" alt="Logo da Feira" class="img-logo">
        </div>

        <nav class="nav-bar">
            <ul class="nav-list">
                <li class="nav-item"><a href="#">Área Administrativa</a></li>
                <li class="nav-item"><a href="#">Eventos</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">Cadastrar Evento</a></li>
                        <li><a href="" class="item-submenu">Gerenciar Evento</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Expositores</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">Cadatrar Expositor</a></li>
                        <li><a href="" class="item-submenu">Cadatrar expositor kids</a></li>
                        <li><a href="" class="item-submenu">Cadatrar artista</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Carrossel</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">cadastrar Carrosel</a></li>
                        <li><a href="" class="item-submenu">Editar Carrosel</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Categorias</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">Todas Categorias</a></li>
                        <li><a href="" class="item-submenu">cadastrar Categorias</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Relatórios</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">relatório de usuarios</a></li>
                        <li><a href="" class="item-submenu">validação de expositores</a></li>
                        <li><a href="" class="item-submenu">relatório de expositores</a></li>
                        <li><a href="" class="item-submenu">relatório de eventos</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Parceiros</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">cadastrar parceiros</a></li>
                        <li><a href="" class="item-submenu">editar parceiros</a></li>
                    </ul>
                </li>
            </ul>

            <button class="btn-login"><a href="">Login</a></button>
        </nav>

        <div class="sandwich-menu" onclick="menuShow()">
            <img src="../Images/menu.png" alt="menu" class="menu">
        </div>

        <div class="login">
            <img src="../Images/login.png" alt="Botão de login" class="img-login">
        </div>
    </header>


    <main class="principal">
        <div class="box">
            <h2>CADASTRO DE EVENTOS</h2>
            <div class="form-box">
                <form action="#" method="post">
                    <div class="input-group">
                        <label>Nome do evento:</label>
                        <input type="text" name="nome" id="nomedoevento" placeholder="Digite o nome do evento"
                            required>
                    </div>
                    <div class="input-group">
                        <label>Data do evento:</label>
                        <div class="modal">
                            <input type="date" name="datadoevento" id="dia" placeholder="Dia" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <label>Descrição do evento:</label>
                        <input type="text" name="descricao" id="descricaodoevento"
                            placeholder="Digite uma breve descrição do evento" required>
                    </div>
                    <div class="input-group">
                        <label>Responsável pelo evento:</label>
                        <input type="text" name="responsavel" id="esponsavelpeloevento"
                            placeholder="Digite o nome do responsável pelo evento" required>
                    </div>
                    <div class="input-group">
                        <label>Link externo:</label>
                        <input type="text" name="link" id="link" placeholder="Digite um link de redirecionamento"
                            required>
                    </div>
                    <div class="input-group">
                        <label>Descrição da atração:</label>
                        <input type="text" name="descricao_atracao" id="descricaodaatracao"
                            placeholder="Digite uma breve descrição">
                    </div>
                </form>
                <div class="bottoms-box">
                    <div class="bottoms-group">
                        <label>Banner do Evento:</label>
                        <button id="uploadevento"><img id="banner" src="../Images/Upload de imagens.png"
                                alt=""></button>
                        <button class="alterarimagem">ALTERAR IMAGEM</button>
                    </div>
                    <div class="bottoms-group">
                        <label>Banner Atrações:</label>
                        <button id="uploadatracao"><img id="banner" src="../Images/Upload de imagens.png"
                                alt=""></button>
                        <button class="alterarimagem">ALTERAR IMAGEM</button>
                    </div>
                    <div class="bottoms-group">
                        <div class="add-group">
                            <button id="add"> <img src="../Images/Group 442.png" alt=""></button>
                            <button id="add"> <img src="../Images/Group 442.png" alt=""></button>
                            <button id="add"> <img src="../Images/Group 442.png" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btns">
                <a href="" class="voltar">
                    <img src="../Images/btn-voltar.png" alt="Botão de voltar" class="btn-voltar">
                </a>

                <div class="btn-cancelar-salvar">
                    <button class="btn btn-cancelar">
                        <a href="">Cancelar</a>
                    </button>

                    <button class="btn btn-salvar" type="submit">
                        <a href="">Salvar</a>
                </div>
            </div>
        </div>
        </div>


    </main>

    <div class="bolas-fundo">
        <img src="../Images/bola-verde1.png" alt="Bola Fundo 1" class="bola-verde1">
        <img src="../Images/bola-verde2.png" alt="Bola Fundo 2" class="bola-verde2">
        <img src="../Images/bola-rosa.png" alt="Bola Fundo 3" class="bola-rosa">
    </div>

    <script src="../JS/main.js"></script>

    <?php
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $responsavel = $_POST['responsavel'];
            $link = $_POST['link'];
            $descricao_atracao = $_POST['descricao_atracao'];

            if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confSenha))
            {
                $evento->conectar("bosquedapaz","localhost","root","");
                if($evento->msgErro == "")
                {
                    if($usuario->cadastrar($nome, $descricao, $responsavel, $link, $descricao))
                    {
                        ?>

                            <!-- bloco de HTML -->
                            <div class="msg-sucesso">
                                <p>Cadastrado com Sucesso</p>
                                <p>Clique <a href="login.php">aqui</a>para logar.</p>
                            </div>

                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="msg_erro">
                            <p>Email já cadastrado.</p>
                        </div>
                        <?php 
                    }
                }
                else
                {
                    ?>
                        <div class="msg-erro">
                            <?php echo "Erro: ".$usuario->msgErro?>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div class="msg-erro">
                        <p>Preencha todos os campos.</p>
                    </div>
                <?php
            }
        
        }
    ?>
    
    
    
    
    
    
    ?>
</body>

</html>