<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body class="container">
  <body>
<div>
  @yield('content')
</div>
<footer>
  @yield('footer')
</footer>
<div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">© 2017 - norosa@programmer.net -</p>
    <button class="navbar-btn btn-primary btn pull-left" onclick="location.reload()">Reload</button>
      <a href="http://github.com/n0r0s4" class="navbar-btn btn-danger btn pull-right">
      <span class="glyphicon glyphicon-star"></span>  See my github</a>
    </div>
  </div>
  </body>
</html>
