<?php
// Inclui o arquivo de configuração

include('config/config.php');


/*
// Inclui o arquivo de verificação de login
include('index/verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('index/redirect.php');
*/

include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetShop | Gestão</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./dist/css/adminx.css" media="screen" />

    <!--
      # Optional Resources
      Feel free to delete these if you don't need them in your project
    -->
  </head>
  <body>
    <div class="adminx-container">
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
          <img src="./demo/img/logo.jpg" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
          PetShop
        </a>

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <!-- Notificatoins -->
          
          <!-- Notifications -->
          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/1840618-imagem-perfil-icone-masculino-icone-humano-ou-pessoa-sinal-e-simbolo-gr%C3%A1tis-vetor.jpg" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item text-danger" href="logout.php">Sair</a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="index.html" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Inicio
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
              <span class="sidebar-nav-icon">
                <i data-feather="calendar"></i>
              </span>
              <span class="sidebar-nav-name">
                Atendimentos
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
              <li class="sidebar-nav-item">
                <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Cadastros
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Listar todos
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Atendimento Médico
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Atendimento Domestico
                  </span>
                </a>
              </li>

            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#servico" aria-expanded="false" aria-controls="navForms">
              <span class="sidebar-nav-icon">
                <i data-feather="award"></i>
              </span>
              <span class="sidebar-nav-name">
                Serviços
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="servico">
              <li class="sidebar-nav-item">
                <a href="./layouts/form_elements.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Cadastrar
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/form_advanced.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Listar todos
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#pets" aria-expanded="false" aria-controls="navTables">
              <span class="sidebar-nav-icon">
                <i data-feather="heart"></i>
              </span>
              <span class="sidebar-nav-name">
                Pets
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="pets">
              <li class="sidebar-nav-item">
                <a href="./layouts/tables.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Cadastrar
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/tables_data.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Listar todos
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#donos" aria-expanded="false" aria-controls="navForms">
              <span class="sidebar-nav-icon">
                <i data-feather="user"></i>
              </span>
              <span class="sidebar-nav-name">
                Donos
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="donos">
              <li class="sidebar-nav-item">
                <a href="./layouts/form_elements.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Cadastrar
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/form_advanced.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Listar todos
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="navForms">
              <span class="sidebar-nav-icon">
                <i data-feather="unlock"></i>
              </span>
              <span class="sidebar-nav-name">
                Usuários
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="user">
              <li class="sidebar-nav-item">
                <a href="user/add.php" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Cadastrar
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="user/usuarios.php" class="sidebar-nav-link">
                  <span class="sidebar-nav-name">
                    Listar todos
                  </span>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </div><!-- Sidebar End -->

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Painel</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Painel</h1>
            </div>

            <div class="row">
              
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="calendar"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Atedimentos</div>
                      <h3 class="card-title mb-0">
                        0
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="heart"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Pest</div>
                      <h3 class="card-title mb-0">
                        0
                      </h3>
                    </div>
                  </div>
                </div>
              </div>              

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="user"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Donos</div>
                      <h3 class="card-title mb-0">
                        0
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="award"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Serviços</div>
                      <h3 class="card-title mb-0">
                        0
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
  </body>
</html>