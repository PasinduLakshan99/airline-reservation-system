<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view.plane_base_price</title>
    <link rel="stylesheet" href="../../styles/normal.css">
    <link rel="stylesheet" href="../../styles/styles.css">
</head>
<body class="container" style="margin: 10rem auto auto auto;">

    <?php
    
    include "../../genaral/config.php";

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