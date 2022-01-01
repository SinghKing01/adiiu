<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Freelancer - Start Bootstrap Theme</title>
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
      <script src="jquery-3.5.1.min.js"></script>
      <?php include("config.php")?>
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
                  <h4 class="text-uppercase mb-4">Around the Web</h4>
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
      <script type="text/javascript">
         var clrs = Highcharts.getOptions().colors;
         var pieColors = [clrs[2], clrs[0], clrs[3], clrs[1], clrs[4]];
         
         // Get a default pattern, but using the pieColors above.
         // The i-argument refers to which default pattern to use
         function getPattern(i) {
             return {
                 pattern: Highcharts.merge(Highcharts.patterns[i], {
                     color: pieColors[i]
                 })
             };
         }
         
         // Get 5 patterns
         var patterns = [0, 1, 2, 3, 4].map(getPattern);
         
         var chart = Highcharts.chart('banana', {
             chart: {
                 type: 'pie'
             },
         
             title: {
                 text: 'Nutrients in a Banana'
             },
         
             subtitle: {
                 text: 'Source: Wikipedia'
             },
         
             colors: patterns,
         
             tooltip: {
                 valueSuffix: '%',
                 borderColor: '#8ae'
             },
         
             plotOptions: {
                 series: {
                     dataLabels: {
                         enabled: true,
                         connectorColor: '#777',
                         format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                     },
                     cursor: 'pointer',
                     borderWidth: 3
                 }
             },
         
             series: [{
                 name: 'Screen reader usage',
                 data: [
                             <?php
            $platanoss = $con->query("SELECT * FROM Banana");
            while ($data = $platanoss->fetch_assoc()) {
                echo "
                    {
                    name: '".$data['Nutrients']."',
                    y: ".$data['Grams']."
                    },
                ";
            }
            ?>
                         ]
             }],
         
             responsive: {
                 rules: [{
                     condition: {
                         maxWidth: 500
                     },
                     chartOptions: {
                         plotOptions: {
                             series: {
                                 dataLabels: {
                                     format: '<b>{point.name}</b>'
                                 }
                             }
                         }
                     }
                 }]
             }
         });
         
         // Toggle patterns enabled
         document.getElementById('patterns-enabled').onclick = function () {
             chart.update({
                 colors: this.checked ? patterns : pieColors
             });
         };
      </script>
      <script type="text/javascript">
         Highcharts.chart('container', {
         chart: {
             type: 'bar'
         },
         title: {
             text: 'Los cincos países más poblados del mundo'
         },
         subtitle: {
             text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
         },
         xAxis: {
             categories: [
                 <?php
            $population = $con->query("SELECT * FROM population");
            while ($data = $population->fetch_assoc()) {
                echo "
                    '".$data['country']."',
                ";
            }
            ?>
             ],
             title: {
                 text: null
             }
         },
         yAxis: {
             min: 0,
             title: {
                 text: 'Population',
                 align: 'high'
             },
             labels: {
                 overflow: 'justify'
             }
         },
         plotOptions: {
             bar: {
                 dataLabels: {
                     enabled: true
                 }
             }
         },
         legend: {
             layout: 'vertical',
             align: 'right',
             verticalAlign: 'top',
             x: -40,
             y: 80,
             floating: true,
             borderWidth: 1,
             backgroundColor:
                 Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
             shadow: true
         },
         credits: {
             enabled: false
         },
         series: [{
             name: 'Población',
             data: [
                 //107, 31, 635, 203, 2
                 <?php
            $poblacion = $con->query("SELECT * FROM population");
            while ($datos = $poblacion->fetch_assoc()) {
                echo "
                ".$datos['population'].",
                ";
            }
            ?>
             ]
         }]
         });
      </script>
      <script type="text/javascript">
         Highcharts.chart('ventas', {
         
             title: {
                 text: 'Comparisión Ventas-Gastos EmpresaX'
             },
         
             yAxis: {
                 title: {
                     text: 'Cantidad en Euros'
                 }
             },
         
             xAxis: {
                title: {
                     text: 'Mes del año'
                 },
                 accessibility: {
                     rangeDescription: 'Range: 1 to 12'
                 }
             },
         
             legend: {
                 layout: 'vertical',
                 align: 'right',
                 verticalAlign: 'middle'
             },
         
             plotOptions: {
                 series: {
                     label: {
                         connectorAllowed: false
                     },
                     pointStart: 1
                 }
             },
         
             series: [{
                 name: 'Ventas',
                 data: [
                     <?php
            $sellings = $con->query("SELECT * FROM Ventas");
            while ($data = $sellings->fetch_assoc()) {
                echo "
                   ".$data['Ventas']."
                ,";
            }
            ?>
                     ]
             }, {
                 name: 'Gastos',
                 data: [
                     <?php
            $gastos = $con->query("SELECT * FROM Ventas");
            while($data = $gastos->fetch_assoc()) {
                echo "
                   ".$data['Gastos']."
                ,";
            }
            ?>
                     ]
             }],
         
             responsive: {
                 rules: [{
                     condition: {
                         maxWidth: 500
                     },
                     chartOptions: {
                         legend: {
                             layout: 'horizontal',
                             align: 'center',
                             verticalAlign: 'bottom'
                         }
                     }
                 }]
             }
         
         });
      </script>
   </body>
</html>