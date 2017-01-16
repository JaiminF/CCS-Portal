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
			  
			  <span style="color: black; text-align: center"><h6> <?php echo $_SESSION['SESS_FIRST_NAME'];?> </h6></span>
			  <br>
			  
              <center>
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
              <div class="row">
				<form method="POST" action="technical.php" target="_blank" onsubmit="return tvald()">
                <div class="col s12">
                  <button class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px; padding-left: 85px; padding-right: 85px" type="submit">Technical</a>
                </div>
				</form>
                <br><br><br>
				<form method="POST" action="management.php" onsubmit="return mvald()" target="_blank">
                <div class="col s12">
                  <button class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px" type="submit" >Management/Editorial</a>
                </div>
				</form>
                <br><br><br>
				<form method="POST" action="design.php" onsubmit="return dvald()" target="_blank">
                <div class="col s12">
                  <button class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px; padding-left: 100px; padding-right: 100px" type="submit">Design</a>
                </div>
				</form>
              </div>
              <br><br><br>
              <div>
                <p style="font-size: 20px">Note: You can apply for all the fields. </p>

              </div>
            </center>

            </div>
            <center>
            <div class="card-action">
              <a class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px" href="index.php">Logout</a>
            </div>
          </center>
        </div>
		
		<script>
			function tvald(){
				var tflag = "<?php
							include('connection.php');
							require_once('auth.php');
							$rno = $_SESSION['SESS_MEMBER_ID'];
							$qry="SELECT * FROM r_users WHERE R_no='$rno' ";
							$result= mysqli_query($con,$qry); 
							$row = mysqli_fetch_assoc( $result );
							$tf = $row['t_flag'];
							echo $tf;
							?>";
				if (tflag == 0) {
					
					}
				else{
    				alert("You have already attempted this quiz");
					return false;
   				}
				}
			function mvald(){
				var mflag = "<?php
							include('connection.php');
							require_once('auth.php');
							$rno = $_SESSION['SESS_MEMBER_ID'];
							$qry="SELECT * FROM r_users WHERE R_no='$rno' ";
							$result= mysqli_query($con,$qry); 
							$row = mysqli_fetch_assoc( $result );
							$tf = $row['m_flag'];
							echo $tf;
							?>";
				if (mflag == 0) {
					
					}
				else{
    				alert("You have already attempted this quiz");
					return false;
   				}
				}
				
			function dvald(){
				var dflag = "<?php
							include('connection.php');
							require_once('auth.php');
							$rno = $_SESSION['SESS_MEMBER_ID'];
							$qry="SELECT * FROM r_users WHERE R_no='$rno' ";
							$result= mysqli_query($con,$qry); 
							$row = mysqli_fetch_assoc( $result );
							$tf = $row['d_flag'];
							echo $tf;
							?>";
				if (dflag == 0) {
					
					}
				else{
    				alert("You have already attempted this quiz");
					return false;
   				}
				}
				
		</script>



</body>
</html>
