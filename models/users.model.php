<?php
class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_foods;charset=utf8', 'root', '');
    }

    function getUser($email)
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getUserByID($id)
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $query->execute([$id]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function insertUser($email, $password)
    {
        $query = $this->db->prepare('INSERT INTO users(id, email, password) VALUES (NULL, ?, ?)');
        $query->execute([$email,$password]);
    }

    function getUsers()
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();

        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function changeUserAdmin($id, $admin)
    {
        $query = $this->db->prepare('UPDATE `users` SET `admin` = ? WHERE `users`.`id` = ?');
        $query->execute([$admin, $id]);
    }

    function deleteUser($id)
    {
        $query = $this->db->prepare('DELETE FROM `users` WHERE `users`.`id` = ?');
        $query->execute([$id]);
    }
}
