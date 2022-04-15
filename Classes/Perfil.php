<?php
    class Perfil{
    protected $nome;
    protected $senha;
    protected $telefone;
    protected $email;

    public function setNome($d){
        $this->nome=$d;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function setSenha($d){
        $this->senha=$d;
    }
    public function getSenha(){
        return $this->Senha;
    }
    public function setTelefone($d){
        $this->telefone=$d;
    }
    public function getTelefone(){
        return $this->Telefone;
    }
    public function setEmail($d){
        $this->email=$d;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function adicionar(){
        $sql="INSERT INTO perfil(nome,senha,email,telefone) 
        VALUES(?,?,?)";

        try{
        $con=DB::conexao();
        $stmt=$con->prepare($sql);
        $stmt->bindParam(1, $this->getNome());
        $stmt->bindParam(2, $this->getTelefone());
        $stmt->bindParam(3, $this->getEmail());
        $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro no adicionar Perfil:".$e->getMessage();
        }
    }
    public static function listar( ){ 

    }
    public function atualizar( ){

    }
    public function excluir( ){ 

    }
}
?>