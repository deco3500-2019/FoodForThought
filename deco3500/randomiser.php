<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<title>Food For Thought</title>
		
	</head>
	<body>
		<div class="text-center">
			<p style="color: grey">Making plan with tray</p>
		</div>
		<!-- <article class="htmleaf-container">
			<header class="htmleaf-header">
			</header> -->
			<div>
				<canvas id="canvas" width="400px" height="400px"></canvas>
				<button class="btn btn-primary " id="btn">Spin</button>
			</div>
		
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Map</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<img src="images/map.png" class="img-fluid" alt="Responsive image">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					</div>
				</div>
				</div>

			<div class="form-group text-center col-xs-12">
				<form calss="form-group center" method="get" action="confirm.php">
					<label>Here's where you are going to eat:</label>
					<input class="form-control" readonly type="text" name="res" id="res">
					<br>
					<button class="btn btn-dark" type="submit">Confirm</button>
					<button type="button" class="btn btn-dark " data-toggle="modal" data-target="#exampleModalCenter">
					Check it on the Map
					</button>
				</form>
			</div>

			<nav class="navbar fixed-bottom navbar-light" style="background-color: #ebebeb;padding-left:13%;padding-right:8%;height:55px;">
			<a class="navbar-brand" href="index.php" style="font-size:11px;">WHEN</a>
			<a class="navbar-brand bg-light" href="where.php" style="font-size:11px;">WHERE</a>
			<a class="navbar-brand" href="confirm.php" style="font-size:11px;">CONFIRM</a>
			</nav>
		<!-- </article> -->

		
		<script>
			var info=["The Wolfe", "Bacchus","The Walunt","Urbane","GOMA","MAlt Dinning","Custom House",
			"Black Hide","Julius Pizzeria","Ristorante Tartufo"];
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
				context.translate(180,200);
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
							context.font="25px";
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
					context.font="20px";
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