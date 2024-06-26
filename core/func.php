<?php

function dump($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data)
{
    dump($data);
    die;
}
function abort($code = 404)
{
    http_response_code($code);
    require VIEWS . "/errors/{$code}.php";
}

function load($fillable = []) {
    $data = [];
    foreach ($_POST as $k => $v) {
        if(in_array($k, $fillable)) {
            $data[$k] = trim($v);
        }
    }
    return $data;
}

function old($fieldname) {
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($url = '') {
    if($url) {
        $redirect = $url;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ?? PATH;
    }
    header("Location:{$redirect}");
    die;
}
function getAlerts() {
    if(!empty($_SESSION['error'])) {
        require VIEWS . "/incs/allert-dangerous.php";
        unset($_SESSION['error']);
    }
    if(!empty($_SESSION['success'])) {
        require VIEWS . "/incs/allert-success.php";
        unset($_SESSION['success']);
    }
}