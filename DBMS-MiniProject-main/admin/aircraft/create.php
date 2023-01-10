<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add.aircraft</title>
    <link rel="stylesheet" href="../../styles/normal.css">
    <link rel="stylesheet" href="../../styles/styles.css">
</head>
<body class="container" style="margin: 10rem auto 10rem auto;">

    <?php
    
    include "../../genaral/config.php";


    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $plane_id = $_POST["id"];
        $plane_model = $_POST["model"];

        $sql = "INSERT INTO `aircraft` (`plane_id`, `model`) VALUES ('$plane_id', '$plane_model');";

        

        try {
            $result = $conn->query($sql);
            echo "<script type='text/javascript'>alert('added successfully!');</script>";
        }
        catch (Exception $ex) {
            echo "<script type='text/javascript'>alert('error occured');</script>";
        }

    }

    ?>

    <form action="" method="POST">

        <label for="id"> Plane ID: </label>
        <input type="text" name="id" id="id" class="form-control" required><br>

        <label for="model"> Plane Model : </label><br>
        <select name="model" id="model" class="form-control" required>

            <?php

            $sql = "SELECT model FROM aircraft_model";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

            ?>

            <option> <?php echo $row["model"] ?> </option>

            <?php

                }
            }

            ?>

        </select><br><br>

        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Create"> 
        <a href="create_model.php" class="btn btn-warning"> Create New Model </a>
        <a href="view.php" class="btn btn-secondary"> Go Back </a>

    </form>
    
</body>
</html>