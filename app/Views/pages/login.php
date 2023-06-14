<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-image: url('https://hmghospitality.com/wp-content/uploads/2017/01/HMG-Hotel-Lobby-1920x720.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .header ul li {
            margin-right: 10px;
        }

        .header ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .header ul li a:hover {
            background-color: #555;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 300px;
        }

        .login-box h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-box label {
            display: block;
            margin-bottom: 10px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .dashboard {
            margin-top: 40px;
            text-align: center;
        }

        .dashboard h2 {
            margin-bottom: 20px;
        }

        .dashboard p {
            margin: 0;
        }
        .back{
            color: red;
        }
    </style>
</head>

<body>
    <div class="header">
        <ul>
            <li></li>
        </ul>
    </div>

    <?php $loggedIn = false; // Assuming the user is not logged in ?>

    <div class="container">
        <div class="login-box">
            <h1>Login</h1>
            <?php if ($loggedIn) { ?>
                <div class="dashboard">
                    <h2>Welcome to the Dashboard!</h2>
                    <p>Logged in as: <?php echo $username; ?></p>
                    <p><a href="logout.php">Logout</a></p>
                </div>
            <?php } else { ?>
                <form action="login.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" name="password" required>

                    <input type="submit" value="Login">
                </form>
                <p><a href="forgot_password.php">Forgot Password?</a></p>
                
                <a class="back" href="/">Back</a>
            <?php } ?>
        </div>
    </div>
</body>
</html>
