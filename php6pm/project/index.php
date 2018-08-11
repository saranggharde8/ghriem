<html>
	<head>
		
	</head>
	<body>
		<table  border=1 width=100%>
			<tr>
				<th>
					<h1>login form</h1>
					<h4 style="color:red;">
						<?php
							if(isset($_REQUEST['msg']))
							{	if($_REQUEST['msg']=='invalid')
								{
									echo "invalud username and pass, please try again"; 
								}
							}
						?>
					</h4>
					<form method="post" action="validate.php">
						email :<input type="text" name="email"><br>
						Password:<input type="password" name="password"><br>
						<input type="submit" value="Log In">
						
					</form>
				</th>
				<th>
					<h1>signup form</h1>
					<form method="post" action="#">
						name :<input type="text" name="name"><br>
						email:<input type="text" name="email"><br>
						mobile:<input type="text" name="mobile"><br>
						password:<input type="password" name="password"><br>
						<input type="Submit" value="Save My Data">
						
						
					</form>

				</th>
			</tr>
		</table>
	</body>
</html>