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
        $stadium_id =  $_REQUEST['stadium_id'];
        $name =  $_REQUEST['name'];
        $location = $_REQUEST['location'];

          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO stadium  VALUES ('$stadium_id', 
            '$name','$location')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." ;
            header("Location:stadium.php");
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