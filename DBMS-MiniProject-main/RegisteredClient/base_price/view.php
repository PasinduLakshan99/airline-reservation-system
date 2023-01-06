<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view.plane_base_price</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php
    
    include "../config.php";

    $sql = "SELECT * FROM plane_base_price;";

    $result = $conn->query($sql);

    ?>

    <table class="table">

        <thead>
            <th> Flight Detail ID </th>
            <th> Base Price ($) </th>
        </thead>

        <tbody>

                
            <?php
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            
            ?>

            <tr>

                <td> <?php echo $row["flight_detail_id"]; ?> </td>
                <td> <?php echo $row["base_price"]; ?> </td>
            
            </tr>

            <?php
            
                }
            }

            ?>


        </tbody>

    </table>

    <a href="../index.html" class="btn btn-secondary">Go Back</a>
    
</body>
</html>