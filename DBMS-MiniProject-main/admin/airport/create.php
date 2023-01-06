<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add.airport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php
    
    include "../config.php";


    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $code = $_POST["code"];
        $name = $_POST["name"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];

        $sql = "INSERT INTO `airport` (`airport_code`, `name`, `city`, `state`, `country`) VALUES ('$code', '$name', '$city', '$state', '$country');";

        

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

        <label for="code"> Airport Code : </label>
        <input type="text" name="code" id="code" class="form-control" required><br>

        <label for="name"> Airport Name : &nbsp; </label><br>
        <input type="text" name="name" id="name" class="form-control" required><br>

        <label for="city"> City : </label><br>
        <input type="text" name="city" id="city" class="form-control" required><br>

        <label for="state"> State : </label><br>
        <input type="text" name="state" id="state" class="form-control"><br>

        <label for="model"> Country : </label><br>
        <input type="text" name="country" id="country" class="form-control" required><br>

        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Create"> 
        <a href="view.php" class="btn btn-secondary"> Go Back </a>

    </form>
    
</body>
</html>