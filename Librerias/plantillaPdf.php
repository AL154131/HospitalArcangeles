<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type='text/css'>
		body {font-family: sans-serif;}
		h1 {
			color: white;
			background-color: dodgerblue;
			text-align: center;
		}
		#Folio {
			width:100%;
			display: block;
			float: right;
			overflow: hidden;
			text-align: right;
		}
		.tablaCitas{
		  /*border-collapse: collapse;*/
		  width: 100%;
		  margin-top: 35px;
		  margin-bottom: 20px;
		}
		.tablaCitas tr:nth-child(even){background-color: #f2f2f2;}
		.tablaCitas tr:hover {background-color: #ddd;}
		.tablaCitas td, #tablaCitas th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}
		.tablaCitas th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: dodgerblue;
		  color: white;
		}
		#cont2 {
			width: 40%;
			margin-left: auto;
		}

	</style>
</head>

<body>
	<h1>Hospital Arcangeles</h1>

	<p>
	Av. Paseo de la Victoria 4370, Partido Iglesias, 32618.<br>
	Cd Juarez, Chihuahua, Mexico.<br>
	52(656)222 5825.<br> 
	52(656)131 2585.<br>
	</p>

	<div id='Folio'>
		<p>Numero de folio: </p>
		<p>Fecha: </p>
	</div>

	<div id='contTabla'>
		<h2>Nombre del cliente</h2>
		<table class='tablaCitas'>
			<tr>
				<th>Nombre del medico</th>>
				<th>Especialidad</th>
				<th>Consultorio</th>
				<th>Telefono</th>
				<th>Fecha de cita</th>
			</tr>
			<tr>
				<td>fmff</td>
				<td>fmff</td>
				<td>fmff</td>
				<td>fmff</td>
				<td>fmff</td>
			</tr>
		</table>
	</div>
	
	<div id='cont2'>
		<table class='tablaCitas' id='pago'>
			<tr>
				<th>Total</th>
				<td>Cantidad</td>
			</tr>
			<tr>
				<th>Pagado</th>
				<td>Cantidad</td>
			</tr>
			<tr>
				<th>Adeudo</th>
				<td>Cantidad</td>
			</tr>
		</table>
	</div>

	<div>
		<br><br><br>
		<center>
		<img src='../Imagenes/FooterPdf.png'>
		</center>
	</div>
</body>
</html>