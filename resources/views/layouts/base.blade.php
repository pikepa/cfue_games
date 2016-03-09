{{-- app/views/layouts/base.blade.php --}}

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>CFUE Games</title>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>

   @include('includes.Navbar')
  
  <div class="container">
    <h2>
      This is the top of the content !
    </h2>
    
   @yield('content')
    
  </div>
  
    @include('includes.Java_scripts')
</body>
</html>