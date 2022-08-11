<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>canvas</title>

    <style>
        canvas{
        background-color:cyan;

        }
    </style>
</head>
<body>
    <canvas id="mycanvas"width="500" height="500">
        tu navegador no soporta canvas
    </canvas>
    <script type="text/javascript">
         var cv = document.getElementById('mycanvas');
         var ctx = cv.getContext('2d');

         /*ctx.strokeStyle="white";
         ctx.strokeRect(50,50,150,150);

         ctx.strokeStyle="red";
         ctx.strokeRect(150,150,150,150);*/

        //cuadrado trabajo 1
         /*ctx.fillStyle="rgb(200,0,0)";
         ctx.fillRect(10,10,55,50);

         ctx.fillStyle = "rgba(0,0,200,0.5)";
         ctx.fillRect(50,50,55,50);

         ctx.fillStyle = "rgba(10,10,180,0.6)";
         ctx.fillRect(90,90,55,50);*/
        
         //lineas trabajo 2
        /* ctx.moveTo(0,0);
         ctx.lineTo(200,200);
         ctx.stroke();

        ctx.fillStyle="rgb(0,0,200,0.5)";
         ctx.moveTo(200,200);
         ctx.lineTo(400,250);
         ctx.lineTo(280,300);
        ctx.fill();*/
       

        //circulo Trabajo 3
        
        /*ctx.strokeStyle="blue";
        ctx.beginPath();
        ctx.arc(150,150,100,0,2*Math.PI);
        ctx.stroke();

        ctx.fillStyle = "rgba(0,0,200,0.5)";
        ctx.beginPath();
        ctx.arc(300,300,100,0,2*Math.PI);
        ctx.fill();*/
      
        //Texto Trabajo 4
        /*
        ctx.fillStyle = "blue"
        ctx.font="30px Arial";
        ctx.fillText("Hola Mundo",150,200);

        ctx.strokeStyle = "blue"
        ctx.strokeText("Hola Mundo",150,280);*/

    </script>

</body>
</html>










