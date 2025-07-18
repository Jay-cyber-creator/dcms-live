<?php
$uri = $_GET['uri'] ?? "home";

switch ($uri) {
    case 'home':
        include 'frontend/views/pages/home.php';
        break;
    case 'patient-login':
        include 'frontend/views/pages/patient-login.php';
        break;
    case 'patient-register':
        include 'frontend/views/pages/patient-register.php';
        break;
    default:
        http_response_code(404);
        echo "Page not found!";
        break;
}