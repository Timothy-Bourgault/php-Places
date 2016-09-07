<?php
class Place
{
//Properties
    private $city;
    private $must_see;
    private $how_long;

//Constructor
    function __construct($city, $must_see = null, $how_long = 0)
    {
        $this->city = $city;
        $this->must_see = $must_see;
        $this->how_long = $how_long;
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

    function setMustSee($new_must_see)
    {
        $this->must_see = (string) $new_must_see;
    }

    function getMustSee()
    {
        return $this->must_see;
    }

    function setHowLong($new_how_long)
    {
        $this->how_long = (integer) $new_how_long;
    }

    function getHowLong()
    {
        return $this->how_long;
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
