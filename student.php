<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
        <h1>Student Login</h1>
        <form action="search books.php" method="POST" onsubmit="return validateForm()">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <script>
            var validUsername = "student@ace";
            var validPassword = "ace";
            function validateForm() 
            {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                if (username !== validUsername || password !== validPassword) {
                    alert("Invalid username or password. Please try again.");
                    return false;
                }
                return true; 
            }
        </script>
</body>
</html>



