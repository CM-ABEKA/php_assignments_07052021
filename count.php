<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <title>PHP | Leap</title>
</head>

<body>
    <?php 
    $initial = 5;
    $final = 15;
    $start = $_GET['start'] ?? 5;
    $end = $_GET['end'] ?? 15;

    $range = '';
    for ($start >=0 ;  $start <= $end; $start ++){
       $range .= $start.' ';
       ;
    }
    
    ?>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/ok.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Assignemts
            </a>
        </div>
    </nav>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " href="index.php">Calculator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="electric.php">Electric-Bill</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="leap-year.php">Leap-Year</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="num_check.php">Num-Check</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="count.php">Count-Display</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="associative_array.php">Employee-Salary</a>
        </li>

    </ul>

    <div class="container">
        <h3>Assignment: Range Counter Display</h3>
        <div class="col-5 form-group">
            <form action="" method="get">
                <label for="" name="">START</label>
                <input type="number" required class="form-control" name="start"
                    value="<?= (isset($initial)?$initial:"")?>" id="" placeholder="Enter Value">
                <label for="" name="">END</label>

                <input type="number" required class="form-control" name="end" value="<?= (isset($final)?$final:"")?>"
                    id="" placeholder="Enter Value">
                <br>

                <button type="submit" name="check" class="form-control btn btn-info">Count</button>
                <br>
                <hr>
                <p><?= $range ?></p>
            </form>
        </div>
    </div>

</body>

</html>

</html>