<?PHP 
    include_once("connection.php"); 
 
    $name = $_GET["name"];
    $score = $_GET["score"];
    
    $query = "INSERT INTO dotf_hs VALUES('$name','$score')";

    if(mysqli_query($conn, $query)){
        echo "Data insert good <br/>";
    } else{
        echo "Failed to get data <br/>".mysqli_error($conn);
    } 
?>