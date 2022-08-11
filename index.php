<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Canvas
	</title>
	<style type="text/css">
		body{
			width: 100%;
		}
		canvas{
			background-color: rgb(199, 181, 181);
			margin: auto; 
		} 
	</style>
</head>
<body>
	<canvas id="mycanvas" width="500" height="500">
		Tu navegador no soporta canvas
	</canvas>

	<script type="text/javascript">
		
		var cv = document.getElementById('mycanvas');
		var ctx = cv.getContext('2d');

		//cuadrado
		ctx.fillStyle = "rgb(200,0,0)";
		ctx.fillRect(10,10,55,50);

		ctx.fillStyle = "rgba(0,0,200,0.5)"
		ctx.fillRect(30,30,55,50);

		//líneas
		ctx.moveTo(0,0);
		ctx.lineTo(250,250);
		ctx.stroke();

		ctx.moveTo(150,150);
		ctx.lineTo(300,250);
		ctx.lineTo(250,300);
		ctx.lineTo(150,150);
		ctx.stroke();  


		//arc
		ctx.beginPath();
		ctx.arc(250,250,100,0,1.5*Math.PI);
		ctx.fill();

		//text
		ctx.font = "30px Arial";
		ctx.fillText("Jonatan Soto",150,30)

		ctx.strokeText("Otro gato",150,80);

	</script>

</body>
</html>












