<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BibliotecaCRUD/view/excluirLivro/excluirLivro.css">
    <title>Excluír Livro</title>
</head>
<body>
    <nav id="barra-navegacao">
        <ul>
             <li><a href="/BibliotecaCRUD/view/adicionarLivro/adicionarLivro.php">Adicionar novo livro</a></li>
            <li><a href="/BibliotecaCRUD/Controller/listarLivrosController.php">Listar livros cadastrados</a></li>
            <li><a href="/BibliotecaCRUD/view/editarLivro/editarLivro.php">Editar dados de um livro</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Excluir livro</h1>
        <form action="../../Controller/excluirLivroController.php" method="POST">
            <input type="hidden" name="action" value="excluir">
            <label for="id">Insira o ID do livro que seja excluir:</label>
            <input type="number" name="id" id="id" class="input-field"><br>
            <input type="submit" value="Enviar" class="btn-submit">
        </form>
        <button id="botao-voltar"><a href="/BibliotecaCRUD/">Voltar</a></button>
    </div>  
</body>
</html>