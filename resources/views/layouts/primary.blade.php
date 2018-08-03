<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('components.header')

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
@include('components.navigation')

<!-- Main Content -->
@yield('content')

<!-- Footer -->
@include('components.footer')

<!-- Javascript -->
@include('components.js')

</body>

</html>
