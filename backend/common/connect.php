<?php
class Database
{

    //credenziali di localhost
    private $server_local = "localhost";
    private $user_local = "root";
    private $passwd_local = "";
    private $db_local = "medicina";

    //common credentials
    private $port = "3306";
    public $conn;

    public function connect() //effettua la connessione 

    {
        try {
            $this->conn = new mysqli($this->server_local, $this->user_local, $this->passwd_local, $this->db_local, $this->port);
        }
        //la classe mysqli non estende l'interfaccia Throwable e non può essere usata come un'eccezione. 
        catch (Exception $ex) {
            die("Errore di connessione al database $ex\n\n");
        }
        return $this->conn;
    }
}

?>