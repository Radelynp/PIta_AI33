<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 400px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2 {
            text-align: center;
        }
        form {
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .center-button {
            display: flex;
            justify-content: center;
        }
        input[type="submit"] {
            background: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form id="registrationForm" action="index.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" autocomplete="off" required>
    
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="off" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" autocomplete="off" required>
            <div class="center-button">
                
                <input type="submit" value="Register">
            </div>
        </form>
    </div>

    <?php 
    try{
        $host = "localhost";
        // 127.0.0.1
        $username = "root";
        $password = "";
        $database = "activity";
    
        $connection = mysqli_connect($host, $username, $password, $database);
    
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            $username = filter_input(INPUT_POST,'username') ;
            $password = filter_input(INPUT_POST,'password'); 
            $email = filter_input(INPUT_POST,'email');
        
        
            if(!empty($username) || !empty($password) || !empty($email)){
                $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
            
                if (mysqli_query($connection, $sql)) {
                    echo "<script>alert('Registration successful! You can now log in.');</script> ";
                    echo '<br><a href="index.php">Go Back to Registration Form</a>';
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                }
            }else{
                echo "<script>console.log('Fill all text area!');</script> ";
            }
            mysqli_close($connection);
        }
    }catch(Exception){
    
    }
    ?>