<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view.reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php

    include "../config.php";

    $sql = "SELECT * FROM reservation;";

    $result = $conn->query($sql);

    ?>

    <table class="table">

        <thead>
            <th> Reservation ID </th>
            <th> Flight ID </th>
            <th> User ID </th>
            <th> Seat No </th>
            <th> Price </th>
            <th> Booking Time </th>
            <th> Delete </th>
        </thead>

        <tbody>

                
            <?php
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            
            ?>

            <tr>

                <td> <?php echo $row["reserv_id"]; ?> </td>
                <td> <?php echo $row["flight_id"]; ?> </td>
                <td> <?php echo $row["user_id"]; ?> </td>
                <td> <?php echo $row["seat_no"]; ?> </td>
                <td> <?php echo $row["price"]; ?> </td>
                <td> <?php echo $row["booking_date"]; ?> </td>
                <td>
                    <a href="delete.php?id=<?php echo $row["reserv_id"]; ?>" class="btn btn-danger"> Delete </a>
                </td>
            
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