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
    

    if (isset($_GET['check'])){
        $year = $_GET['year'];
        $result = "Simple algo";
        if ($year % 100 == 0 and $year % 400 == 0 ) {
            $result = 'Leap-Year';
          } elseif ($year % 4 == 0) {
            $result = 'Leap-Year';
          } else {
            $result = 'Not-Leap';
          }
        }
   
    ?>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/task.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Assignemts
            </a>
        </div>
    </nav>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " href="index.php">Calculator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Electric</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="leap-year.php">Leap-Year</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Num-Check</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="count.php">Count-Display</a>
        </li>

    </ul>

    <div class="container">
        <h1>Check Whether Year is Leap or Not</h1>
        <div class="col-3 form-group">
            <form action="" method="get">
                <label for="" name="">YEAR</label>
                <input type="number" class="form-control" name="year" value="<?= (isset($year)?$year:"")?>" id=""
                    placeholder="Enter Year">
                <input type="submit" class="form-control btn btn-outline-info" name="check" value="Check">
                <input type="readonly" class="form-control" value="<?= (isset($result)?$result:"")?>"
                    placeholder="Result" disabled>
            </form>
        </div>
    </div>

</body>

</html>

</html>