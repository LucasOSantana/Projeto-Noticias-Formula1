<!DOCTYPE html>
<html>

<head>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Stylesheet -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Data Table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/sc-2.0.3/sb-1.0.0/sp-1.2.1/datatables.min.css" />

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--add this to have this styles on all pages-->
  @yield('css')

  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
  <!--for adding additional styles-->
</head>

<body>

  <!-- Navbar Area Start -->
  <header>
    <nav class="navbar bg-black navbar-expand-lg navbar-dark" style="margin: 0; padding: 0;">

      <div class="row col-12" style="margin: 0; padding: 0;">
        <div id="leftSideNav" class="col-sm-6 ml-0">
          <a class="navbar-brand logo-f1" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="col-sm-6">
            <div class="mt-2 collapse  navbar-collapse justify-content-end" id="navbarNav">
          
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link color-white" href="login"><i class="far fa-star"></i> Pilotos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link color-white" href="new_user"><i class="fas fa-flag-checkered"></i> Equipes</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link color-white" href="new_user"><i class="fas fa-trophy"></i> Campeonatos</a>
                
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link color-white" href="new_user"><i class="fas fa-trophy"></i> Recordes</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('dashboard')}}"><i class="far fa-id-badge"></i></i> Profile</a>
                    <a class="dropdown-item" href="{{url('contactm')}}"><i class="fas fa-envelope-open-text"></i> Messages</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                  </div>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Navbar Area End -->


  @yield('content')
  <!--for adding your content-->

  <!-- Add Footer Area Start -->

  <!-- Add Footer Area End -->

  <!-- **** All JS Files here ***** -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/sc-2.0.3/sb-1.0.0/sp-1.2.1/datatables.min.js"></script>
  <!--add this to have this scripts on all pages-->
  @yield('scripts')
  <!--for adding additional scripts-->

</body>

</html>