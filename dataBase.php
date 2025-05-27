<?
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
}
?>