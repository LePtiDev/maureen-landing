<?php
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set("display_errors", 1);

setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
date_default_timezone_set('Europe/Paris');

if(!empty($_GET['utm_source'])) {
    $utm = array();
    $utm['utm_source'] = $_GET['utm_source'];
    $utm['utm_medium'] = $_GET['utm_medium'];
    $utm['utm_campaign'] = $_GET['utm_campaign'];
    $utm['utm_content'] = $_GET['utm_content'];
    $_SESSION['tracking'] = $utm;
}



spl_autoload_extensions('.php');
spl_autoload_register('autoloader');

function autoloader($className) {
    if(file_exists('controllers/' . $className . '.php')){
        include('controllers/' . $className . '.php');
        return true;
    }
    elseif(file_exists('models/' . $className . '.php')){
        include('models/' . $className . '.php');
        return true;
    }
    elseif(file_exists('includes/services/' . $className . '.php')){
        include('includes/services/' . $className . '.php');
        return true;
    }
    elseif(file_exists('../controllers/' . $className . '.php')){
        include('../controllers/' . $className . '.php');
        return true;
    }
    elseif(file_exists('../models/' . $className . '.php')){
        include('../models/' . $className . '.php');
        return true;
    }
    elseif(file_exists('../includes/services/' . $className . '.php')){
        include('../includes/services/' . $className . '.php');
        return true;
    }
    else {
        return false;
    }
}