<?php
class CountriesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_foods;charset=utf8', 'root', '');
    }
    function getAllCountries(){
        $query = $this->db->prepare('SELECT * FROM countries');
        $query->execute();

        $countries = $query->fetchAll(PDO::FETCH_OBJ);
        return $countries;
    }

    function getCountryByID($id)
    {
        $query = $this->db->prepare('SELECT * FROM countries WHERE id = ?');
        $query->execute([$id]);
        $country = $query->fetch(PDO::FETCH_OBJ);
        return $country;
    }

    function insertCountry($name)
    {
        $query = $this->db->prepare('INSERT INTO countries(country) VALUES (?)');
        $query->execute([$name]);
    }

    function modifyCountry($id, $name)
    {
        $query = $this->db->prepare('UPDATE countries SET country = ? WHERE id = ?');
        $query->execute([$name, $id]);
    }
}