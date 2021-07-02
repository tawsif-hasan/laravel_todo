<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Groovin one page bootstrap template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- styles -->
<link rel="stylesheet" href=" {{ asset('assets/css/fancybox/jquery.fancybox.css') }}">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="assets/js/modernizr.custom.js"></script>
</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>
</html>