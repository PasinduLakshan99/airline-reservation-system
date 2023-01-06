<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete.flight_detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php

    if (isset($_GET["id"])) {

        include "../config.php";

        $detail_id = $_GET["id"];

        $sql = "DELETE FROM `flight_detail` WHERE `flight_detail_id`='$detail_id';";

        try {
            $result = $conn->query($sql);
            echo "<script type='text/javascript'>alert('deleted successfully!');</script>";
        }
        catch (Exception $ex) {
            echo "<script type='text/javascript'>alert('error occured!');</script>";
        }

    }

    ?>

    <a href="view.php" class="btn btn-secondary"> Go Back </a>
    
</body>
</html>