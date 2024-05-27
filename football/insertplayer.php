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
        $player_id = $_REQUEST['player_id'];
    $name= $_REQUEST['name'];
    $nationality = $_REQUEST['nationality'];
    $age = $_REQUEST['age'];
    $salary = $_REQUEST['salary'];
    $position = $_REQUEST['position'];
    $club_id = $_REQUEST['club_id'];
    $manager_id = $_REQUEST['manager_id'];
    $match_id = $_REQUEST['match_id'];
    $league_id = $_REQUEST['league_id'];

          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO player  VALUES ('$player_id', 
            '$name','$nationality','$age','$salary','$position','$club_id','$manager_id','$match_id','$league_id')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." ;
            header("Location:player.php");
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