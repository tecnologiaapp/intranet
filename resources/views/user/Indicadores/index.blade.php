@extends('app')

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

@section('content')

<style>
#content {
  
}

#left, #center, #right {
    display: inline-block;
    width: 640px;
    height: 400px;
}

* {
				margin:0px;
				padding:0px;
			}
			
	
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}

      #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 830px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:rgba(177, 177, 177, 0.8);
  color: black;
}
    
</style>

<section class="work-together-sec" style="padding-top: 100px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Presupuesto</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="page-content v4"  style="padding-top: 0px;">
  
  
    <div id="header">
      <ul class="nav">
				<li><a href="{{ route('user.Indicadores.index') }}">Presupuesto App</a></li>
				<li><a href="#">Subdirección paisaje</a>
					<ul>
						<li><a href="{{ route('user.Paisaje.urbano') }}">Paisaje urbano (334)</a></li>
						<li><a href="{{ route('user.Paisaje.patrimonio') }}">Paisaje y patrimonio (326)</a></li>
					  <li><a href="{{ route('user.Paisaje.prado') }}">Paisaje prado (333)</a></li>
            <li><a href="{{ route('user.Paisaje.POT') }}">Paisaje POT (335)</a></li>
					</ul>
				</li>
				<li><a href="{{ route('user.App.index') }}">Subdirección APP</a></li>
				<li><a href="{{ route('user.Inmo.index') }}">Subdirección Inmobiliaria</a></li>
        <li><a href="{{ route('user.Paisaje.index') }}">Convenios Interadministrativos</a></li>
			</ul>
    </div>



    <!-- <div class="table-responsive" style="padding-top: 100px;">
    
    
  <table id="customers" style="margin: 0 auto;">
  <thead>
    <tr>
      <th>Agencia APP</th>
      <th>Total</th>
      <th>Comprometido</th>
      <th>Disponible</th>
      <th>Porcentaje ejecución</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>Funcionamiento</td>
      <td> $ 18.698.056</td>
      <td> $ 13.289.447.560</td>
      <td> $ ------------</td>
      <td>50%</td>
    </tr>
    <tr>
      <td>POAI - Inversión</td>
      <td> $ 18.698.056</td>
      <td> $ 13.289.447.560</td>
      <td> $ ------------</td>
      <td>50%</td>
    </tr>
    <tr>
      <td>Convenios interadministrativos</td>
      <td>$ 7.722.624.869</td>
      <td>$ 4.514.547.605</td>
      <td>$ 3.208.077.264</td>
      <td>58%</td>
    </tr>
    <tr>
      <td>Presupuesto total</td>
      <td>$ 34.143.305.036</td>
      <td>$ 17.803.995.165</td>
      <td>$ 3.208.077.264</td>
      <td>52%</td>
    </tr>
    <tr>
      <td>Saldo Pendiente de incorporación</td>
      <td>$ 34.143.305.036</td>
      <td>$ 17.803.995.165</td>
      <td>$ 3.208.077.264</td>
      <td>52%</td>
    </tr>
    
    
  </tbody>
</table>
</div> -->


    <script id="infogram_0_e2b2a7ab-6b91-44c2-8732-53d3eaddeade" title="Presupuesto App" src="https://e.infogram.com/js/dist/embed.js?JJa" type="text/javascript"></script>


</section>




@stop
