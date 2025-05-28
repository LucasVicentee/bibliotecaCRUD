<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar livros</title>
</head>
<body>
    <nav id="barra-navegacao">
        <ul>
            <li><a href="#">Listar livros cadastrados</a></li>
            <li><a href="">Adicionar novo livro</a></li>
            <li><a href="#">Editar dados de um livro</a></li>
            <li><a href="#">Excluir livro do sistema</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Adicionar livro</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-adicionar-livro">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" class="input-field"><br>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" class="input-field"><br>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" class="input-field"><br>
            <label for="ano_publicacao">Ano de publicação:</label>
            <input type="date" name="ano_publicacao" id="ano_publicacao" class="input-field"><br>
            <label for="categoria">categoria:</label>
            <input type="text" name="categoria" id="categoria" class="input-field"><br>
            <input type="submit" value="Enviar" class="btn-submit">
        </form>

        <?php
        require_once "../../../dataBase.php";
        $localHost = 'localHost';
        $nomeBD = 'bibliotecacrud';
        $user = 'root';
        $senha = 'Co123456789';   

        $bd = new Database($localHost, $nomeBD, $user, $senha);
        $conexao = $bd->getConnection();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $ano_publicacao = $_POST['ano_publicacao'];
            $categoria = $_POST['categoria'];

            $bdBiblioteca = new DBBiblioteca($conexao);
            if ($bdBiblioteca->adicionarLivro($id, $titulo, $autor, $ano_publicacao, $categoria)){
                echo "Livro inserido com sucesso!. ";
            }
            else{
                echo "Errro ao inserir o livro!." ;
            }
        }
        ?>
    </div>  
</body>
</html>