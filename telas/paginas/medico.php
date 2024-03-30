<?php
/*
    //Conexão com o Banco de Dados
    include_once('');
    //Criando uma query que trás todos os valores da tabela paciente
    $sql = "SELECT * FROM nome_tabela ORDER BY id DESC";
    $result = $conexao->query($sql);

    //Pesquisa na tabela
    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM nome_tabela WHERE campo_desejado LIKE '%$data%' ORDER BY id DESC";
        $result = $conexao->query($sql);
    }else{
        $sql = "SELECT * FROM nome_tabela ORDER BY id DESC";
    };
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Médicos</title>
    <link rel="stylesheet" href="../../css/paginas-css/style-paciente.css">
</head>
<body>
    <header>
        <h1>Med Software</h1>
        <nav class="menu">
            <a href="#">Início</a>
            <a href="#">Configurações</a>
        </nav>
    </header>
    <main>
        <section class="principal">
            <div class="botoes">
                <a href="#"><button>Novo Cadastro</button></a>
            </div>
            <!-- Tabela de informações trazidas do Banco de Dados -->
            <div class="container-tabela">
                <!-- Barra de Pesquisa -->
                <div class="box-search">
                    <input type="search" placeholder="Pesquisar" id="pesquisar">
                    <button onclick="SearchData()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </div>
                <table class="tabela">
                        <!-- Colunas -->
                        <tr class="titulo-coluna">
                            <td>Nome</td>
                            <td>Idade</td>
                            <td>Genero</td>
                            <td>Endereco</td>
                            <td>Ações</td>
                        </tr>
                        <tr>
                            <!-- Trazendo as informações de cada paciente para cada linha-->
                            <?php
                                while($user_data = $result -> fetch_array()){
                            ?>
                        </tr>
                        <tr>
                            <?php $user_data['id']; ?>
                            <td><?php echo $user_data['nome']; ?></td>
                            <td><?php echo $user_data['idade']; ?></td>
                            <td><?php echo $user_data['genero']; ?></td>
                            <td><?php echo $user_data['endereco']; ?></td>
                            <!--Botão Editar-->
                            <td>
                                <a href="../formularios/edit_medico.php" class="botao-edit">
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                    <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
                                    </svg>
                                </a>
                                <!--Botão Deletar-->
                                <a href="" class="botao-delet">
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <h2>Med Software</h2>
        <p>©️2024 Galerinha Corporation</p>
    </footer>
</body>
<script>
    var search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function(event){
        if (event.key === "Enter"){
            SearchData();
        }
    });
    function SearchData(){
        window.location = 'paciente.php?search='+search.value;
    }
</script>
</html>