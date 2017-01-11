<?php
	include('connection.php');
	require_once('auth.php');
?>

<html lang="en">
<head>
  <title>1st round - TAG CCS</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="CCS By TAG Club">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration form for CCS</title>

  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Reem+Kufi' rel='stylesheet' type='text/css'>

    <script>
  $(document).ready(function() {
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>
  <script>
Materialize.toast('Registered successfully!', 4000, 'rounded') // 4000 is the duration of the toast
  </script>
  <style type="text/css">
  html,
  body {
      height: 100%;
  }
  html {
      display: table;
      margin: auto;
  }
  body {
      display: table-cell;
      vertical-align: middle;
  }
  .margin {
    margin: 0 !important;
  }
  </style>
</head>

<body style="background:#fbc02d; font-family: Reem Kufi">

      <div class="row">
        <div class="col s12">


              <span style="color: black; text-align: center"><b><h2>Begin the quiz!</h2></b></span>
              <br>
			  <div class="profile-usertitle-name">
						<?php echo $_SESSION['SESS_FIRST_NAME'];?>
			  </div>
              <center>
              <div class="row">
                <div class="col s12">
                  <a class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px; padding-left: 85px; padding-right: 85px" href="technical.php" target="_blank">Technical</a>
                </div>
                <br><br><br>
                <div class="col s12">
                  <a class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px" href="management.php" target="_blank">Management/Editorial</a>
                </div>
                <br><br><br>
                <div class="col s12">
                  <a class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px; padding-left: 100px; padding-right: 100px" href="design.php" target="_blank">Design</a>
                </div>
              </div>
              <br><br>
              <div>
                <p style="font-size: 20px">Note: You can apply for all the fields. </p>

              </div>
            </center>

            </div>
            <center>
            <div class="card-action">
              <a class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px">Logout</a>
            </div>
          </center>
        </div>



</body>
</html>
