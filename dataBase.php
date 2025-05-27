<?

use LDAP\Result;
class database {
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

    public function getConnection(){
        try{
            $conexao = new PDO("mysql:host={$this->host};dbname={$this->host}",$this->username, $this->password);
        }
        catch(PDOException $e){
            echo "Erro com a conexão do banco de dados." . $e->getMessage();
        }

        return $conexao;
    }

    public function listarLivros(){
        $query = "SELECT * FROM " . $this->tableName;
        try {
            $result = $this->conexao->prepare($query);
            $result->excute();

            $dados = $result->fetchALL(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo "Erro ao listrar os livros. " . $e->getMessage();
        }
    }
}
?>