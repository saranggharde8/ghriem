<html>

	<head>	
		<script>
			function show()
			{
				var roll=document.getElementById('roll').value;
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					
					
					document.getElementById("data").innerHTML =	this.responseText;
					
					
					}
				};
				xhttp.open("GET", "ajax-data.php?roll="+roll, true);
				xhttp.send();
				
			}
			
		</script>
	</head>
	<body>
		
		<input type="text" id="roll" onkeyup="show()">
		<h1 id='data'></h1>
	</body>
</html>