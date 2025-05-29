<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BibliotecaCRUD/view/editarLivro/editarLivro.css">
    <title>Editar livro</title>
</head>
<body>
    <nav id="barra-navegacao">
        <ul>
            <li><a href="/BibliotecaCRUD/view/adicionarLivro/adicionarLivro.php">Adicionar novo livro</a></li>
            <li><a href="/BibliotecaCRUD/Controller/listarLivrosController.php">Listar livros cadastrados</a></li>
            <li><a href="#">Excluir livro do sistema</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Editar livro</h1>
        <form action="/BibliotecaCRUD/Controller/editarLivroController.php" method="POST">
            <input type="hidden" name="action" value="editar">
            <label for="id">ID:</label>
            <input type="number" name="id" id="id" class="input-field"><br>
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