<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete.user_type</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php
    
    include "../config.php";

    if (isset($_GET["type"])) {


        $user_type = $_GET["type"];

        $sql = "DELETE FROM `user_type` WHERE `user_type`='$user_type';";

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