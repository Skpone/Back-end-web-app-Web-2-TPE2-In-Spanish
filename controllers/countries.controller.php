<?php
include_once 'models/countries.model.php';
include_once 'views/countries.view.php';
include_once 'helpers/auth.helper.php';

class CountriesController
{
    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new CountriesModel();
        $this->view = new CountriesView();
        $this->authHelper = new AuthHelper();

        //check que solo admins esten logueados, sino redirecciona
        $this->authHelper->checkAdminLoggedIn();
    }

    public function showCountries()
    {
        $countries = $this->model->getAllCountries();
        $this->view->showCountries($countries);
    }

    public function addCountry($name)
    {   
        $this->model->insertCountry($name);
        $this->showCountries();
    }

    public function modifyCountry($id, $name)
    {   
        $country = $this->model->getCountryByID($id);

        if($country){
            $this->model->modifyCountry($id, $name);
            $this->showCountries();
        }
    }
}