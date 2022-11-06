<!DOCTYPE html>
<html lang="en">
  <head>

@include('includes.auth.meta')
<title>@yield('title') | MeetDoctor</title>

@stack('before-style')
@include('includes.frontsite.style')
@stack('after-style')



</head>
<body>

@yield('content')
@include('components.frontsite.footer')


@stack('before-script')
@include('includes.frontsite.script')
@stack('after-script')


</body>

</html>