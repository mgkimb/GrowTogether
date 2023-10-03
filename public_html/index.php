<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowTogether</title>
    
<?php include '../templates/components/header.php'; 

function loadTemplate($page) {
    if ($page === 'Home') {
        include('../templates/pages/home.php');
    } elseif ($page === 'PlantHealth') {
        include('../templates/pages/planthealth.php');
    } else {
        // Handle other cases or display an error page
        echo 'Page not found';
    }
}

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    loadTemplate($page);
}
?>
