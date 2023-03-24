<?php

require __DIR__ . "/base.php";
require __DIR__ . " /../common/errorHandler.php";

set_exception_handler("errorHandler::handleException");
set_error_handler("errorHandler::handleError");

$table_name = "`user`";
class User extends BaseController
{
    public function getUser($id)
    {
        $sql = sprintf(
            "SELECT name, email
            FROM user
            WHERE id = %d;",
            $this->conn->real_escape_string($id)
        );

        $result = $this->conn->query($sql);

        $this->SendOutput($result, JSON_OK);
    }

    public function getArchiveUser(){
        $query = "SELECT u.name, u.surname, u.email
                from `user` u"; 
        
        $stmt = $this->conn->query($query);
    
        return $stmt;
    }

    public function login($email, $password)
    {
        $sql = sprintf("SELECT email, password, id
        FROM `user`
        where 1=1 ");
        $result = $this->conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($this->conn->real_escape_string($email) == $this->conn->real_escape_string($row["email"]) && $this->conn->real_escape_string($password) == $this->conn->real_escape_string($row["password"])) {
                return $this->conn->real_escape_string($row["id"]);
            }
        }

        return false;
    }

  
    public function getAutentication($id)
    {
        $sql = sprintf(
            "SELECT name
            FROM privileges
            WHERE user = %d;",
            $this->conn->real_escape_string($id)
        );

        $result = $this->conn->query($sql);

        $this->SendOutput($result, JSON_OK);
    }
   
}
?>