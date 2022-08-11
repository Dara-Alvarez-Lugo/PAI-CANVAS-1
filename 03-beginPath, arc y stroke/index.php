<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvas</title>
</head>
<body>
    <canvas id="mycanvas" width=500 height=500>
        <!-- Si el texto aparece es porque tu navegador no soporta canvas -->
        Tu navegador no soporta canvas
    </canvas>

    <script type="text/javascript">
        var cv = document.getElementById('mycanvas');
        var ctx = cv.getContext('2d');

        // ctx.beginPath();
        // ctx.arc(coordenada x, coordenada y, eje, el radio del circulo 1 es la mitad y 2 el circulo completo);
        // ctx.arc(250,250,100,0,1*Math.PI);
        // ctx.stroke();

        ctx.fillStyle = ("rgba(200,0,0)");
        ctx.beginPath();
        ctx.arc(150,150,100,0,2*Math.PI);
        ctx.fill();

        ctx.fillStyle = ("rgba(200,0,0)");
        ctx.beginPath();
        ctx.arc(350,350,100,0,2*Math.PI);
        ctx.stroke();

    </script>


</body>
</html>