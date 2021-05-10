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
    <title>PHP | Salaries</title>
</head>




<body>

    <?php 
    $fname = $_GET['fname'] ?? 'John';
    $salary = $_GET['salary'] ?? 0;
    $new_data = array( "$fname" => "$salary");
    $input = array();
    foreach ($new_data as $nkey => $nvalue){
        $input += $new_data;
        
    }

    $below_wagebill = 'table-danger';
    $above_wagebill = 'table-info';

$ndata = array(
    'James'=> 20000,
    'Peter' => 23000,
    'Seth' => 8000,
    'Jeremiah' => 15800,
    'Jim' => 6500
);
$data = array_merge($ndata, $input);

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
            <a class="nav-link" href="num_check.php">Num-Check</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="count.php">Count-Display</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="associative_array.php">Employee-Salary</a>
        </li>
    </ul>
    </div>
    <br>
    <div class="container">

        <form method="get">
            <div class="row offset-1">
                <h3>Assignment: Associative Arrays</h3>
                <p>Check wage range</p>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="fname" placeholder="Enter Name eg. John" required>
                </div>

                <div class="col-md-3">
                    <input type="number" class="form-control" name="salary" placeholder="Salary " required>
                </div>
                <button type="submit" class="btn btn-primary col-md-1">Submit</button>
            </div>
        </form>
    </div>
    <div class="container col-8">
        <br>
        <table class="table table-bordered border-primary">
            <thead class="table-primary border-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $n = 0;
                    foreach ($data as $key => $value){
                        if ($value < 10000){
                            $wage = 'Below minimum wage';
                            $class = $below_wagebill;
                        }
                        else{
                            $wage = 'Above minimum wage';
                            $class = $above_wagebill;
                        }
                        $n++;
                        echo "<tr><td>$n</td><td>$key</td><td>$value</td><td class = '$class'>$wage</td></tr>";
                    }
                    ?>

            </tbody>
        </table>
    </div>

</body>

</html>