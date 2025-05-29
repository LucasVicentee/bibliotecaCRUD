<?php        
    require_once "../Model/dataBase.php";

    $localHost = 'localHost';
    $nomeBD = 'bibliotecacrud';
    $user = 'root';
    $senha = 'Co123456789';

    $bd = new Database($localHost, $nomeBD, $user, $senha);   
    $conexao = $bd->getConnection();

    $bdBiblioteca = new DBBiblioteca($conexao);

    if(isset($_POST['action']) && $_POST['action'] === 'excluir') {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['id'])) {
            $id = $_POST["id"];

            if($bdBiblioteca->excluirLivro($id)){
                echo "<p>O livro foi excluído com sucesso!</p>";
            }
            else{
                echo "<p>Livro não encontrado</p>";
            }
        }
    }

    include '../view/excluirLivro/excluirLivro.php';
?>