<!--DELET-->
<?php
include 'conexao.php';
$id = $_GET['id'];

    $sql = "DELETE FROM `lutadores` WHERE id=$id";
    $deletar = mysqli_query($conexao,$sql);

?>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alert</title>
</head>
<body>
<div class="container" id="card-votacao">
        <div class="card" style="width: 18rem;">
        <img src="https://uploads.mixer.com/avatar/2evg7cnb-101052282.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Lutador Deletado!</p>
        </div>   
        <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">index</a>
        <a href="form.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Form</a>
            </div>
 </div>

 <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
