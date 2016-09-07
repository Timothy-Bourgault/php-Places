<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/places.php";

    session_start();
    if (empty($_SESSION['list_of_places'])) {
        $_SESSION['list_of_places'] = array();
    }

    $app = new Silex\Application();

    $app->get("/", function() {

        $output = "";

        foreach (Place::getAll() as $place) {
            $output .= "<p>" . $place->getCity() . "</p>";
        }

        $output .= "
            <form action='/places' method='post'>
                <label for='city'>Enter City</label>
                <input id='city' name='city' type='text'>

                <button type='submit'>Add Place</button>
            </form>
        ";


    return $output;
    });





    return $app;
?>
