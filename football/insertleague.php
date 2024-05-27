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
        $league_id = $_REQUEST['league_id'];
   $country = $_REQUEST['country'];
  $name = $_REQUEST['name'];
 $start_date = $_REQUEST['start_date'];
 $end_date = $_REQUEST['end_date'];
 $no_of_teams = $_REQUEST['no_of_teams'];


          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO league VALUES ('$league_id', 
        '$country','$name','$start_date','$end_date','$no_of_teams')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." ;
            header("Location:league.php");
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