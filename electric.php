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
    <title>Document</title>
</head>

<body>
    <?php 
    $prev = $_GET['prev_reading'] ?? 0;
    $curr = $_GET['curr_reading'] ?? 0;

$units = ($curr-$prev);
$cost_one = 3.5;
$cost_two = 4.0;
$cost_three = 5.2;
$cost_four = 6.5;

if ($units <= 50 ){
    $bill = $units * $cost_one;
}
elseif ($units > 50 && $units <= 150 ){
    $extra_units = $units - 50;
    $bill = 50 * $cost_one + $extra_units * $cost_two;
}
elseif ($units > 150 && $units <= 250 ){
    $extra_units = $units - 150;
    $bill = (50 * $cost_one) +  (100 * $cost_two) + ($extra_units * $cost_three) ;
}else{
    $extra_units = $units - 250;
    $bill = (50 * $cost_one ) +  (100 * $cost_two) + (100* $cost_three) + ($extra_units * 6.5) ;
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
            <a class="nav-link" href=" index.php">Calculator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="electric.php">Electric-Bill</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="leap-year.php">Leap-Year</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="num_check.php">Num-Check</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="count.php">Count-Display</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="associative_array.php">Employee-Salary</a>
        </li>
    </ul>
    </div>
    <br>
    <div class="container">
        <h3>Assignment: Electric Bill Calculator</h3>
        <hr>
        <form method="get">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="prev_reading" placeholder="Previous-Reading" required>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="curr_reading" placeholder="Current-Reading">
                </div>

                <button type="submit" class="btn btn-primary col-md-1">Submit</button>

            </div>
            <br>
            <div class="col-md-2">
                <label for="unit">Units Used</label>
                <input type="text" disabled class="form-control" name="unit" placeholder="Units"
                    value="<?php echo $units?>">
            </div>
            <br>
            <div class="col-md-2">
                <label for="bill">Total Bill</label>
                <input type="readonly" disabled class="form-control" name="bill" placeholder="----" required
                    value="<?php echo $bill." Ksh";?>">
            </div>
        </form>
</body>

</html>