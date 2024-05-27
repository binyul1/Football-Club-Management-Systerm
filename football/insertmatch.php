<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "football");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $match_id = $_REQUEST['match_id'];
        $start_time = $_REQUEST['start_time'];
        $end_time= $_REQUEST[‘end_time’];
         $match_date = $_REQUEST['match_date'];
         $stadium_id = $_REQUEST['stadium_id'];
        $league_id = $_REQUEST['league_id'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO match1  VALUES ('$match_id', 
        '$start_time','$end_time','$match_date','$stadium_id','$league_id')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." ;
            header("Location:match.php");
            exit; // <- don't forget this!

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>