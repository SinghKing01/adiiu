<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>University Dashboard</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
         type="text/css" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/styles.css" rel="stylesheet" />
      <link rel="stylesheet" href="assets/style.css">
   </head>
   <body id="page-top">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
         <div class="container">
            <a class="navbar-brand" href="index.php">University Dashboard</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
               data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
               aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                     href="https://www.uib.cat/">Uib</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                     href="https://github.com/SinghKing99/adiiu">Datos</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Masthead-->
      <header class="masthead bg-primary text-white text-center">
         <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Bienvenidos al Data Dashboard</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
               <div class="divider-custom-line"></div>
               <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
               <div class="divider-custom-line"></div>
            </div>
         </div>
      </header>
      <section class="page-section">
         <div style="border: 3px solid black" id="chart-wrap" class="container">
            <div class="row justify-content-center">
               <div class="col-md-6 col-lg-4 mb-5">
                  <figure class="highcharts-figure">
                     <label id="patterns-enabled-label">
                     <input type="checkbox" id="patterns-enabled" checked>
                     Enable color patterns (Accesibility)
                     </label>
                     <div id="banana"></div>
                     <p class="highcharts-description">
                        Como podemos ver en la gráfica, un plátano aporta una gran cantidad de carbohidratos y azúcares saludables.
                     </p>
                  </figure>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-md-6 col-lg-4 mb-5">
                  <figure class="highcharts-figure">
                     <div id="container"></div>
                     <p class="highcharts-description">
                        Los países más poblados del mundo son China y India. Actualmente están en el proceso del control de maternidad.
                     </p>
                  </figure>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-md-6 col-lg-4 mb-5">
                  <figure class="highcharts-figure">
                     <div id="ventas"></div>
                     <p class="highcharts-description">
                        Una gráfica de línea con el ejemplo de los ingresos y gastos de una empresa X.
                     </p>
                  </figure>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer-->
      <footer class="footer text-center">
         <div class="container">
            <div class="row">
               <!-- Footer Location-->
               <div class="col-lg-4 mb-5 mb-lg-0">
                  <h4 class="text-uppercase mb-4">Ubicación</h4>
                  <p class="lead mb-0">
                     Carretera Valldemosa, 16
                     <br />
                     Universitat de Illes Balears
                  </p>
               </div>
               <!-- Footer Social Icons-->
               <div class="col-lg-4 mb-5 mb-lg-0">
                  <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                     class="fab fa-fw fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                     class="fab fa-fw fa-linkedin-in"></i></a>
                  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
               </div>
               <!-- Footer About Text-->
               <div class="col-lg-4">
                  <h4 class="text-uppercase mb-4">Autor</h4>
                  <p class="lead mb-0">
                     Dilpreet Singh
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- Copyright Section-->
      <div class="copyright py-4 text-center text-white">
         <div class="container"><small>Copyright &copy; Bootstrap - Your Website 2021</small></div>
      </div>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="js/scripts.js"></script>
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
      <script src="code/highcharts.js"></script>
      <script src="code/modules/exporting.js"></script>
      <script src="code/modules/export-data.js"></script>
      <script src="code/modules/accessibility.js"></script>
      <script src="code/modules/pattern-fill.js"></script>
      <script src="code/themes/high-contrast-light.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="js/functions.js"></script>
   </body>
</html>