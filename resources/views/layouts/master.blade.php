<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: #00b33c;
      color: white;

    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #00b33c;
      text color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">

      @if(Auth::check())
      <li class='nav'><a href='/'>Home</a></li>
      <li class='nav'><a href='/logout'>Logout</a></li>
      @else
      <li class='nav'><a href='/'>Home</a></li>
      <li class='nav'><a href='/login'>Login</a></li>
      <li class='nav'><a href='/register'>Register</a></li>
      @endif


    </div>
    <div class="col-sm-8 text-left">


      <div class="content">
        <section>
          {{-- Yield page content --}}
          @yield('content')
        </section>
        </div>


    </div>
    <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>ROC 2016</p>
</footer>

</body>
</html>
