<?php
include 'components/connect.php'; 

session_start();

if(isset($_POST['search'])) {

    $searchValue = $_POST['search'];
    header('Location: functions/rechercher.php?search=' . urlencode($searchValue)); 
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <?php include 'header_component/header_component.php'; ?>

    <div class="content-wrapper">

    <form action="" method="post">
            <input type="text" name="search" placeholder="Search country ..." class="rechercher-cours" maxlength="50">
    </form>
    <div class="body-cours clearfix">
    <h1 align="center" class="tite" >Militaries</h1>
    <?php
    
    // Prepare the SQL query to fetch course title and professor details
    $stmt = $con->prepare(" SELECT country FROM countries ");



    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0 ) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="box-cours">';
            echo '<h1 class="nom-du-cours">'. htmlspecialchars($row['country']) .'</h1>';
            echo '<a href="functions/afficher.php?country='. urlencode($row['country']) .'" class="button-contenu">Afficher</a>';
            echo '</div>';
        }
    } else {
        echo '<p>No courses found for this student.</p>';
    }

    $con->close();
    ?>
</div>
</div>


    <?php include 'footer_component/footer_component.php'; ?>
</body>
</html>
