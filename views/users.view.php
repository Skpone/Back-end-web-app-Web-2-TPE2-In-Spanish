<?php
include_once './libs/smarty-4.1.1/libs/Smarty.class.php';

class UserView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showUsers($users)
    {
        $this->smarty->assign('users', $users);
        $this->smarty->assign('title', 'Lista de usuarios registrados');

        $this->smarty->display('templates/tableUsers.tpl');
    }
}
