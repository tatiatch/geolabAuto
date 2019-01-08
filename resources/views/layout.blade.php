<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	<style>
		table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
		}
		th, td{
			padding: 15px;
		}
		th {
  			text-align: center !important;
		}
	</style>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>