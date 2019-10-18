<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<script type="text/javascript" src="js/main.js"></script>
  <style type="text/css">
  	#canvas{
	    background:#eeeeee;
	}
	</style>
  
  </head>
  <body>
  <div class="text-center">
    <p>Making plan with tray</p>
  </div>
      <article class="htmleaf-container">
		      <header class="htmleaf-header">
		      </header>
		  <div style="width:500px;margin:30px auto 0 auto;text-align:center;">

			<canvas id="canvas" width="500px" height="500px"></canvas>
      <button class="btn btn-dark btn-lg" id="btn" style="margin-top:20px;">start</button>
    

      </div>
      <div class="center">
      <form calss="form-group center" method="get" action="confirm.php">
        <input readonly type="text" name="res" id="res">
        <button type="submit">Confirm</button>
      </form>
      </div>

	    </article>
  <script>
    var info=["Burge Urge", "KFC","Hungry Jack","Subway","Lakeside Cafe","Wordsmiths","KENKO","KaiKai","Thai"];
var color=[];
var step = 2*Math.PI/10;
var outerR = 150;
var interR = 50;
var beginAngle=50;
var radio = 0.95;
var t = null;
window.onload=function() {
	  for ( var i = 0; i < 10; i++) {
      if(i % 2){
        color.push("rgb(188,230,247)");
      }else{
      color.push("rgb(66,194,245)");
      }
	  }
	  var canvas = document.getElementById("canvas");
	  var context = canvas.getContext("2d");
	  context.translate(250,250);
	  createArrow(context);
	  init(context);
	  document.getElementById("btn").onclick=function(){
			 if(t){
					return false;
			 }
			 var step = beginAngle +Math.random()*10;
			 var angle = 0;
			 t = setInterval(function(){
					step *=radio;
					if(step <= 0.1){
						   clearInterval(t);
						   t =null;
						   var pos = Math.ceil(angle / 36);
						   var res = info[10-pos];
						   context.save();
						   context.beginPath();
						   context.font="23px";
						   context.fillStyle="#000";
						   context.textAlign="center";
						   context.textBaseline="middle";
						   context.fillText(res,0,0);

						   context.restore();
						   document.getElementById("res").value = res ;
					}else{
						   context.clearRect(-250,-250,500,500);
						   angle+=step;
						   if(angle > 360){
								  angle -=360;
						   }
						   context.save();
						   context.beginPath();
						   context.rotate(angle * Math.PI/180);
						   init(context);
						   context.restore();
						   createArrow(context);
					}
			 },60);
	  };
};

function createArrow(context){
	  context.save();
	  context.beginPath();
	  context.lineWidth = 5;
	  context.moveTo(170,0);
	  context.lineTo(180,15);
	  context.lineTo(180,5);
	  context.lineTo(250,5);
	  context.lineTo(250,-5);
	  context.lineTo(180,-5);
	  context.lineTo(180,-15);
	  context.closePath();
	  context.fill();
	  context.restore();
}
function init(context){
	  for ( var i = 0; i < 10; i++) {
			 context.save();
			 context.beginPath();
			 context.moveTo(0,0);
			 context.fillStyle=color[i];
			 context.arc(0,0,outerR,i*step,(i+1)*step);
			 context.fill();
			 context.restore();
	  }
	 
	  context.save();
	  context.beginPath();
	  context.fillStyle="#fff";
	  context.arc(0,0,interR,0,2*Math.PI);
	  context.fill();
	  context.restore();
	 
	  for ( var i = 0; i < 10; i++) {
			 context.save();
			 context.beginPath();
			 context.fillStyle="#000";
			 context.font="15px";
			 context.textAlign="center";
			 context.textBaseline="middle";
			 context.rotate(i*step+step/2);
			 context.fillText(info[i],(outerR + interR)/2,0);
			 context.restore();
	  }
}
function getColor(){
	  var random = function(){
			 return Math.floor(Math.random()*255);
	  }
	  return "rgb("+66+","+194+","+245+")";
}

    
  </script>
  
  </body>


</html>