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
  background-color: rgba(72, 223, 223, 0.82);
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



    <script id="infogram_0_7ef65b2e-0779-4e99-b8c5-63805099b27d" title="Copy: Subdirección App" src="https://e.infogram.com/js/dist/embed.js?5Oy" type="text/javascript"></script>

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
    <td>337111</td>
    <td>  Gestionar oportunidades inmobiliarias</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
   
  </tr>
  <tr>
    <td>337112</td>
    <td>Brindar apoyo tecnologico al proyecto</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
    
  </tr>
  <tr>
    <td>337121</td>
    <td>Gestionar el plan rector de inversión público y privada para bienes inmuebles</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
    
  </tr>
  <tr>
    <td>337122</td>
    <td>Realizar socializaciones con el sector privado para promover la vinculación de capital privado</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
    
  </tr>
  <tr>
    <td>337211</td>
    <td>Realizar estudios de elegibilidad para proyectos inmobiliarios</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
    
  </tr>
  <tr>
    <td>337221</td>
    <td>Realizar la estructuración de proyectos inmobiliarios</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
    
  </tr>
  <tr>
    <td>337222</td>
    <td>Apoyar técnicamente la estructuración y supervisión de proyectos inmobiliarios</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
    
  </tr>
  <tr>
    <td>337223</td>
    <td>Apoyar institucionalmente la estructuración y supervisión de proyectos  inmobiliarios</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
    
  </tr>
  <tr>
    <td>337231</td>
    <td> Apoyar técnicamente la gestión precontractual y comercial para proyectos inmobiliarios</td>
    <td>Generación de oportunidades y estructuración de proyectos</td>
    
  </tr>
  
 
  
</tbody>
</table>
</div> -->

	<!-- <div id="content" style="padding-top: 80px;">
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
const etiquetas = ["Inmobiliaria"]
// Podemos tener varios conjuntos de datos
const datosVentas2020 = {
    label: "Presupuesto General",
    data: [1804484156], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const datosVentas2021 = {
    label: "Ejecutado",
    data: [920230560], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
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
		plugins: {
      title: {
        display: true,
        text: 'Subdirección inmobiliaria',
      }
    },
    }
});




  // Obtener una referencia al elemento canvas del DOM
  const $gf = document.querySelector("#gf");
// Las etiquetas son las que van en el eje X. 
const etiqueta = ["337223"]
// Podemos tener varios conjuntos de datos
const general = {
    label: "Presupuesto General",
    data: [203494042], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const ejecutado = {   

    label: "Ejecutado",
    data: [184764838], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
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
        labels: ['337111','Ejecutado', '337112', 'Ejecutado','337121','Ejecutado', '337122','Ejecutado', '337211','Ejecutado','337222','Ejecutado','337223','Ejecutado','337111','Ejecutado','337121','Ejecutado','337122','Ejecutado','337221','Ejecutado','337222','Ejecutado','337222','Ejecutado','337231','Ejecutado'],
        datasets: [{
            label: 'Presupuesto',
            data: [122231518, 32398524, 85950278, 31515100, 68355440, 41677722, 15000000, 0, 5000000, 3000000, 15000000, 15000000, 12413857,0,32841051,0,15000000,0, 92791900,80000000,411866597,219091132,99672655,27631758,579099968,285151486,45766850,0],
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
