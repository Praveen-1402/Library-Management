<html>
<head>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image:url(b2.jpg);
            background-repeat:no-repeat;
            background-size:cover;
            
        }

        .container 
        {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .container h2 
        {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group 
        {
            margin-bottom: 15px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] 
        {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input[type="submit"]
         {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover
        {
            background-color: #45a049;
        }

        .form-group input[type="text"]::placeholder,
        .form-group input[type="password"]::placeholder 
        {
            color: #999;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus
        {
            outline: none;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form name="p1" method="post" action="add books.php" onsubmit="return validateForm()">
            <div class="form-group">
                <input type="text" id="username" name="k1" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="k2" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
    <script>
         var validUsername = "admin@ace";
            var validPassword = "ace";
        function validateForm()
         {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username !== validUsername || password !== validPassword)
             {
                alert("Invalid username or password. Please try again.");
                return false; 
            }
            return true;
        }
    </script>
</body>
</html>
