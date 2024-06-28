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
        }

        .container 
        {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
        }

        h2 
        {
            text-align: center;
            margin-bottom: 20px;
        }

        table 
        {
            width: 100%;
            border-collapse: collapse;
        }

        th, td
         {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th 
        {
            background-color: #fff;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        tr:nth-child(even)
        {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bookstore Database</h2>
        <table border="1" cellspacing="2" cellpadding="2">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
            </tr>
            <?php
            $dev=mysqli_connect("localhost","root","","b_store");
            if(!$dev)
            {
                die("connection failed:".mysqli_connect_error());
            }
            $sql="SELECT ID,Title,Author,Genre from b_data";
            $result=mysqli_query($dev,$sql);
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$row["ID"]."</td>";
                    echo "<td>".$row["Title"]."</td>";
                    echo "<td>".$row["Author"]."</td>";
                    echo "<td>".$row["Genre"]."</td>";
                    echo "</tr>";
                }
            }
            else
            {
                echo "No data found";
            }
            mysqli_close($dev);
            ?>
        </table>
    </div>
</body>
</html>
