
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTBALL CLUB MANAGEMENT SYSTEM</title>
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
    background: url(Media/4.png);
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
.soccer {
  background: url(http://upload.wikimedia.org/wikipedia/en/e/ec/Soccer_ball.svg);
  background-size: 35px 35px;
  height: 35px;
  width: 35px;
  position:absolute;
  -webkit-animation:roll 4.5s infinite;
  -moz-animation:roll 4.5s infinite;
  animation:roll 4.5s infinite;
  top:20px;
}

@-moz-keyframes roll {  
  0% {left:0px; -webkit-transform: rotate(360deg);}
  50% {left:0px; -webkit-transform: rotate(-360deg);}
  100% {left:0px; -webkit-transform: rotate(360deg);}
}
@-webkit-keyframes roll { 
  0% {left:0px; -webkit-transform: rotate(360deg);}
  50% {left:0px; -webkit-transform: rotate(-360deg);}
  100% {left:0px; -webkit-transform: rotate(360deg);}
}

@keyframes roll { 
  0% {left:0px; -webkit-transform: rotate(360deg);}
  50% {left:0px; -webkit-transform: rotate(-360deg);}
  100% {left:0px; -webkit-transform: rotate(360deg);}
}

.world-cup {
  color: #82AE6F;
  text-align: center;
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
  <div class="soccer"></div>
  
</body>
</html>

  