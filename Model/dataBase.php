<?php

class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $DBconn;

    public function __construct($servidor, $nomeBanco, $usuario, $senha) {
        $this->host = $servidor;
        $this->db_name = $nomeBanco;
        $this->username = $usuario;
        $this->password = $senha;
        $this->DBconn = $this->getConnection();
    }

    public function getConnection() {
        try {
            $conexao = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro com a conexão do banco de dados: " . $e->getMessage();
        }

        return $conexao;
    }
}

class DBBiblioteca {
    private $conexao;
    private $tableName = 'biblioteca';

    public function __construct($conexaoBD) {
        $this->conexao = $conexaoBD;
    }

    public function listarLivros() {
        $query = "SELECT * FROM " . $this->tableName;
        try {
            $result = $this->conexao->prepare($query);
            $result->execute();
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        } catch (PDOException $e) {
            echo "Erro ao listar os livros: " . $e->getMessage();
        }
    }

    public function adicionarLivro($titulo, $autor, $ano_publicacao, $categoria) {
        $query = "INSERT INTO " . $this->tableName . " (titulo, autor, ano_publicacao, categoria) 
                  VALUES (:titulo, :autor, :ano_publicacao, :categoria)";

        try {
            $result = $this->conexao->prepare($query);

            $result->bindParam(':titulo', $titulo);
            $result->bindParam(':autor', $autor);
            $result->bindParam(':ano_publicacao', $ano_publicacao);
            $result->bindParam(':categoria', $categoria);

            if ($result->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro PDO: " . $e->getMessage();
        }
    }

    public function editarLivro($id, $titulo, $autor, $ano_publicacao, $categoria){
        $query = ' UPDATE ' . $this->tableName . " SET titulo = :titulo, autor = :autor, ano_publicacao = :ano_publicacao, categoria = :categoria WHERE id = :id";

        try{
            $result = $this->conexao->prepare($query);

            $result->bindParam(":id", $id);
            $result->bindParam(":titulo", $titulo);
            $result->bindParam(":autor", $autor);
            $result->bindParam(":ano_publicacao", $ano_publicacao);
            $result->bindParam(":categoria", $categoria);

            $result->execute();

            if($result->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }
        catch(PDOException $e){
                echo "Erro ao atualizar o Livro!" . $e->getMessage();
        }
    }
}
?>