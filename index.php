<html>
  <head>
    <meta charset="utf-8">
    <title>Hackathon - 14/3/15</title>
  </head>
  <body>
    <div>
      <form action="submit.php">
	<input name="name" type="text" placeholder="Name">
	<input name="email" type="email" placeholder="Email">
	<input name="password" type="password" placeholder="Password">
	<script type="text/javascript" src="http://codecha.org/api/challenge?k=cc1eaed32e504532975bb0c54982da41"></script>	
	<button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>

<?php
	include "codecha.php";
	$anws = false;

	if (isset($_POST["codecha_challenge_field"]) && isset($_POST["codecha_response_field"]) ) {
	        $anws = codecha_check($_POST["codecha_challenge_field"],
	                $_POST["codecha_response_field"],
	                $_SERVER["REMOTE_ADDR"],
	                "55f57a95750b4d67b3adf81ab9d6d1c5");
	} elseif (isset($_POST["recaptcha_challenge_field"]) && isset($_POST["recaptcha_response_field"]) ) {
	        $anws = recaptcha_check($_POST["recaptcha_challenge_field"],
	                $_POST["recaptcha_response_field"],
	                $_SERVER["REMOTE_ADDR"],
	                "55f57a95750b4d67b3adf81ab9d6d1c5");
	}

	if ($anws) {
	        echo "yes";
	} else {
	        echo "fuck";
	}
?>
