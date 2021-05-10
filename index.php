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
    <title>PHP | Calculator</title>
</head>

<body>
    <!-- Logic -->
    <?php 
    $num1 = $_GET['num1'] ?? NULL;
    $num2 = $_GET['num2']?? NULL;
    $operator = $_GET['operator'] ?? '+';
    $result = "";
    switch ($operator){
        case "mul *": $result = $num1*$num2;
            break;
        case "div /": 
            if ($num2 == 0 || $num1 == 0){
                $result = 0;
            }else{
                $result = $num1/$num2;
            }
            break;
        case "sub -": $result = $num1-$num2;
            break;
        case "add +": $result = $num1+$num2;
            break;
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
            <a class="nav-link active" aria-current="page" href=" index.php">Calculator</a>
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
            <a class="nav-link" href="associative_array.php">Employee-Salary</a>
        </li>
    </ul>



    <div class="container">
        <h3>Assignment: Calculator</h3>
        <p>Input number to be calculated then select the operator type from the dropdown</p>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="row">
                <div class="col-8">
                    <!-- Number 1 -->
                    <div class="form-group">
                        <label for="num1">First Number:</label>
                        <input type="number" class="form-control" name="num1" value="<?php echo $num1?>"
                            required="required">
                        <!-- Operation -->
                        <label for="sel1">Select Operation:</label>
                        <div class="container-fluid col-8">
                            <input type="submit" class="btn btn-info" name="operator" value="add +">
                            <input type="submit" class="btn btn-info" name="operator" value="mul *">
                            <input type="submit" class="btn btn-info" name="operator" value="sub -">
                            <input type="submit" class="btn btn-info" name="operator" value="div /">
                        </div>
                        <!-- Number 2 -->
                        <label for="num2">Second Number:</label>
                        <input type="number" class="form-control" name="num2" value="<?php echo $num2?>"
                            required="required" value="<?php echo $num2; ?>">



                        <!-- Result -->
                        <div>
                            <label for="num2">Result:</label>
                            <input type="readonly" class="form-control" name="result" value="<?php echo $result; ?>"
                                disabled placeholder="0">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>





</body>

</html>