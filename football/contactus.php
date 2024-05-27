<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>

*::selection{
margin: 0px;
padding: 0px;
background-color: yellow;
}
body{
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-color:#98A8D1;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#headder{
 background-color:#152238;
 position: fixed;
 width:100%;
 top:0px;
 height:87px;
 
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

p {
margin: 0 0 5px;
}
.main-block {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
min-height: 100vh;
background:#92a8d1;
}
form {
padding: 25px;
margin: 25px;
box-shadow: 0 2px 5px #f5f5f5; 
background: #f5f5f5; 
}
.fas {
margin: 25px 10px 0;
font-size: 72px;
color: #fff;
}
.fa-envelope {
transform: rotate(-20deg);
}
.fa-at , .fa-mail-bulk{
transform: rotate(10deg);
}
input, textarea {
width: calc(100% - 18px);
padding: 8px;
margin-bottom: 20px;
border: 1px solid #1c87c9;
outline: none;
}
input::placeholder {
color: #666;
}
button {
width: 100%;
padding: 10px;
border: none;
background:#152238; 
font-size: 16px;
font-weight: 400;
color: #fff;
}
button:hover {
background: #2371a0;
}    
@media (min-width: 568px) {
.main-block {
flex-direction: row;
}
.left-part, form {
width: 50%;
}
.fa-envelope {
margin-top: 0;
margin-left: 20%;
}
.fa-at {
margin-top: -10%;
margin-left: 65%;
}
.fa-mail-bulk {
margin-top: 2%;
margin-left: 28%;
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
  top:35px;
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
    
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
      </div>
      <form action="insertcontactus.php" method="post">
        <h1>Contact Us</h1>
        <div class="info">
          <input class="fname" type="text" id="name" name="name" placeholder="Full name">
          <input type="text" id="email" name="email" placeholder="Email">
          <input type="text" id="number" name="number" placeholder="Phone number">
          
          <input type="text" id="website" name="website" placeholder="Website">
          <input type="text" id="message" name="message" placeholder="enter message">
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
    <div class="soccer"></div>
  </body>
</html>