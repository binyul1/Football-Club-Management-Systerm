<?php
  
// Username is root
$user = 'root';
$password = ''; 
  
// Database name is gfg
$database = 'football'; 
  
// Server is localhost with
// port number 3308
$host='localhost';
$mysqli = new mysqli($host,$user,$password,$database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM club_stats ORDER BY club_id ASC ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>club statistics</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
              *{
margin: 0px;
padding: 0px;
}
*::selection{
margin: 0px;
padding: 0px;
background-color: yellow;
}
body{
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-color:#92a8d1;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#headder{
 background-color:#152238;
 position: fixed;
 width:100%;
 
}
#headder h1{
 display: inline-block;
 margin-left: 40px;
 padding: 10px;
 font-family: 'Pacifico', cursive;
 color:white;

}
#headder ul{
display: inline-block;
float:right;
}
#headder ul li{
display: inline-block;
float:left;
list-style-type: none;
height: 36px;
color:white;
padding:15px ;
padding-top: 25px;
font-family: 'Pacifico', cursive;


}
#headder ul li:hover{
background-color: white;
color:rgb(244, 66, 92);



}
#headder ul a{
text-decoration-style: none;
}
        table {
            margin: 0 auto;
            font-size: large;
            color:black;
            border: 2px solid black;
            border-collapse: collapse;
        }
  
        h1 {
            text-align: center;
            color:152238;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        tr,th{
            background-color:#ADD8E6;
        }
  
        td {
            background-color:#92a8d1;
            border: 2px solid black;

        }
  
        th,
        td {
            font-weight: bold;
            border: 2px solid black;
            padding: 10px;
            text-align: center;
            
        }
        .center {
            position: fixed;
            top: 100px;
            left:350px;
}
.button-71 {
  background-color: #152238;
  border: 0;
  border-radius: 56px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
  font-size: 18px;
  font-weight: 600;
  outline: 0;
  padding: 16px 21px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-71:before {
  background-color: initial;
  background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
  border-radius: 125px;
  content: "";
  height: 50%;
  left: 4%;
  opacity: .5;
  position: absolute;
  top: 0;
  transition: all .3s;
  width: 92%;
}

.button-71:hover {
  box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
  transform: scale(1.05);
}

@media (min-width: 768px) {
  .button-71 {
    padding: 16px 48px;
  }
}

  
    </style>
</head>
  
<body>
<div id="headder">
    <h1>Football Club Management System</h1>
    <ul id="unol">
      <a href="foot.php"><li>Home</li></a>
      <a href="club.php"><li>club</li></a>
      <a href="manager.php"><li>manager</li></a>
      <a href="player.php"><li>player</li></a>
      <a href="stadium.php"><li>stadium</li></a>
      <a href="match.php"><li>match</li></a>
      <a href="league.php"><li>league</li></a>
      <a href="clubstat.php"><li>club stats</li></a>
      <a href="contactus.php"><li>contact us</li></a>
      <a href="logout.php"><li>logout</li></a>
    </ul>
  </div>
    <div class="center">
        <h1>Clubstats</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>no_of_games</th>
                <th>win</th>
                <th>draw</th>
                <th>lose</th>
                <th>goals_scored</th>
                <th>goals_conceded</th>
                <th>club_id</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['no_of_games'];?></td>
                <td><?php echo $rows['win'];?></td>
                <td><?php echo $rows['draw'];?></td>
                <td><?php echo $rows['lose'];?></td>
                <td><?php echo $rows['goal_scored'];?></td>
                <td><?php echo $rows['goal_conceded'];?></td>
                <td><?php echo $rows['club_id'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
        <br>
        <form action="clubstat.php">
        <button class="button-71">Back</button>
            </form>
            </div>
  
</body>
  
</html>