<?php        
    require_once "../Model/dataBase.php";

    $localHost = 'localHost';
    $nomeBD = 'bibliotecacrud';
    $user = 'root';
    $senha = 'Co123456789';

    $bd = new Database($localHost, $nomeBD, $user, $senha);   
    $conexao = $bd->getConnection();

    $bdBiblioteca = new DBBiblioteca($conexao);

    $editarLivro = $bdBiblioteca->editarLivro();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['id']) && !empty($_POST['titulo']) && !empty($_POST['autor']) && !empty($_POST['data_publicacao']) && !empty($_POST['categoria'])){
        $id = $_POST['id'];
        $titulo = $_POST['titutlo'];
        $autor = $_POST['autor'];
        $ano_publicacao = $_POST['ano_publicacao'];
        $categoria = $_POST['categoria'];

        if($bdBiblioteca->editarLivro($id, $titulo, $autor, $ano_publicacao, $categoria)){
            echo "<p>Dados do livro atualizados com sucesso!";
        }
        else{
            echo "Erro ao editar os dados do livro!";
        }
    }

    include '../view/editarLivro/editarLivro.php';
?>