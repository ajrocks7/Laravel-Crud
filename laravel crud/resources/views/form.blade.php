
<!doctype html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                        	<form method="post" action="{{ action('formcontroller@add')}}">

                        		

	<label>Name:</label><br>
	<input type="text" name="uname" class="form-control" value=""><br>
	<label>Age:</label><br>
	<input type="number" name="age" class="form-control" value=""><br>
	
	<label>Gender:</label><br>
	
	<input type="radio" name="gender"  value="male">Male

	
	 <input type="radio" name="gender"  value="Female">Female<br>

	<label>City:</label><br>
	<select name="city">
		<option>select</option>
		<option>Cbe</option>
		<option>kerala</option>
		<option>Goa</option>
	</select><br>
		<label>Address:</label><br>
		<textarea name="address" class="form-control" rows="5" cols="10"></textarea><br>
	<label>Hobby</label><br>
		 <input type="checkbox" name="hobby" value="A">A
<input type="checkbox" name="hobby" value="B">B
<input type="checkbox" name="hobby" value="c">C<br> <br>
	<label>Image:</label><br>
		<input type="file" name="image"><br>
		<label>Phone:</label><br>
		<input type="text" name="pno" class="form-control" value=""><br>
		<input type="submit" class="btn btn-success" name="submit" value="Add">
		<input type="reset" class="btn btn-danger" name="reset"  value="cancel">
	</div>
	</div>
	</div>
	</div>
	</div>
</form>
	</body>
	</html>
