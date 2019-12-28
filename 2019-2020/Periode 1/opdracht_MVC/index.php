<?php
// Alle mogelijke errors laten zien
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set('display_startup_errors', 1);

// Van warnings errors maken
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    // error was suppressed with the @-operator
    if (error_reporting() === 0) {
        return false;
    }
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

require_once 'autoloader.php';

// Function om input op te schonen
function sanitizeArray($post_get)
{
    return array_map(function ($item) {
        return trim(htmlspecialchars($item));
    }, $post_get);
}

// Maak input veilig
$post = sanitizeArray($_POST);
$get = sanitizeArray($_GET);

// Analyseer querystring
$querystring = explode('&', $_SERVER['QUERY_STRING']);

// Start de juiste controller (nu maar 1)
$caught = false;
$c = new ShapeController($post);
try {
    $c->calculate();
} catch (Exception $e) {
    // Bij een error de error-pagina
    $result = ['error' => $e->getMessage()];
    include 'views/error.php';
    $caught = true;
}

// Geen problemen? Laat dan het resultaat zien in de juiste view.
if (!$caught) {
    $result = $c->getOutputData();
    include 'views/' . $c->getView() . '.php';
}
?>
