<html>
<head>

    <link rel="stylesheet" type="text/css"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    >
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Slider Sign In/Sign Up Form</title>
</head>
    <body>
    <div class="container" id="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6">

                <h1> Sign In </h1>
                <form action="validation.php" method="post" action="#">
                   <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="user"  class="form-control" required>
                   </div>
                    <div class="form-group">
                        <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>

        </div>
            <div class="col-md-6">
                <h1> Sign Up </h1>
                <form action="registration.php" method="post" action="#">
                    <div class="form-group">
                     <label>Name</label>
                    <input type="text" name="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="main.js"></script>
    </body>
</html>