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

        ctx.moveTo(0,0);
        ctx.lineTo(250,250);
        ctx.stroke();

        ctx.fillStyle = ("rgba(200,0,0)");
        ctx.moveTo(190,250);
        ctx.lineTo(300,150);
        ctx.lineTo(250,300);
        ctx.fill();

    </script>
    
</body>
</html>