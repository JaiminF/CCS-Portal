<!DOCTYPE html>
<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome|TAG CCS 2017</title>
		<meta name="description" content="Simple ideas for enhancing text input interactions" />
		<meta name="keywords" content="input, text, effect, focus, transition, interaction, inspiration, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set2.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<script src="js/jquery-3.1.1.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Reem+Kufi' rel='stylesheet' type='text/css'>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


	</head>
	<body style="background:#fbc02d; font-family: Reem Kufi">
	<form name="form1" action="login.php" method="POST" onsubmit="return vald()">
		<div class="container" style="max-height:100%; margin-bottom:0px;">
							<?php
								if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
								echo '<ul class="err">';
								foreach($_SESSION['ERRMSG_ARR'] as $msg) {
									//echo '<li>',$msg,'</li>';
									  echo '<script type="text/javascript">alert("'. $msg . '")</script>';
								}
								echo '</ul>';
								unset($_SESSION['ERRMSG_ARR']);
								}
							?>
		

		<center>	<section style="max-height:100%;padding-bottom: 0px;padding-top: 0px;" class="content bgcolor-10">
				<h2 style="color:#2c2c2c;margin-bottom: 0px;margin-top: 25px;">Core Committee Selections 2017</h2><br>
				<img src="images/logocombined.png" style="height: 20%; width:20%;"><br>
				<div class="form-group">
				<span class="input input--shoko">
					<input class="form-control input-lg input__field input__field--shoko" type="text" id="regno" name="regno" />
					<label class="input__label input__label--shoko" for="regno">
						<span class="input__label-content input__label-content--shoko">Registration Number</span>
					</label>
					<svg class="graphic graphic--shoko" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
						<path d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span><br>
				</div>
				<div class="form-group">
				<span class="input input--shoko">
					<input class="form-control input-lg input__field input__field--shoko" type="password" id="pass" name="pass" />
					<label class="input__label input__label--shoko" for="pass">
						<span class="input__label-content input__label-content--shoko">Password</span>
					</label>
					<svg class="graphic graphic--shoko" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
						<path d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				</div>
			</section>
			<section style="background:#fbc02d">
				<p style="
				    margin-top: 0px;
				    margin-bottom: 0px;
				">
				<button class="btn btn-4 btn-4a icon-arrow-right" style="padding-bottom: 15px;" type="submit">Continue</button>

			</section>
			<center>
		
		</div><!-- /container -->
		</form>
		<script src="js/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
			
		</script>
		<script>
			function vald(){
				var regno = document.getElementById("regno").value;
				if (/^16[B|M]{1}[A-Z]{2}[0-9]{4}$/.test(regno)) {

				}
				else{
    				alert("Your Registration numbers looks invalid !");
					return false;
   				}
				
				}
				
		</script>
	</body>
</html>
