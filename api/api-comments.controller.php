<?php

require_once 'api/api.view.php';
require_once 'models/comments.model.php';

class ApiCommentsController{
    private $model;
    private $view;

    function __construct() {
        $this->model = new CommentsModel();
        $this->view = new ApiView();
    }

    private function getBody() {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }

    public function getComments($params = null) {
        $product = $params[':ID'];

        $comments = $this->model->getAllComments($product);
        $this->view->response($comments);
    }

    public function ordComments($params = null) {
        $product = $params[':ID'];
        $ord = $params[':ORD'];

        $comments = $this->model->getAllCommentsOrd($product, $ord);
        $this->view->response($comments);
    }

    public function filterCommentsByScore($params = null) {
        $product = $params[':ID'];
        $score = $params[':SCORE'];
        
        $comments = $this->model->getAllCommentsByScore($product, $score);
        $this->view->response($comments);
    }

    public function addComment() {
        $data = $this->getBody();

        $comment = $data->comment;
        $score = $data->score;
        $id_product_fk = $data->id_product_fk;
        $id_user_fk = $data->id_user_fk;

        $id = $this->model->insertComment($comment, $score, $id_product_fk, $id_user_fk);
        
        $comment = $this->model->getCommentByID($id);
        if ($comment) {
            $this->view->response($comment);
        } else {
            $this->view->response("Error creating comment", 500);
        }
    }

    public function deleteComment($params = null) {
        $id = $params[':ID'];

        $comment = $this->model->getCommentByID($id);
        
        if ($comment) {
            $this->model->deleteComment($id);
            $this->view->response("Comment id=$id removed successfully");
        } else {
            $this->view->response("Comment id=$id not found", 404);
        }
    }
}