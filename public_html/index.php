<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowTogether</title>
    
<?php include '../templates/components/header.php'; 

function loadTemplate($page) {
    if ($page === 'PlantHealth') {
        include('../templates/pages/planthealth.php');
    } elseif ($page === 'PlantHealth-results') {
        include('../templates/pages/planthealth-results.php');
    } else {
        // Handle other cases or display an error page
        include('../templates/pages/home.php');
    }
}

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    loadTemplate($page);
}
?>
