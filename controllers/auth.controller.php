<?php
include_once "models/users.model.php";
include_once "views/auth.view.php";
include_once "helpers/auth.helper.php";

class AuthController
{
    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new AuthView();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin()
    {
        $this->authHelper->checkLoggedOut();

        $this->view->showFormLogin();
    }

    public function showRegister()
    {
        $this->authHelper->checkLoggedOut();

        $this->view->showFormRegister();
    }
    public function login()
    {
        $this->authHelper->checkLoggedOut();

        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUser($email);

            if ($user && password_verify($password, $user->password)) {
                $this->authHelper->login($user);
                header("Location: " . BASE_URL);
            } else {
                $this->view->showFormLogin("usuario o contraseña inválidos");
            }
        }
    }

    public function register()
    {
        $this->authHelper->checkLoggedOut();

        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            //check si el user ya existe
            $user = $this->model->getUser($email);

            //si no existe ya uno
            if (!$user) {
                $this->model->insertUser($email,$password);
                //logueamos el user recien registrado
                $this->login();
            }else{
                $this->view->showFormRegister('éste email ya está registrado!');
            }
        }
    }

    public function logout()
    {
        $this->authHelper->logout();
    }
}
