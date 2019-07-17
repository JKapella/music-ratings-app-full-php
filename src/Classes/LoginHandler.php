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
        $success = false;
        $query = $this->db->prepare("SELECT `password` FROM `users` WHERE `username` = :username;");
        $query->bindParam(':username', $username);
        if ($query->execute() === true) {
            $storedPassword = $query->fetchAll();
            $success = password_verify($password, $storedPassword);
        }
        return $success;
    }
}