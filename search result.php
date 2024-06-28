<?php
$dev=mysqli_connect("localhost","root","","b_store");
if(!$dev)
{
    die("connection failed:".mysqli_connect_error());
}
$search = $_GET['search'];
$sql = "SELECT ID,Title,Author,Genre FROM b_data WHERE ID LIKE ? OR Title LIKE ? OR Author LIKE ? OR Genre LIKE ? LIMIT 1";
$stmt = mysqli_prepare($dev, $sql);
$search = "%$search%";
mysqli_stmt_bind_param($stmt, "ssss", $search, $search, $search, $search);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result)>0) 
{
    echo "<h2>Search Results</h2>";
    while($row=mysqli_fetch_assoc($result)) 
    {
        echo "<div class='book'>";
        echo "<h3>" . $row["Title"] . "</h3>";
        echo "<p><strong>ID:</strong> " . $row["ID"] . "</p>";
        echo "<p><strong>Title:</strong> " . $row["Title"] . "</p>";
        echo "<p><strong>Author:</strong> " . $row["Author"] . "</p>";
        echo "<p><strong>Genre:</strong> " . $row["Genre"] . "</p>";
        echo "</div>";
    }
} 
else 
{
    echo "<p>No books found matching your search.</p>";
}
?>