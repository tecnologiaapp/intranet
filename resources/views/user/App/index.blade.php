@extends('app')


@section('content')

<style>
#content {
 
    
}

#left, #right {
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
  background-color: rgba(255, 163, 58, 1);
  color: white;
}

		</style>


<section class="work-together-sec" style="padding-top: 100px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Recursos Financieros</h2>
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


   

    <script id="infogram_0_ba691653-e423-4124-be33-98b364bdbc80" title="Untitled dashboard" src="https://e.infogram.com/js/dist/embed.js?5Ai" type="text/javascript"></script>

    <!-- <div class="table-responsive" style="padding-top: 40px;">

    
<table id="customers" style="margin: 0 auto;">
<thead>
<tr>
  <th>Centro de costos</th>
  <th>Nombre</th>
  <th>Proyecto</th>
</tr>
</thead>
<tbody>
<tr>
  <td>336111</td>
  <td> Realizar estudios técnicos de estructuración y revisión de proyectos</td>
  <td>Fortalecimiento en la estructuración, evaluación y promoción</td>
 
</tr>
<tr>
  <td>336112</td>
  <td>Elaborar documentos técnicos que incluyan los requisitos y condiciones de ley</td>
  <td>Fortalecimiento en la estructuración, evaluación y promoción</td>
  
</tr>
<tr>
  <td>336212</td>
  <td> Realizar seguimiento técnico para la transferencia del conocimiento en herramientas para gestión, politicas, planes, proyectos y programas para la 
    administracion territorial
  </td>
  <td>Fortalecimiento en la estructuración, evaluación y promoción</td>
  
</tr>
<tr>
  <td>336311</td>
  <td>Desarrollar estratégias de socialización</td>
  <td>Fortalecimiento en la estructuración, evaluación y promoción</td>
  
</tr>
<tr>
  <td>336312</td>
  <td>Diseñar y desarrollar eventos educativos</td>
  <td>Fortalecimiento en la estructuración, evaluación y promoción</td>
  
</tr>
<tr>
  <td>336211</td>
  <td>Gestionar la articulación pública y privada de proyectos</td>
  <td>Fortalecimiento en la estructuración, evaluación y promoción</td>
  
</tr>




</tbody>
</table>
</div> -->
<!-- 
	<div id="content" style="padding-top: 80px;">
  <div id="left"  style="height: 528px;">
  <canvas id="grafica"  style="width: 565px; height: 400px; display: block; box-sizing: border-box; padding-left: 20px;"></canvas>
  </div>

  <div id="right" style="height: 528px;">
  <canvas id="gf"  style="width: 565px; height: 400px; padding-left: 15px;display: block;box-sizing: border-box;"></canvas>
  </div>
</div>

<div class="sec-title">
    <h3 style="text-transform: initial;">Centros de costos</h3>
  </div>

  <div class="content" style="width: 900px; height: 800px;
  margin-left: auto;
  margin-right: auto;">
  <canvas id="barras" style="display: block;box-sizing: border-box;height: 730px;width: 900px;"></canvas>
  </div> -->

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>

<script>
  
  
  // Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas = ["Alianzas publico privadas"]
// Podemos tener varios conjuntos de datos
const datosVentas2020 = {
    label: "Presupuesto General",
    data: [2425023534], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const datosVentas2021 = {
    label: "Ejecutado",
    data: [1490345233], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
    borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
};

new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            datosVentas2021,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});




  // Obtener una referencia al elemento canvas del DOM
  const $gf = document.querySelector("#gf");
// Las etiquetas son las que van en el eje X. 
const etiqueta = ["336212"]
// Podemos tener varios conjuntos de datos
const general = {
    label: "Presupuesto General",
    data: [315253059], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const ejecutado = {   

    label: "Ejecutado",
    data: [212013471], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
    borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
};

new Chart($gf, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiqueta,
        datasets: [
            general,
            ejecutado,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
        plugins: {
      title: {
        display: true,
        text: 'Transversales',
      }
    },
    }
});



const $barras = document.querySelector("#barras");


new Chart($barras, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: ['336111','Ejecutado', '336112', 'Ejecutado','336311','Ejecutado', '336312','Ejecutado', '336111','Ejecutado','336112','Ejecutado','336211','Ejecutado','336311','Ejecutado','336312','Ejecutado'],
        datasets: [{
            label: 'Presupuesto',
            data: [109782228, 109782228, 44310000, 44310000, 0, 0, 3135075, 0, 1345231892, 737035298, 319443530, 282204236, 121251177,0,121251177,97000000,45365396,8000000],
            fill: false,
            backgroundColor: [
              'rgba(217, 143, 6, 0.8)',
              'rgba(217, 143, 6, 0.2)',
      'rgba(75, 192, 192, 0.8)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(142, 251, 115, 0.9)',
      'rgba(142, 251, 115, 0.2)',
      'rgba(142, 251, 115, 0.8)',
      'rgba(142, 251, 115, 0.2)',
      'rgba(142, 251, 115, 0.7)',
      'rgba(142, 251, 115, 0.2)',
      'rgba(142, 251, 115, 0.6)',
      'rgba(142, 251, 115, 0.2)'
            ], // Color de fondo
            borderColor: [
      'rgb(217, 143, 6)',
      'rgb(217, 143, 6)',
      'rgb(75, 192, 192)',
      'rgb(75, 192, 192)',
      'rgb(142, 251, 115)',
      'rgb(142, 251, 115)',
      'rgb(142, 251, 115)',
      'rgb(142, 251, 115)',
      'rgb(142, 251, 115)',
      'rgb(142, 251, 115)',
      'rgb(142, 251, 115)',
      'rgb(142, 251, 115)'
    ],
    borderWidth: 1,
    tension: 0.1
        }]
    },

    options: {
    indexAxis: 'y',
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
responsive: true,
    plugins: {
      legend: {
        position: 'right',
      },
      title: {
        display: true,
        text: 'Total'
      }
    }
  },

});


</script>

</section>




@stop
