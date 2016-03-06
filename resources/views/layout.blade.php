<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>CFUE Games</title>
  <link rel="stylesheet" href="css/app.css">


</head>
<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/games/public/welcome">2016 Team Games</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/games/public/welcome">Home</a></li>
            <li><a href="/games/public/members">Participants</a></li>
            <li><a href="/games/public/teams">Team Results</a></li>           
            <li><a href="http://www.crossfitue.com/contact-us.html">Contact</a></li>
            <li class="float-right">Version 0.0.1</li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a href="#">Version 0.0.1</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </nav>
  
  <div class="container">
    @yield('content')
  </div>
</body>
</html>