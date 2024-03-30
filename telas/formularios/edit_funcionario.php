<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
    <link rel="stylesheet" href="../../css/formularios-css/funPacMed.css">
</head>
<body>
<!--CABEÇALHO -->
<header>
    <h1>Med Software</h1>
    <nav class="menu">
        <a href="#">Início</a>
        <a href="#">Configurações</a>
    </nav>
</header>
<!--CABEÇALHO -->


<!--PRINCIPAL -->
<main>
<div class="login-container">
<div class="form-container">
    <h2>Editar Funcionário</h2>
    <p class="subtitle">Atualize as informações</p>
    <br>

    <form class="form" action="" method="">
            <!--SEPARANDO OS CAMPOS DO BOTAO DE ENVIAR DADOS-->
            <div class="container-extra">
                <!--NOME-->
                <div>
                    <p>Nome completo:</p>
                    <input type="text" name="nome" id="nome" placeholder="Nome completo">
                </div>
                <!--IDADE-->
                <div>
                    <p>Idade</p>
                    <input type="number" name="idade" id="idade" placeholder="Idade" >
                </div>
                <!-- GÊNERO -->
                <div>
                    <P>Gênero:</P>
                    <input type="radio" id="masculino" name="genero" value="Masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="feminino" name="genero" value="Feminino">
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="outro" name="genero" value="Outro">
                    <label for="outro">Outro</label>
                </div>
                <!---ENDEREÇO-->
                <div>
                    <p>Endereço:</p>
                    <input type="text"  name="endereco" id="endereco"  placeholder="Endereço">
                </div>
            </div>
        <!--botão--> 
        <input type="submit" name="submit" class="submit" id="submit" value="Enviar"></input>
    </form>

</div>

</div>
</main>
<!--PRINCIPAL -->

<!--RODAPÉ -->
<footer>
<h2>Med Software</h2>
<p>©️2024 Galerinha Corporation</p>
</footer>
<!--RODAPÉ -->

</body>
</html>
