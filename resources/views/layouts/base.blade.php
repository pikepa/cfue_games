{{-- app/views/layouts/base.blade.php --}}

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>CFUE Games</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

   @include('includes.Navbar')
  
  <div class="container">

    
   @yield('content')
    
  </div>
  
    @include('includes.Java_scripts')
</body>
</html>
