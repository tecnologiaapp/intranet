@extends('app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<section class="work-together-sec" style="padding-top: 156px; padding-bottom: 15px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Mesa de ayuda</h2>
         <p>Accede a todos los instructivos para realizar los diferentes procesos que se requieren en la Agencia APP</p>
      </div>
   </div>
</section>

<section  class="why-us">
      <div class="container" >

        <div class="row" style="justify-content: space-around">

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box">
              <span>Documentos relacionados</span>
            <div align="center"> 
                <a href="{{ asset('pdf/Documentos-relacionados.pdf')}}" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="200px;" height="200px;">
                </a>
            </div>
              <h4>Lorem ipsum dolor sit amet consectetur.</h4>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box  h-100 d-flex flex-column justify-content-between">
              <span>Documentos externos</span>
              <div align="center">
              <a href="{{ asset('pdf/Documentos-Externo.pdf')}}" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="200px;" height="200px;">
                </a>
              </div>
              <h4>Lorem ipsum dolor sit amet consectetur.</h4>
              
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box">
              <span>Gestión electrónica </span>
              <div align="center">
              <a href="https://drive.google.com/file/d/1G4mHdfl1rngmcI8_ZZ3eHLyEBSJ8d5YN/view" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="200px;" height="200px;">
                </a>
              </div>
              <h4>Lorem ipsum dolor sit amet consectetur.</h4>
              
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box">
              <span>Introducción a la interfaz de SGD Mercurio</span>
              <div align="center">
              <a href="https://drive.google.com/file/d/1G6OfUQbj17JCJzktuOyvX1mHQ2o-Djs5/view" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="200px;" height="200px;">
                </a>
              </div>
              <h4>Lorem ipsum dolor sit amet consectetur.</h4>
              
            </div>
          </div>

        </div>

        <div class="row pt-5" style="justify-content: space-around">

            <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box">
                <span>Generar comunicación interna</span>
            <div align="center"> 
                <a href="https://drive.google.com/file/d/1Fc_Q324OspzGu4APzA61vB4Y_1Ub4bFi/view" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="200px;" height="200px;">
                </a>
            </div>
            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
            </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box">
                <span>Radicar Documento Externo</span>
                <div align="center">
                <a href="https://drive.google.com/file/d/1FWAlAVLpnUXSHWqjosZu0hCTpO0bA_me/view" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="200px;" height="200px;">
                </a>
                </div>
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                
            </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box">
                <span>Colocar comentarios</span>
                <div align="center">
                <a href="https://drive.google.com/file/d/1GEHaRgaWe4rKGxZRLROgxtLpM0LxHgyk/view" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="200px;" height="200px;">
                </a>
                </div>
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                
            </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box">
                <span>Consultar historia de los documentos</span>
                <div align="center">
                <a href="https://drive.google.com/file/d/1G2UnGhQcKGH0IaZK9v0T8473vRWC4vfB/view" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="200px;" height="200px;">
                </a>
                </div>
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                
            </div>
            </div>

        </div>


      </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop