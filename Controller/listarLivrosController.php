<?php        
    require_once "../Model/dataBase.php";

    $localHost = 'localHost';
    $nomeBD = 'bibliotecacrud';
    $user = 'root';
    $senha = 'Co123456789';

    $bd = new Database($localHost, $nomeBD, $user, $senha);   
    $conexao = $bd->getConnection();

    $bdBiblioteca = new DBBiblioteca($conexao);

    $listaLivros = $bdBiblioteca->listarLivros();

    if (!empty($listaLivros)) {
        echo "<ul id='lista-livros'>";
        foreach ($listaLivros as $livro){
            echo "<li class='li-cli'>ID: " . $livro['id'] . "<br>" . 
            "Titulo: " . $livro['titulo'] . "<br>" .
            "Autor: " . $livro['autor'] . "<br>" .
            "Data de publicação: " . $livro['ano_publicacao'] . "<br>" .
            "Categoria: " . $livro['categoria'] . "</li>";
        }
        echo "</ul>";
    }
    else{
        echo "<p>Nenhum livro foi encontrado!</p>";
    }

    include '../view/listarLivros/listarLivros.php';
?>