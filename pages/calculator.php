<!DOCTYPE html>
<html>
	<head>
		<title>Calculator App</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
    <a class="nav-link" style="font-size:30px;" href="/">Go back</a>
		<div class="container" style="margin-top: 80px; display: flex; justify-content: center;" >
        
			<?php
				if(isset($_POST['submit']))
				{

					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{

						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'multiply')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'divided by')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						
						echo "Answer: {$total}";
					
					} else {
						
						echo 'Numeric values are required';
					
					}
				}
			?>
		</div>
		    <form method="post" action="calculator.php" style="display: flex; justify-content: center;">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="multiply">Multiply</option>
		            <option value="divided by">Divide</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    

	
	</body>
</html>