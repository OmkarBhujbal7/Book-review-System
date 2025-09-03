<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookSaw - USER Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Source Sans Pro', sans-serif;
        }
        .login-box {
            width: 360px;
            margin: 7% auto;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-logo a {
            font-size: 30px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .signup-link {
            text-align: center;
            margin-top: 10px;
        }
        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Book</b>Saw</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="text-center fw-bold">User Sign In</p>
                <form action="login_confirm.php" method="post">
                    <div class="mb-3 input-group">
                        <input type="email" name="cust_email" class="form-control" placeholder="Email" required>
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <div class="mb-3 input-group">
                        <input type="password" name="cust_password" class="form-control" placeholder="Password" required>
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                </form>

                <!-- Sign Up Link -->
                <div class="signup-link">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
