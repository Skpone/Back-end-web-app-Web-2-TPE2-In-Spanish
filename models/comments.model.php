<?php

class CommentsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_foods;charset=utf8', 'root', '');
    }

    function getAllComments($product)
    {

        $query = $this->db->prepare('SELECT a.id, b.email, a.comment, a.score, a.id_product_fk FROM comments a INNER JOIN users b ON a.id_user_fk = b.id WHERE id_product_fk = ?');
        $query->execute([$product]);

        $comments = $query->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }

    function getAllCommentsOrd($product, $ord)
    {
        $query = $this->db->prepare('SELECT a.id, b.email, a.comment, a.score, a.id_product_fk FROM comments a INNER JOIN users b ON a.id_user_fk = b.id WHERE id_product_fk = ? ORDER BY a.score ' . $ord);
        $query->execute([$product]);

        $comments = $query->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }

    function getCommentByID($id)
    {
        $query = $this->db->prepare('SELECT * FROM comments WHERE id = ?');
        $query->execute([$id]);

        $comment = $query->fetch(PDO::FETCH_OBJ);

        return $comment;
    }

    function insertComment($comment, $score, $product_fk, $user_fk)
    {
        $query = $this->db->prepare('INSERT INTO comments(comment, score, id_product_fk, id_user_fk) VALUES (?, ?, ?, ?)');
        $query->execute([$comment, $score, $product_fk, $user_fk]);

        return $this->db->lastInsertId();
    }

    function deleteComment($id)
    {
        $query = $this->db->prepare('DELETE FROM comments WHERE id=?');
        $query->execute([$id]);
    }
}