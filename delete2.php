
<?php
    include 'config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM pembeli WHERE id_pmb = '{$id}'");
    header('location: index.php');   
?>