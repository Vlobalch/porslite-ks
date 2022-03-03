<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="<?= base_url('/css/mdb.min.css') ?> " />

  <link rel="stylesheet" href="<?= base_url('/css/styles.css') ?>">

  <link rel="stylesheet" href="<?= base_url('/bootstrap-icons/fonts') ?>">

</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-speedometer2 me-3" viewBox="0 0 16 16">
              <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
              <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
            </svg>
            <span>Panel Principal</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people me-3" viewBox="0 0 16 16">
              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
            </svg><span>Terceros</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-boombox me-3" viewBox="0 0 16 16">
              <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm7.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm1.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm-7-1a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm5.5 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
              <path d="M11.5 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm0-1a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM5 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
              <path d="M7 10.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-1 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
              <path d="M14 0a.5.5 0 0 1 .5.5V2h.5a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12.5V.5A.5.5 0 0 1 14 0ZM1 3v3h14V3H1Zm14 4H1v7h14V7Z" />
            </svg><span>Productos</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-clipboard2-check me-3" viewBox="0 0 16 16">
              <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
              <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
              <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z" />
            </svg><span>Servicios</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-dash me-3" viewBox="0 0 16 16">
              <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg><span>Ventas</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-plus me-3" viewBox="0 0 16 16">
              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg><span>Compras</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bank me-3" viewBox="0 0 16 16">
              <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z" />
            </svg><span>Bancos</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-bar-graph me-3" viewBox="0 0 16 16">
              <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z" />
              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
            </svg><span>Reportes</span></a>

          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-sliders me-3" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
            </svg><span>Ajustes</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-building me-3" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
              <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
            </svg><span>Empresa</span></a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
    
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
        </a>
        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="24" alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Mi perfil</a></li>
              <li><a class="dropdown-item" href="#">Configuración</a></li>
              <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">


      <!--Section: Sales Performance KPIs-->
      <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Sales Performance KPIs</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Product Detail Views</th>
                    <th scope="col">Unique Purchases</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Product Revenue</th>
                    <th scope="col">Avg. Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Value</th>
                    <td>18,492</td>
                    <td>228</td>
                    <td>350</td>
                    <td>$4,787.64</td>
                    <td>$13.68</td>
                  </tr>
                  <tr>
                    <th scope="row">Percentage change</th>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-48.8%%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>14.0%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>46.4%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>29.6%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-11.5%</span>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Absolute change</th>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-17,654</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>28</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>111</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>$1,092.72</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>$-1.78</span>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Sales Performance KPIs-->

      <!--Section: Minimal statistics cards-->
      <section>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="fas fa-pencil-alt text-info fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>278</h3>
                    <p class="mb-0">New Posts</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="far fa-comment-alt text-warning fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>156</h3>
                    <p class="mb-0">New Comments</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="fas fa-chart-line text-success fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>64.89 %</h3>
                    <p class="mb-0">Bounce Rate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>423</h3>
                    <p class="mb-0">Total Visits</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-danger">278</h3>
                    <p class="mb-0">New Projects</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-rocket text-danger fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-success">156</h3>
                    <p class="mb-0">New Clients</p>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-user text-success fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-warning">64.89 %</h3>
                    <p class="mb-0">Conversion Rate</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-chart-pie text-warning fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-info">423</h3>
                    <p class="mb-0">Support Tickets</p>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-life-ring text-info fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-info">278</h3>
                    <p class="mb-0">New Posts</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-book-open text-info fa-3x"></i>
                  </div>
                </div>
                <div class="px-md-1">
                  <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-warning">156</h3>
                    <p class="mb-0">New Comments</p>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-comments text-warning fa-3x"></i>
                  </div>
                </div>
                <div class="px-md-1">
                  <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-success">64.89 %</h3>
                    <p class="mb-0">Bounce Rate</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-mug-hot text-success fa-3x"></i>
                  </div>
                </div>
                <div class="px-md-1">
                  <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-danger">423</h3>
                    <p class="mb-0">Total Visits</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-map-signs text-danger fa-3x"></i>
                  </div>
                </div>
                <div class="px-md-1">
                  <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Minimal statistics cards-->

      <!--Section: Statistics with subtitles-->
      <section>
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Total Posts</h4>
                      <p class="mb-0">Monthly blog posts</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <h2 class="h1 mb-0">18,000</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="far fa-comment-alt text-warning fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Total Comments</h4>
                      <p class="mb-0">Monthly blog posts</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <h2 class="h1 mb-0">84,695</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h2 class="h1 mb-0 me-4">$76,456.00</h2>
                    </div>
                    <div>
                      <h4>Total Sales</h4>
                      <p class="mb-0">Monthly Sales Amount</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-heart text-danger fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h2 class="h1 mb-0 me-4">$36,000.00</h2>
                    </div>
                    <div>
                      <h4>Total Cost</h4>
                      <p class="mb-0">Monthly Cost</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-wallet text-success fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Statistics with subtitles-->
    </div>
  </main>
  <!--Main layout-->

  <!-- MDB -->
  <script type="text/javascript" src="<?= base_url('/js/mdb.min.js') ?> "></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>