<?php
include_once './libs/smarty-4.1.1/libs/Smarty.class.php';

class CountriesView
{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    public function showCountries($countries)
    {
        $this->smarty->assign('countries', $countries);
        $this->smarty->assign('title', 'Lista de países disponibles');

        $this->smarty->display('templates/listCountries.tpl');
    }
}