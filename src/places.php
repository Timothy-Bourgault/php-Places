<?php
class Place
{
//Properties
    private $city;

//Constructor
    function __construct($city)
    {
        $this->city = $city;
    }

//Getter and Setter Methods
    function setCity($new_city)
    {
        $this->city = (string) $new_city;
    }

    function getCity()
    {
        return $this->city;
    }

//General Methods
    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }


//Static Methods
    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }


}
?>
