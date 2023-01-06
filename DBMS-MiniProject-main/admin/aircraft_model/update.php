<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update.aircraft-model</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php

    include "../config.php";
    
    // get row values containing relavant id to fill the form when loading
    if (isset($_GET["model"])) {

        $model = $_GET["model"];

        $sql = "SELECT `seat_cap` FROM `aircraft_model` WHERE `model`='$model';";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $seat_cap = $row["seat_cap"];

    }
    
    if (isset($_POST["update"])) {

        $plane_model = $_POST["model"];
        $seats = $_POST["seat_cap"];

        $sql = "UPDATE `aircraft_model` SET `model`='$plane_model', `seat_cap`='$seats' WHERE `model` = '$model';";

        

        try {
            $result = $conn->query($sql);
            echo "<script type='text/javascript'>alert('updated successfully!');</script>";
        }
        catch (Exception $ex) {
            echo "<script type='text/javascript'>alert('error occured!');</script>";
        }

    }

    
    ?>

    <form action="" method="POST">

        <label for="model"> Plane Model: </label>
        <input type="text" name="model" id="model" class="form-control" value="<?php echo $model; ?>" required><br>

        <label for="seat_cap"> Seat Capasity : </label><br>
        <input type="text" name="seat_cap" id="seat_cap" class="form-control" value="<?php echo $seat_cap; ?>" required><br><br>

        <input type="submit" name="update" id="update" class="btn btn-success" value="Update"> 
        <a href="view.php" class="btn btn-secondary"> Go Back </a>

    </form>
    
</body>
</html>