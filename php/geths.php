<?PHP 
    include_once("connection.php"); 
 
    $sql = "SELECT * FROM  dotf_hs";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Name: ".$row['name']. "|".
            "Score: ".$row['score']. "|".
            ";";
        }
    }
?>