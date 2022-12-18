<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<h1>Jokes Page </h1>
	<?php
    //variable to log in 
    include "db_Connect.php";

    //include "generate.php"; 
    //include "list_all_jokes.php"; 
    
    ?>

	<div id="login_status"> Not Logged IN</div>
	<div id="loginform">
		Token: <input type="text" id="google_code">
		<input type="submit" id="submit_code">

	</div>



	<div id="main_page">


		<form class="form-horizontal" action="add_joke.php">
			<fieldset>

				<!-- Form Name -->
				<legend>Add a Joke</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="joke_question">Enter the text of your new joke</label>
					<div class="col-md-6">
						<input id="joke_question" name="joke_question" type="text" placeholder=""
							class="form-control input-md">
						<span class="help-block">Enter the first half of your joke</span>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="joke_answer">The answer to the joke</label>
					<div class="col-md-6">
						<input id="joke_answer" name="joke_answer" type="text" placeholder=""
							class="form-control input-md">
						<span class="help-block">Enter the punchline to your joke</span>
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="submit"></label>
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn btn-primary">Add a new Joke</button>
					</div>
				</div>

			</fieldset>
		</form>



		<form class="form-horizontal" action="search_specific_joke.php">
			<fieldset>

				<!-- Form Name -->
				<legend>Search for a Joke</legend>

				<!-- Search input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="keyword">Search Input</label>
					<div class="col-md-4">
						<input id="keyword" name="keyword" type="search" placeholder="e.g. chicken"
							class="form-control input-md">
						<p class="help-block">Enter a word to search for in the joke databasep</p>
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="submit"></label>
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn btn-primary">Search</button>
					</div>
				</div>

			</fieldset>
		</form>
	</div> 
	

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$('div#main_page').hide();
		$('input#submit_code').on('click', function () {
			var google_code = $('input#google_code').val();
			if (google_code.length > 4) {
				$.post('login.php', { google_code: google_code }, function (result) {
					if (result == 1) {
						$('div#login_status').text('Logged in!');
						$('div#loginform').hide();
						$('div#main_page').show();
					} else {
						$('div#login_status').text('Login Failed!!!!');

					}
				});
			}
		});
	</script>


	<?php

    //include "search_specific_joke.php"; 
    

    $mysqli->close();



    ?>
</body>

</html>