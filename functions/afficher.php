<?php
include '../components/connect.php'; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <<link rel="stylesheet" href="../header_component/header_component.CSS">
    <?php include '../header_component/header_component.php';  ?>


    <div class="content-wrapper">

    <div class="body-cours" style="margin-top: 140px;">


    <?php
    // Get country from the query parameter and sanitize it to prevent XSS attacks
    $country = $_GET['country'];

    // Prepare SQL query using backticks for column names
    $stmt = $con->prepare("SELECT `country`, `Ground Forces`, `Air Forces`, `Naval Forces`, `Tanks`, `Fighter Aircrafts`, `Frigates`, `Rank` FROM countries WHERE country = ?");
    $stmt->bind_param("s", $country);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();



    // Assign each column value to a separate variable
    $groundForces = $row["Ground Forces"];
    $airForces = $row["Air Forces"];
    $navalForces = $row["Naval Forces"];
    $tanks = $row["Tanks"];
    $fighterAircrafts = $row["Fighter Aircrafts"];
    $frigates = $row["Frigates"];
    $rank = $row["Rank"];

    // Display header with country name and rank
    echo '<h1 align="center" class="tite">' . $country . ' : Ranking #' . $rank . '</h1>';

    // Display information in divs, each inside a container
    echo '<div class="container">';
    echo '<div class="box-cours1"> <h2> Ground Forces : <br>' . $groundForces . ' </h2> </div>';
    echo '<div class="box-cours1"> <h2> Air Forces : <br>' . $airForces . ' </h2> </div>';
    echo '<div class="box-cours1"> <h2> Naval Forces : <br>' . $navalForces . ' </h2> </div>';
    echo '<div class="box-cours1"> <h2> Tanks : <br>' . $tanks . ' </h2> </div>';
    echo '<div class="box-cours1"> <h2> Fighter Aircrafts : <br>' . $fighterAircrafts . ' </h2> </div>';
    echo '<div class="box-cours1"> <h2> Frigates : <br>' . $frigates . ' </h2> </div>';
    echo '</div>';


?>



    </div>
    </div>

    <link rel="stylesheet" href="../footer_component/footer_component.CSS">
    <?php include '../footer_component/footer_component.php'; ?>

</body>
</html>