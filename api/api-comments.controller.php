<?php

require_once 'api/api.view.php';
require_once 'models/comments.model.php';
require_once 'helpers/auth.helper.php';

class ApiCommentsController{
    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model = new CommentsModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
    }

    private function getBody() {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }

    public function getComments($params) {
        $product = $params[':ID'];

        $comments = $this->model->getAllComments($product);
        $this->view->response($comments);
    }

    public function ordComments($params) {
        $product = $params[':ID'];
        $ord = $params[':ORD'];

        $comments = $this->model->getAllCommentsOrd($product, $ord);
        $this->view->response($comments);
    }

    public function filterCommentsByScore($params) {
        $product = $params[':ID'];
        $score = $params[':SCORE'];
        
        $comments = $this->model->getAllCommentsByScore($product, $score);
        $this->view->response($comments);
    }

    public function addComment() {
        $user = $this->authHelper->obtainCurrentUser();
        if ($user) {
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
        }else{
            $this->view->response("Unauthorized, User or Admin must be signed in", 401);
        }
    }

    public function deleteComment($params) {
        $admin = $this->authHelper->obtainAdminState();
        if ($admin) {
            $id = $params[':ID'];

            $comment = $this->model->getCommentByID($id);
            
            if ($comment) {
                $this->model->deleteComment($id);
                $this->view->response("Comment id=$id removed successfully");
            } else {
                $this->view->response("Comment id=$id not found", 404);
            }
        }else{
            $this->view->response("Unauthorized, Admin must be signed in", 401);
        }
    }
}