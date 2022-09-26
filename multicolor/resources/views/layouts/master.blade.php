<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   	<!-- title -->
	<title> @yield('title') </title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/logo.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/all.min.css">

	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

	<!-- owl carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">

	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">

	<!-- animate css -->
	<link rel="stylesheet" href="../assets/css/animate.css">

	<!-- mean menu css -->
	<link rel="stylesheet" href="../assets/css/meanmenu.min.css">

	<!-- main style -->
	<link rel="stylesheet" href="../assets/css/main.css">
	
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<body>

    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')


</body>
</html>