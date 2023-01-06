<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style> .err { color: #FF0000; font-size: 0.8rem;} </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php
        include "config.php";
        
        $tele=$_POST['tele'];
        $password=$_POST['password'];
        

        
            // Retrieve the form data
            
            //$tele = mysqli_real_escape_string($db, $_POST['tele']);
            //$password = mysqli_real_escape_string($db, $_POST['password']);
          
            // Query the database to see if the tel and password are valid
            $sql = "SELECT * FROM user WHERE telephone_number = '$tele' AND password = '$password'";
            $result = $conn->query($sql);

            // If the login is successful
            if (mysqli_num_rows($result) == 1) {
              // Start a session and redirect the user to a protected page
                session_start();
                $row = mysqli_fetch_array($result);
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['user_type']=$row['user_type'];
                $_SESSION['tele'] = $tele;
                try {
                    if ($row['user_type']=='Admin'){
                        header('Location: ..\admin\index.html');
                    }
                    else{
                        header('Location: ..\RegisteredClient\index.html');
                    }
                    
                }
                catch (Exception $ex) {
                    echo "<script type='text/javascript'>alert('error occured!');</script>";
                }
            }
            else {
              // Display an error message
              echo "Invalid login. Please try again.";
            }

        

    ?>

    
</body>
</html>