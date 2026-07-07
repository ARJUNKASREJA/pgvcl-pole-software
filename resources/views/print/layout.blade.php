<!DOCTYPE html>

<html>

<head>

<title>Drawing Print</title>

<style>

body{
font-family:Arial;
font-size:12px;
}

.header{
text-align:center;
margin-bottom:20px;
}

.footer{
margin-top:30px;
}

</style>

</head>

<body>

<div class="header">

<h2>PGVCL Drawing Print</h2>

</div>

@yield('content')

<div class="footer">

Generated :

{{ now() }}

</div>

</body>

</html>