<?php
    /* Basic template for ICSE Intranet project php files */
    /**
     * Created by PhpStorm.
     * User: Silverio
     * Date: 25/01/2017
     * Time: 9:01
     */
    require_once ('debug.php');
    $path = __DIR__.'/../models/Element.php';
    require_once ($path);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = 'ciclo';

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        $msg = "Connection failed: " . $conn->connect_error;
        show_alert($msg, 'danger');
    }

    function get_element_by_id ($id){
        $sql = "SELECT * FROM element WHERE id='".$id."'";
        $conn = $GLOBALS['conn'];
        $result = $conn->query($sql);
        if ($result->num_rows >0){
            $element_array = $result->fetch_assoc();
            return get_element_from_array ($element_array);
        }
        return null;
    }

    function get_element_from_array ($element_array){
        $element = new Element(
            $element_array['id'],
            $element_array['name'],
            $element_array['symbol'],
            $element_array['mass'],
            $element_array['element_group'],
            $element_array['period']
        );
        return $element;
    }
