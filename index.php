<?php
include('functions.php');

$apartments = jsonToArray('data.json');

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
        <h3>Rooms Available Now:</h3>
        <ul class="list-group">
            
            <?php
            $count = count($apartments);
            for($i=0; $i<$count; ++$i){
                echo '<li class="list-group-item">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-3">
                                <img src="'.$apartments[$i]['house-img'].'" alt="room-'.$i.'" class="img-thumbnail img-responsive" style="max-height: 200px; max-width: 200px;">
                            </div>
                            <div class="col-7 text-left">
                                <p class="lead">'.$apartments[$i]['description'].'</p>
                            </div>
                            <div class="col-2">
                                <img src="'.$apartments[$i]['household-img'].'"
                                   alt="houshold-'.$i.'" class="img-responsive rounded-circle"
                                   style="max-height: 50px; max-width: 50px;">
                                <strong>'.$apartments[$i]['household-name'].'</strong>
                                <br>
                                <small>'.$apartments[$i]['lifestyle-occupation'].'</small>
                                <br>
                                <small>'.$apartments[$i]['household-sex'].', '.$apartments[$i]['household-age']. ' years old'.'</small> 
                                <hr class="small-margin-top">
                            </div>
                        </div>
                        <hr class="my-4">
                        <p class="text-center">Price: '.$apartments[$i]['price'].'</p>
                        <a class="btn btn-primary btn-lg float-right" href="detail.php?id='.$i.'" role="button">View</a>
                    </div>
                </li>';
            }
            ?>            
        </ul>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
