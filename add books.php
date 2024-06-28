<html>
<head>
    <title>Bookstore Database</title>
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
            background-image:url(b1.jpg);
            
        }

        .container 
        {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2
        {
            text-align: center;
            margin-bottom: 20px;
        }

        label 
        {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="submit"]
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"]
         {
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover
         {
            background-color: #45a049;
        }

        input[type="text"]:focus,
        input[type="submit"]:focus 
        {
            outline: none;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bookstore Database</h2>
        <form method="post" action="book store.php">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author">
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre">
            <input type="submit" value="Add Book">
        </form>
    </div>
</body>
</html>

