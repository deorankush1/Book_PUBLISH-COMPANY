<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Editor</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
			<form method="Post" action="../PeopleTypes/p_editor.php" enctype="multipart/form-data" > 
				<br><label>Detail </label></br>
		
				<div class="row">
					<input type = "text" name = "fname" placeholder = "Enter  First Name">
	   				<input type = "text" name = "lname" placeholder="Enter  Last Name">
	   				<input type = "Bigint" name = "mobile" placeholder="Enter Mobile Number">
	   				<input type = "text" name = "city" placeholder="Enter City">
				</div>
		
				<div class = "row">
					<input type = "text" name = "state" placeholder="Enter State">
	   				<input type = "text"  name ="country" placeholder="Enter Country">
	   				<input type = "int" name="postcode" placeholder="Enter Post Code">
	   				<input type = "text" name="no_of_books" placeholder="Enter No. Of Books edited">
	   			</div>
	   		    
	   		    
				<br><center><input type="Submit" value='submit' name='submit'></center></br>

	   		</form>
		</div>

	</body>
</html>