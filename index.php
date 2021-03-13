<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TECtop</title>
	<style type="text/css">
		*{
			font-family: sans-serif;
		}
		body{
			background-image: url("../img/fron.jpg");
			background-color: #448cad;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			overflow: hidden;
		}
		.cuadro1{
			right: 80%;
			position: absolute;
			width: 500px;
			height: 20px;
			background: #5896E2;
			top:40%;
			transition: right 10s ease-in-out;
			/*box-shadow: 0px 0px 10px white;*/
			border-radius: 2px;
		}

		.cuadro2{
			left: 80%;
			top:43%;
			position: absolute;
			width: 500px;
			height: 20px;
			background: #43FFB6;
			transition: left 10s ease-in-out;
			/*box-shadow: 0px 0px 10px white;*/
			border-radius: 2px;
		}
		.cuadro3{
			right: 80%;
			position: absolute;
			width: 500px;
			height: 20px;
			background: #5896E2;
			top:47%;
			transition: right 10s ease-in-out;
			/*box-shadow: 0px 0px 10px white;*/
			border-radius: 2px;
		}

		.cuadro4{
			left: 80%;
			top:50%;
			position: absolute;
			width: 500px;
			height: 20px;
			background: #43FFB6;
			transition: left 10s ease-in-out;
			/*box-shadow: 0px 0px 10px white;*/
			border-radius: 2px;
		}
		h1{
			position: absolute;
			top:20%;
			left: 25%;
			font-size: 70px;
			text-shadow: 0px 0px 25px yellow;
			color: white;
		}
		h2{
			opacity: 0;
			position: absolute;
			top:40%;
			left: 45%;
			/*text-shadow: 0px 0px 25px red;*/
			color: white;
			transition: opacity 10s ease-in-out;
		}
		button{
			opacity: 1;
			position: absolute;
			right: 42%;
			bottom: 20%;
			padding: 20px 80px;
			border-radius: 20px;
			/*transition: opacity 20s ease-in-out;*/
			box-shadow: 0px 0px 25px blue;
		}
		button:hover{
			box-shadow: 0px 0px 25px red;
		}

	</style>
</head>
<body>
	<h1>Bienvenido a TECtop</h1>
	<div class="cuadro1" id="cuadro1"></div>
	<div class="cuadro2" id="cuadro2"></div>
	<div class="cuadro3" id="cuadro3"></div>
	<div class="cuadro4" id="cuadro4"></div>
	<a href="load.php"><button id="button"><b>Entrar</b></button></a>
	<script type="text/javascript">

		window.addEventListener("load", function(){
			document.getElementById("cuadro1").style.right = '0px';
			document.getElementById("cuadro2").style.left = '0px';
			document.getElementById("cuadro3").style.right = '0px';
			document.getElementById("cuadro4").style.left = '0px';
			document.getElementById("h2").style.opacity = '1';
		}, false)
	</script>
</body>
</html>