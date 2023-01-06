<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add.flight_detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php
    
    include "../config.php";


    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $detail_id = $_POST["id"];
        $plane_id = $_POST["plane"];
        $origin = $_POST["origin"];
        $dest = $_POST["dest"];
        $dist = $_POST["dist"];

        $sql = "INSERT INTO `flight_detail` (`flight_detail_id`, `plane_id`, `origin_id`, `dest_id`, `distance`) VALUES ('$detail_id', '$plane_id', '$origin', '$dest', '$dist');";

        

        try {
            $result = $conn->query($sql);
            echo "<script type='text/javascript'>alert('added successfully!');</script>";
        }
        catch (Exception $ex) {
            echo "<script type='text/javascript'>alert('error occured!');</script>";
        }

    }

    ?>

    <form action="" method="POST">

        <label for="id"> Flight Detail ID: </label>
        <input type="text" name="id" id="id" class="form-control" required><br>

        <label for="plane"> Plane ID : &nbsp; </label><br>
        <select name="plane" id="plane" class="form-control" required>

            <?php

            $sql = "SELECT `plane_id` FROM `aircraft`";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

            ?>

            <option> <?php echo $row["plane_id"] ?> </option>

            <?php

                }
            }

            ?>

        </select><br>

        <label for="origin"> Origin : &nbsp; </label><br>
        <select name="origin" id="origin" class="form-control" required>

            <?php

            $sql = "SELECT `airport_code` FROM `airport`";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

            ?>

            <option> <?php echo $row["airport_code"] ?> </option>

            <?php

                }
            }

            ?>

        </select><br>

        <label for="dest"> Destination : &nbsp; </label><br>
        <select name="dest" id="dest" class="form-control" required>

            <?php

            $sql = "SELECT `airport_code` FROM `airport`";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

            ?>

            <option> <?php echo $row["airport_code"] ?> </option>

            <?php

                }
            }

            ?>

        </select><br>

        <label for="dist"> Distance: </label>
        <input type="text" name="dist" id="dist" class="form-control" required><br><br>

        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Create"> 
        <a href="create.php" class="btn btn-secondary"> Go Back </a>

    </form>
    
</body>
</html>