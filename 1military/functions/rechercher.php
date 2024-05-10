<?php
include '../components/connect.php'; 


if(isset($_POST['search'])) {

    $searchValue = $_POST['search'];
    header('Location: nouvelle_page.php?search=' . urlencode($searchValue)); 
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
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
<link rel="stylesheet" href="../header_component/header_component.css">
    <?php include '../header_component/header_component.php';  ?>

    <div class="content-wrapper">


    <?php $search_Cours = $_GET['search'];  ?>

    <div class="body-cours clearfix" style=" margin-top: 220px; ">
    <?php echo ' <h1 align="center" class="tite"> Resultat pour "'.htmlspecialchars($search_Cours).'"</h1>'; ?>
    <?php 
    


    $stmt = $con->prepare(" SELECT country FROM countries where country=?");

    $stmt->bind_param("s", $search_Cours);
    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0 ) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="box-cours">';
            echo '<h1 class="nom-du-cours">'. htmlspecialchars($row['country']) .'</h1>';
            echo '<a href="afficher.php?country='. urlencode($row['country']) .'" class="button-contenu">Afficher</a>';
            echo '</div>';
        }
    } else {
        echo '<h4 style="text-align: center; font-weight: 570; ">There is no military informations about this country.</h4>';
    }

    $con->close();
    ?>
</div>
</div>

<link rel="stylesheet" href="../footer_component/footer_component.css">
    <?php include '../footer_component/footer_component.php'; ?>

</body>
</html>