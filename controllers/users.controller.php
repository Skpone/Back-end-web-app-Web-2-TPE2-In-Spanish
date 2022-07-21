<?php
include_once 'models/users.model.php';
include_once 'views/users.view.php';
include_once 'helpers/auth.helper.php';

class UsersController
{
    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->authHelper = new AuthHelper();

        //check que solo admins esten logueados, sino redirecciona
        $this->authHelper->checkAdminLoggedIn();
    }

    public function showUsers()
    {
        $users = $this->model->getUsers();
        $this->view->showUsers($users);
    }

    public function changeUserAdmin($id, $admin)
    {
        $this->model->changeUserAdmin($id, $admin);

        $this->authHelper->reLoginIfNotAdmin();
    }

    public function deleteUser($id)
    {
        $this->model->deleteUser($id);

        header("Location: " . BASE_URL . "usersList");
    }
}
