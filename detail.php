<?php
include('functions.php');

$apartments = jsonToArray('data.json');

if(!isset($_GET['id'])){
	echo 'Please visit our <a href="index.php">Home Page</a>.';
	die();
}
if($_GET['id']<0 || $_GET['id']>count($apartments)-1){
	echo 'Something went wrong! Please come back to our <a href="index.php">Home Page</a>.';
	die();
} else {
    $id = $_GET['id'];
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>RoomsForRent</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <h4>Description:</h4>
                    <?= $apartments[$id]['description']?>
                    <br><br>
                    <div class="row">
                        <div class="col-5">
                            <h4>About household:</h4>
                            <ul>
                                <li>Cleanliness: <?= $apartments[$id]['lifestyle-cleanliness']?></li>
                                <li>Food: <?= $apartments[$id]['lifestyle-food']?></li>
                                <li>Bedtime: <?= $apartments[$id]['lifestyle-bedtime']?></li>
                                <li>Price asking: <?= $apartments[$id]['price']?></li>
                            </ul>
                        </div>
                        <div class="col-7">
                            <img src="<?=$apartments[$id]['house-img']?>" alt="room-<?= $id ?>'" class="img-responsive" style="max-height: 400px; max-width: 400px;">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img src="<?= $apartments[$id]['household-img'] ?>" alt="houshold-<?= $id ?>" class="img-responsive rounded-circle" style="max-height: 100px; max-width: 100px;">
                    <strong><?= $apartments[$id]['household-name'] ?></strong>
                    <br>
                    <small><?= $apartments[$id]['lifestyle-occupation'] ?></small>
                    <br>
                    <small><?= $apartments[$id]['household-sex'].', '.$apartments[$id]['household-age']. ' years old' ?></small> 
                    <hr class="small-margin-top">
                    <p>Phone number: <?= $apartments[$id]['phone-number'] ?></p>    
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
