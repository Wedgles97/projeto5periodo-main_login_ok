<?php

$GLOBALS['_DELETE'] = array();
$GLOBALS['_PUT'] = array();

if (!strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') && empty($_POST)) {
    $_POST = json_decode(file_get_contents('php://input', true)); 
}

if (!strcasecmp($_SERVER['REQUEST_METHOD'], 'DELETE')) {
    parse_str(file_get_contents('php://input'), $GLOBALS['_DELETE']);
}

if (!strcasecmp($_SERVER['REQUEST_METHOD'], 'PUT')) {
    parse_str(file_get_contents('php://input'), $GLOBALS['_PUT']);
}
