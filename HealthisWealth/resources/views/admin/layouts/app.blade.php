<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Is Wealth</title>
  <link href="{{ asset('css/library/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('css/library/bootstrap5.0.2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/library/fontawesome.all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('js/library/jquery.3.6.0.js') }}"></script>
  <script src="{{ asset('js/common.js') }}"></script>
</head>

<body>

  <div class="container-fluid">
    <div class="row g-0">
      <nav class="col-2 bg-light pr-3">
        <h1 class="h4 py-3 text-center text-primary">
          <i class="fas fa-stethoscope"></i>
          <span class="d-none d-lg-inline">
            Health is Wealth
          </span>
        </h1>
        <div class="list-group text-lg-left">
          <span class="list-group-item disabled d-none d-lg-block">
            <small>CONTROLS</small>
          </span>
          <a href="" class="list-group-item list-group-item-action active">
            <i class="fas fa-home"></i>
            <span class="d-none d-lg-inline">Dashboard</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-chart-line"></i>
            <span class="d-none d-lg-inline">Statistics</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-users"></i>
            <span class="d-none d-lg-inline">Users</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <i class="far fa-list-alt"></i>
            <span class="d-none d-lg-inline">Posts</span>
          </a>
        </div>
        <div class="list-group mt-4 text-lg-left">
          <span class="list-group-item disabled d-none d-lg-block">
            <small>ACTIONS</small>
          </span>
          <a href="" class="list-group-item list-group-item-action">
            <i class="fas fa-cloud-upload-alt text-primary pr-1"></i>
            <span class="d-none d-lg-inline">Upload Excel File</span>
          </a>
          <a href="" class="list-group-item list-group-item-action">
            <i class="fas fa-cloud-download-alt text-info pr-1"></i>
            <span class="d-none d-lg-inline">Download Excel File</span>
          </a>
        </div>
      </nav>
      <main class="col-10 alert-info">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="flex-fill"></div>
          <div class="navbar nav">
            <div class="dropdown">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
                Admin01
              </a>
              <ul class="dropdown-menu text-center left" aria-labelledby="dropdownMenuLink">
                <li>
                  <a href="#" class="dropdown-item">Profile</a>
                </li>
                <li>
                  <a href="#" class="dropdown-item">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container-fluid mt-3 p-4">
          @yield('content')
        </div>
      </main>
    </div>
  </div>

  <script src="{{ asset('js/library/bootstrap5.0.2.min.js') }}"></script>
</body>

</html>