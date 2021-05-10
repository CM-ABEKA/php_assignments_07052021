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
$var = $_GET['var'] ?? 0;
$test = 0;
$num = ($var);



if (is_numeric($var) && $num>$test){
    $res = 'a positive number';
}
elseif ($num < $test){
    $res = 'a Negative number';
}
elseif ($num == $test) {
    $res = 'equal to 0';
}
else{
    $res = ' not an integer';
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
            <a class="nav-link" href="electric.php">Electric-Bill</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="leap-year.php">Leap-Year</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="num_check.php">Num-Check</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="count.php">Count-Display</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="associative_array.php">Employee-Salary</a>
        </li>
    </ul>
    </div>
    "<br>"
    <div class="container">
        <h3>Assignment: Value-Type Check</h3>
        <hr>
        <form method="get">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="var" placeholder="Enter-Value" required>
                </div>


                <button type="submit" class="btn btn-primary col-md-1">Submit</button>

            </div>
            <div class="col-md-2">
                <br>
                <p><?= $num;?> is <?= $res;?></p>
            </div>
        </form>

</body>

</html>