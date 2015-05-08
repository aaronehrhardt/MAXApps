<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAX Apps</title>

    <!-- Metadata -->
    <meta name="title" content="MAX Apps">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Bootstrap CDN CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

    <!-- Bootstrap and Max Apps CSS -->

    <link href="{{ asset('css/weather-icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/user-styles.css') }}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="http://www.remax.com/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.remax.com/favicon.ico">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

    @include('partials.header_common')

    @yield('content')

    @include('partials.footer')

</body>
</html>
