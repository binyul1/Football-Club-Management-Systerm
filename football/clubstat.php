<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubstats</title>
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
.center {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 600px;
            width: 100%;
            left:400px;
            /* Height of the footer*/ 
            height: 40px;
}
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=text] {
  background-color:white;
  color:#152238;
}
input[type=text] {
  border:2px solid black;
  border-radius: 8px;
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
.blink{
		width:200px;
		height: 50px;
		padding: 15px;	
		text-align: center;
		line-height: 50px;
	}
	span{
		font-size: 28px;
		font-family: cursive;
		color: #553d67;
		animation: blink 1s linear infinite;
	}
@keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}
 </style>
   

    <link rel="stylesheet"

  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
  <div id="clubstat" class="center">
  <h2>ClubStats&nbsp; &nbsp; &nbsp;<a href="clubstatdata.php" class="blink"><span>Click here to see club stats</span></a></h2>
    <form action="insertclubstat.php" method="post">
      <input type="text" name="no_of_games" id="no_of_games" placeholder="enter the number of games">
      <input type="text" name="win" id="win" placeholder="enter the match win">
      <input type="text" name="draw" id="draw"  placeholder="enter the draw numbers">
      <input type="text" name="lose" id="lose" placeholder="enter the lose numbers">
      <input type="text" name="goals_scored" id="goals_scored" placeholder="enter the goal score">
      <input type="text" name="goals_conceded" id="goals_conceded" placeholder="enter the goals conceded">
      <input type="text" name="club_id" id="club_id" placeholder="enter the clubid"><br>
      <button class="button-71">submit</button>
    </form>
  </div>

  <div class="soccer"></div>
 
</body>
</html>