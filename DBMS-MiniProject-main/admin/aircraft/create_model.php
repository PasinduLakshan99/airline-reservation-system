<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add.aircraft_model</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php
    
    include "../config.php";


    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $model = $_POST["model"];
        $seat_cap = $_POST["seat_cap"];

        $sql = "INSERT INTO `aircraft_model` (`model`, `seat_cap`) VALUES ('$model', '$seat_cap');";

        

        try {
            $result = $conn->query($sql);
            echo "<script type='text/javascript'>alert('added successfully!');</script>";
        }
        catch (Exception $ex) {
            echo "<script type='text/javascript'>alert('error occured);</script>";
        }

    }

    ?>

    <form action="" method="POST">

        <label for="model"> Plane Model : </label>
        <input type="text" name="model" id="model" class="form-control" required><br>

        <label for="seat_cap"> Seat Capasity : </label><br>
        <input type="text" name="seat_cap" id="seat_cap" class="form-control" required><br><br>

        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Create"> 
        <a href="create.php" class="btn btn-secondary"> Go Back </a>

    </form>
    
</body>
</html>