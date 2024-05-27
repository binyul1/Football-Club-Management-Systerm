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
        $no_of_games = $_REQUEST['no_of_games'];
   $win = $_REQUEST['win'];
    $draw = $_REQUEST['draw'];
   $lose = $_REQUEST['lose'];
   $goals_scored = $_REQUEST['goals_scored'];
  $goals_conceded = $_REQUEST['goals_conceded'];
  $club_id = $_REQUEST['club_id'];

          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO club_stats  VALUES ('$no_of_games', 
            '$win','$draw','$lose','$goals_scored','$goals_conceded','$club_id')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." ;
            header("Location:clubstat.php");
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