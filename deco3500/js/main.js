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
			 color.push(getColor());
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
						   context.fillStyle="#f00";
						   context.textAlign="center";
						   context.textBaseline="middle";
						   context.fillText(res,0,0);
						   context.restore();
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
	  return "rgb("+random()+","+random()+","+random()+")";
}