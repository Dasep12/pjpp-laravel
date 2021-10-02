<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

  <title>{{ $title }}</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/assets/css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
  <script src="/assets/js/fontawesome.min.js">
  </script>
  <link href="/assets/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
  <script src="/assets/js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class=" justiy-content-center">
          <center>
            <img class="img-fluid mt-2" width="90px" src="/assets/img/logo.png">
          </center>
        </div>
        <div class="form-group mt-2">
          <center>
            <a href="" class="btn btn-sm btn-danger">Logout</a>
            <a href="" class="btn btn-sm btn-success">Info</a>
          </center>
        </div>
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kendaraan">
                <span data-feather="file"></span>
                Perbaikan Kendaraan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="utility">
                <span data-feather="shopping-cart"></span>
                Perbaikan Utility
              </a>
            </li>
          </ul>
          <!-- 
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul> -->
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <!-- content website -->
        @yield('content')
        <!-- content website -->
      </main>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/assets/js/jquery.progressTimer.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/bootstrap-select/js/bootstrap-select.js"></script>

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

  <script>
    feather.replace()
  </script>
</body>

</html>