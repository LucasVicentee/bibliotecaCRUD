<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BibliotecaCRUD/view/adicionarLivro/adicionarLivro.css">
    <title>Listar livros</title>
</head>
<body>
    <nav id="barra-navegacao">
        <ul>
            <li><a href="/BibliotecaCRUD/Controller/listarLivrosController.php">Listar livros cadastrados</a></li>
            <li><a href="/BibliotecaCRUD/view/editarLivro/editarLivro.php">Editar dados de um livro</a></li>
            <li><a href="/BibliotecaCRUD/view/excluirLivro/excluirLivro.php">Excluir livro do sistema</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Adicionar livro</h1>
        <form action="../../Controller/adicionarLivroController.php" method="POST">
            <input type="hidden" name="action" value="adicionar">
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
        <button id="botao-voltar"><a href="/BibliotecaCRUD/">Voltar</a></button>
    </div>  
</body>
</html>