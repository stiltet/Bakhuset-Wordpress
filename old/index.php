<?php
if (!empty($_GET['p'])) {
    $page = $_GET['p'];
}
else {
//  $page = "startsida";
    $page = "underConstruction";
}

$page = 'content/' . $page . '.php';

if (!(file_exists($page))) {
    require_once("content/errors/404_NotFound.html");
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bakhuset</title>
    <link rel="stylesheet" type="text/css" href="assets/css/app.min.css" />
    <?php
    // Checks if host server is online or not.
    if(checkdnsrr("googleapis.com", "ANY")) {
        ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <?php } else { ?>
        <script src="assets/js/jquery/jquery-1.9.1.min.js"></script>
        <script src="assets/js/jquery/jquery-ui.min.js"></script>
    <?php } ?>
    <script src="assets/js/UIModule.min.js"></script>
    <script src="assets/js/MainModule.min.js"></script>
    <script src="assets/js/Controller.min.js"></script>
    <meta charset="windows-1252" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="robots" content="all">
    <meta name="description" content="Bakhuset" />
    <meta name="keywords" content="bakhuset, baka, bakverk, bageri, catering, cupcakes, cupcake, bakelser, alingsås, café, caféer, cafe, cafeer, stampens, kvarn, mjölnaregatan, />
    <meta name="author" content="Stellan Lindell, Fixing:IT" />
    <?php //require_once 'analyticstracking.php'; ?>
</head>
<body>
<?php
require_once($page);
?>
</body>
</html>
