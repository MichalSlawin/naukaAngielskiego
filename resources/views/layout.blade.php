 <!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/layout.css">
		<title>Nauka Angielskiego</title>
	</head>
	<body>
		<h1>
			@yield('naglowek')
		</h1>

		@yield('content')

		@yield('redaktor')
        
         <div class="footer">
  			<p>
	  			<a href="/">
	  				Główna
	  			</a>  
	  			<a href="/kategorie">
	  				Kategorie
	  			</a>
  			</p>
		</div>

	</body>
</html>