<?php
	include('connection.php');
	require_once('auth.php');
?>
<html lang="en">
<head>
  <title>Technical - TAG CCS</title>
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
  function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function () {
      minutes = parseInt(timer / 60, 10)
      seconds = parseInt(timer % 60, 10);

      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = minutes + ":" + seconds;

      if (--timer < 0) {
          timer = duration;
      }
  }, 1000);
}

window.onload = function () {
  var fiveMinutes = 60 * 15,
      display = document.querySelector('#time');
  startTimer(fiveMinutes, display);
};
  </script>
  <style type="text/css">
  html,
  body {
      height: 100%;
  }
  html {
    margin-top: 20px;
    margin-left: 20px;
  }
  body {

      vertical-align: middle;
  }
  .margin {
    margin: 0 !important;
  }
  </style>
</head>

<body style="background:#fbc02d; font-family: Reem Kufi">

      <div class="row" style="width: 900px; height: 700px">
        <div class="col s12">
          <div class="card white">
            <div class="card-content black-text">
        <div class="col s10">
          <center>
            <span class="card-title" style="color: black; text-align: center"><h4>Technical</h4></span>
            </center>
        </div>
		<div class="profile-usertitle-name">
						<?php echo $_SESSION['SESS_FIRST_NAME'];?>
			  </div>
        <div class="col s2">
          <div style="font-size: 15px; margin-top: 20px">Time left: <span id="time" style="font-size: 20px">15:00</span></div>
        </div>
      </div>
        <br><br><br>
          <form>
            <div style="margin-left: 10px" class="form-group">
                <p id="q1" style="font-size: 20px">> This is question 1 what do you think the answer would be lulz k? </p>
              &nbsp;  <input class="with-gap" name="group1" type="radio" id="test1">
      <label for="test1" style="color: black;">Option 1</label>
      <br>
      &nbsp;  <input class="with-gap" name="group1" type="radio" id="test2">
<label for="test2" style="color: black;">Option 2</label>
<br>
&nbsp;  <input class="with-gap" name="group1" type="radio" id="test3">
<label for="test3" style="color: black;">Option 3</label>
<br>
&nbsp;  <input class="with-gap" name="group1" type="radio" id="test4">
<label for="test4" style="color: black;">Option 4</label>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q2" style="font-size: 20px">> This is question 2 what do you think the answer would be lulz k? </p>
              &nbsp;  <input class="with-gap" name="group2" type="radio" id="test5">
      <label for="test5" style="color: black;">Option 1</label>
      <br>
      &nbsp;  <input class="with-gap" name="group2" type="radio" id="test6">
<label for="test6" style="color: black;">Option 2</label>
<br>
&nbsp;  <input class="with-gap" name="group2" type="radio" id="test7">
<label for="test7" style="color: black;">Option 3</label>
<br>
&nbsp;  <input class="with-gap" name="group2" type="radio" id="test8">
<label for="test8" style="color: black;">Option 4</label>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q3" style="font-size: 20px">> This is question 3 what do you think the answer would be lulz k? </p>
              &nbsp;  <input class="with-gap" name="group3" type="radio" id="test9">
      <label for="test9" style="color: black;">Option 1</label>
      <br>
      &nbsp;  <input class="with-gap" name="group3" type="radio" id="test10">
<label for="test10" style="color: black;">Option 2</label>
<br>
&nbsp;  <input class="with-gap" name="group3" type="radio" id="test11">
<label for="test11" style="color: black;">Option 3</label>
<br>
&nbsp;  <input class="with-gap" name="group3" type="radio" id="test12">
<label for="test12" style="color: black;">Option 4</label>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q4" style="font-size: 20px">> This is question 4 what do you think the answer would be lulz k? </p>
              &nbsp;  <input class="with-gap" name="group4" type="radio" id="test13">
      <label for="test13" style="color: black;">Option 1</label>
      <br>
      &nbsp;  <input class="with-gap" name="group4" type="radio" id="test14">
<label for="test14" style="color: black;">Option 2</label>
<br>
&nbsp;  <input class="with-gap" name="group4" type="radio" id="test15">
<label for="test15" style="color: black;">Option 3</label>
<br>
&nbsp;  <input class="with-gap" name="group4" type="radio" id="test16">
<label for="test16" style="color: black;">Option 4</label>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q5" style="font-size: 20px">> This is question 5 what do you think the answer would be lulz k? </p>
              &nbsp;  <input class="with-gap" name="group5" type="radio" id="test17">
      <label for="test17" style="color: black;">Option 1</label>
      <br>
      &nbsp;  <input class="with-gap" name="group5" type="radio" id="test18">
<label for="test18" style="color: black;">Option 2</label>
<br>
&nbsp;  <input class="with-gap" name="group5" type="radio" id="test19">
<label for="test19" style="color: black;">Option 3</label>
<br>
&nbsp;  <input class="with-gap" name="group5" type="radio" id="test20">
<label for="test20" style="color: black;">Option 4</label>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q6" style="font-size: 20px">> This is question 6 what do you think the answer would be lulz k? </p>
                <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1" style="color: black">Answer</label>
          </div>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q7" style="font-size: 20px">> This is question 7 what do you think the answer would be lulz k? </p>
                <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea"></textarea>
            <label for="textarea2" style="color: black">Answer</label>
          </div>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q8" style="font-size: 20px">> This is question 8 what do you think the answer would be lulz k? </p>
                <div class="input-field col s12">
            <textarea id="textarea3" class="materialize-textarea"></textarea>
            <label for="textarea3" style="color: black">Answer</label>
          </div>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q9" style="font-size: 20px">> This is question 9 what do you think the answer would be lulz k? </p>
                <div class="input-field col s12">
            <textarea id="textarea4" class="materialize-textarea"></textarea>
            <label for="textarea4" style="color: black">Answer</label>
          </div>
            </div>
            <div style="margin-left: 10px" class="form-group">
                <p id="q10" style="font-size: 20px">> This is question 10 what do you think the answer would be lulz k? </p>
                <div class="input-field col s12">
            <textarea id="textarea5" class="materialize-textarea"></textarea>
            <label for="textarea5" style="color: black">Answer</label>
          </div>
            </div>

            <center>
            <div class="col s12" style="margin-bottom: 20px; margin-top: 10px">
              <a class="waves-effect waves-light btn" style="color: #fbc02d; background-color: #212121; border-radius: 10px" onclick="myFunction()">Submit</a>
            </div>
            <br>
          </center>
          </form>
          <br><br>

          <script>
function myFunction() {
    confirm("Are you sure?");
}
</script>
        </div>
        </div>
        </div>



</body>
</html>
