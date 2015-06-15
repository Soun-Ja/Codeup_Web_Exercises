<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>My First HTML Form</title>
	</head>
	<body>
		<section>
		<form method="POST" action="my_first_form.php">
    		<p>
        		<label for="username">Username</label>
        		<input id="username" name="username" type="text" placeholder="username">
    		</p>
    		<p>
        		<label for="password">Password</label>
        		<input id="password" name="password" type="password" placeholder="password">
    		</p>
    		<p>
        		<button>Please Login</button> 
        	</p>	  	
		</form>
		</section>

		<section>
			<form method="POST" action="my_first_form.php">
				<p>
					<label for="To">To:</label>
					<input id ="To" name="To" type="text" placeholder="To" />
				</p>

				<p>
					<label for="From">From:</label>
					<input id ="From" name="From" type="text" placeholder="From" />
				</p>

				<p>
					<label for="Subject">Subject:</label>
					<input id ="Subject" name="Subject" type="text" placeholder="Subject" />
				</p>

				<p>
					<label for="email_body">Body:</label><br />
					<textarea id="email_body" name="email_body" rows="10" cols="30" placeholder="Type Here"></textarea>
				</p>

				<p>
					<button>Submit</button>
				</p>

				<label for="copy">Would you like to save a copy to your sent folder?</label>
				<input id="copy" name="copy" type="checkbox" value="yes" checked /> 
			</form>
		</section>

		<section>
			<form method="POST" action="my_first_form.php">

				<h2>Multiple Choice Test</h2>
				<p>What is the sum of 5 and 2?</p>

				<label><input type="radio" name="Q1" value="7" />7</label>

				<label><input type="radio" name="Q1" value="8" />8</label>

				<label><input type="radio" name="Q1" value="9" />9</label>

				<label><input type="radio" name="Q1" value="10" />10</label>

				<p>What is the product of 5 and 2?</p>	

				<label><input type="radio" name="Q2" value="10"/>10</label> 

				<label><input type="radio" name="Q2" value="11"/>11</label> 

				<label><input type="radio" name="Q2" value="12"/>12</label> 

				<label><input type="radio" name="Q2" value="13"/>13</label>

				<p>
					<label for="numbers"> What is the difference of 5 and 2?</label><br />
						<select id="numbers" name="numbers[]" multiple>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
				</p>		

				<p>
					<button>Submit</button>
				</p>
				
				<p>What types of animals do you own?</p>

				<label><input type="checkbox" id="animal_1" name="animal[]" value="cats">Cats</label>

				<label><input type="checkbox" id="animal_2" name="animal[]" value="dogs">Dogs</label>

				<label><input type="checkbox" id="animal_3" name="animal[]" value="fish">Fish</label>

				<label><input type="checkbox" id="animal_4" name="animal[]" value="birds">Birds</label>

				<p>
					<button>Submit</button>
				</p>		
			</form>	
		</section>

		<section>
			<form method="POST" action="my_first_form.php">

				<h2>Select Testing</h2>

				<label for="reading">Do You Like To Read?</label>
					<select id="reading" name="reading">
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>

				<button>Submit</button>		
			</form>


		</section>		
	</body>
</html>