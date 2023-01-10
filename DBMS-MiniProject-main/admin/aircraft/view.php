<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view.aircraft</title>
    <link rel="stylesheet" href="../../styles/normal.css">
    <link rel="stylesheet" href="../../styles/styles.css">
</head>
<body class="container" style="margin: 10rem auto 10rem auto;">

    <?php

    include "../../genaral/config.php";

    $sql = "SELECT * FROM aircraft;";

    $result = $conn->query($sql);

    ?>

    <table class="table">

        <thead>
            <th> ID </th>
            <th> Model </th>
            <th> Update or Delete </th>
        </thead>

        <tbody>

                
            <?php
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            
            ?>

            <tr>

                <td> <?php echo $row["plane_id"]; ?> </td>
                <td> <?php echo $row["model"]; ?> </td>
                <td>
                    <a href="update.php?id=<?php echo $row["plane_id"]; ?>" class="btn btn-primary"> Update </a>
                    <a href="delete.php?id=<?php echo $row["plane_id"]; ?>" class="btn btn-danger"> Delete </a>
                </td>
            
            </tr>

            <?php
            
                }
            }

            ?>


        </tbody>

    </table>

    <a href="create.php" class="btn btn-primary"> Create Record </a>
    <a href="../index.html" class="btn btn-secondary">Go Back</a>
    
</body>
</html>