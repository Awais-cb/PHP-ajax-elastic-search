<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Elastic search php</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<h1>Search here</h1>
		<form action="" method="">
		
		 <h5> Search suggestions : </h5><input type="text" class="form-control" onkeyup="showSuggestions(this.value)">

		</form>	
		<br>
		<p>Suggestions : <strong><span id='search_output'></span></strong></p>
	</div>
	<script src="elasticSearch.js"></script>
</body>
</html>