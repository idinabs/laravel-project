<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('snippet.header')

</head>
<body>
    
  @include('snippet.navbar')

  @yield('body')

  @include('snippet.js')
  
</body>
</html>