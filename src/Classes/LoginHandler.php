<?php

namespace MusicRatings\Classes;

Class LoginHandler
{
    private $db;

    public function __construct(DbConnection $dbConnection) 
    {
        $this->db = $dbConnection;
    }

    public function checkCredentials(string $username, string $password) 
    {
        $db = $this->db->getDbConnection();
        $success = false;
        $query = $db->prepare("SELECT `password` FROM `users` WHERE `username` = :username;");
        $query->bindParam(':username', $username);
        if ($query->execute() === true) {
            $storedPassword = $query->fetch();
            var_dump($storedPassword);
            $success = password_verify($password, $storedPassword);
        }
        return $success;
    }
}