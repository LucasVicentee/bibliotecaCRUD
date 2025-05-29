<?php
    require_once "../Model/dataBase.php";
    
    $localHost = 'localHost';
    $nomeBD = 'bibliotecacrud';
    $user = 'root';
    $senha = 'Co123456789';   

    $bd = new Database($localHost, $nomeBD, $user, $senha);
    $conexao = $bd->getConnection();

    if (isset($_POST['action']) && $_POST['action'] === 'adicionar') {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $ano_publicacao = $_POST['ano_publicacao'];
            $categoria = $_POST['categoria'];

            $bdBiblioteca = new DBBiblioteca($conexao);
            if ($bdBiblioteca->adicionarLivro($titulo, $autor, $ano_publicacao, $categoria)){
                echo "Livro inserido com sucesso!. ";
            }
            else{
                echo "Errro ao inserir o livro!." ;
            }
        }
    }
    include '../view/adicionarLivro/adicionarLivro.php';
?>