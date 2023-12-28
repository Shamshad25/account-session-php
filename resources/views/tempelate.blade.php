<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      </head>
    <body >
        <div class="header">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">UI Monk</a>

                <!-- Links -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                  </li>
                </ul>
              </nav>
        </div>

        <div class="container">
            @yield('content')
        </div>

        <div class="footer">
            <p class="text-center">copyright &copy; 2023 UI Monk</p>
        </div>
    </body>
</html>
