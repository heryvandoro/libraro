<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{ asset("images/favicon.ico") }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="{{ asset("css/materialize.css") }}">
	<link type="text/css" rel="stylesheet" href="{{ asset("css/custom.css") }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title", "Home") | {{ config("app.name") }}</title>
</head>
<body>
	@include("parts.nav")   
	@yield("content", "No Content")
	@include("parts.footer")
</body>
<script type="text/javascript" src="{{ asset("js/jquery-3.2.1.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/material/materialize.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/layout.js") }}"></script>
</html>