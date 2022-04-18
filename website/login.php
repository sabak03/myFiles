

<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box; }


h1 {
	font-weight: bold;
	margin: 0;
	text-align: center;
}
p {
	font-size: 15px;
	font-family: arial;
	font-weight: bold;
	line-height: 18px;
	margin: 20px 0px;
}


a {
	color: darkBlue;
	font-size: 12px;
	text-decoration: none;
	padding: 10px 0px 20px 0px;
}

button {
	border-radius: 50px;
	border: 1px solid;
	background-color: darkBlue;
	color: white;
	font-size: 15px;
	font-weight: bold;
	padding: 10px 50px;
	letter-spacing: 2px;
	transition: 0.05s;
}

button:active {
	transform: scale(0.75);
}

button:hover {
	cursor: pointer;
}

button.clear {
	background-color: transparent;
	border-color: white;
}

form {
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 25px;
	height: 100%;
	width:100%;
}

input {
	background-color: lightGrey;
	padding: 10px 10px;
	margin: 5px;
	width: 100%;
	border: none;
}

.container {
	background-color: white;
	border-radius: 5px;
	position: relative;
	overflow: hidden;
	width: 800px;
	max-width: 100%;
	min-height: 500px;
}

.formContainer {
	position: absolute;
	top: 0;
	height: 100%;
	transition: 0.75s;
}

.signInContainer {
	width: 50%;
	left: 0;
	z-index: 2;
}
.container.right-panel-active .signInContainer {
	transform: translateX(100%);
}
.signUpContainer {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}
.container.right-panel-active .signUpContainer {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}
@keyframes show {
	0%, 50% {
		opacity: 0;
		z-index: 1;
	}
	50%, 100% {
		opacity: 1;
		z-index: 2;
	}
}
.overlayContainer {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: 0.7s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlayContainer{
	transform: translateX(-100%);
}
.overlay {
	background: darkBlue;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: white;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: 0.7s ease-in-out;
}
.overlayPanel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: 0.7s ease-in-out;
}
.overlayLeft {
	transform: translateX(-100%);
}
.overlayRight {
	right: 0;
	transform: translateX(0);
}
.container.right-panel-active .overlay {
  	transform: translateX(50%);
}
.container.right-panel-active .overlayLeft {
	transform: translateX(0);
}
body {background-color:#BCD2E8;}



.popup {
  display: none; 
  position: fixed; 
  width: 100%; 
  height: 100%; 
  top: 0; 
  overflow: auto; 
  padding-top: 10px; 
  z-index: 100; 
  background-color: rgba(0,0,0,0.2); 
}
.tncContent {
  margin: auto; 
  padding: 20px;
  width: 80%;
  background-color: white

}
.exit {
  color: darkBlue;
  float: right;
  font-size: 30px;
  font-weight: bold;
}
.exit:hover{
  color: grey;
  text-decoration: none;
  cursor: pointer;
}
a:hover{
  cursor: pointer;
  text-decoration: none;
  color: blue;
}
.text {
  color: darkBlue;
  font-size: 13px;
}
label {
  display: block;
}

</style>

</head>

<body>

<h1 style="color:#BCD2E8;">Please sign in or create an account</h>
<center><div class="container" id="container">

  <div class="formContainer signInContainer">
    <form action="account.php">
	<h1 style="padding-bottom:15px;color:black;">Log in</h1>
	    <input type="text" id="userName" name="userName" placeholder="Enter Username" required/>
	    <input type="password" id="psw" name="psw" placeholder="Password" />

	    <a type="submit">Forgot your password?</a>

	    <button src="account.php">Sign In</button>
    </form>
    </div>

  <div class="formContainer signUpContainer">
    <form> 
	<h1 style="padding-bottom:15px; font-size:150%;color:black;">Create a new account</h1>
	    <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name" required/>
	    <input type="email" id="email" name="email" placeholder="Enter Email" required/>
	    <input type="text" id="username" name="username" placeholder="Enter Username" required/>
	    <input type="password" id="password" name="password" placeholder="Enter Password" onkeyup='check();'required/>
	    <input type="password" id="confirmP" name="confirmP" placeholder="Repeat Password" onkeyup='check();' required/>
	    <span id='pswError'></span>
	    <p style="position:relative; align: left;"><input type="checkbox" name="tnc" required/>
	      <label for="tnc"style="color:darkBlue;"> Accept <a id="tnc">Terms and Conditions.</a></label></p>
	      <div id="tncPopup" class="popup">
		<div class="tncContent">
		  <span class="exit">&times;</span>
		  <iframe src="tans.htm" height=400px width=100% frameBorder="0" title="Iframe Example"></iframe>
		</div>
	      </div>
	    <button>Sign Up</button>
    </form>
  </div>

  <div class="overlayContainer">
    <div class="overlay">
      <div class="overlayPanel overlayLeft">
	<h1>WELCOME :)</h1>
	<p>Enter your personal details on the right -></p>
	<p>If you are an existing customer please sign in by clicking the button below </p>
	<button class="clear" id="signIn">Sign In</button>
      </div>
      <div class="overlayPanel overlayRight">
	<h1>WELCOME BACK</h1>
	<p>Enter your log in details on the left <-</p>
	<p>If you are a new customer create an account with us by clicking the button below</p>
	<button class="clear" id="signUp">Sign Up</button>
      </div>
    </div>
  </div>
</div>
</center>





</body>

<script>

//checks if passwords match:
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirmP').value) {
    document.getElementById('pswError').innerHTML = '';
    
  } else {
    document.getElementById('pswError').style.color = 'red';
    document.getElementById('pswError').style.fontSize = 'small';
    document.getElementById('pswError').innerHTML = 'Password does not match';
  }
}

//switch between sign in and up:
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});


// sets varible to the popup box:
var popup = document.getElementById("tncPopup");

// uses link for popup:
var tnc = document.getElementById("tnc");

// uses <span> element to exit the popup:
var close = document.getElementsByClassName("exit")[0];

// When user clicks the link it opens the popup:
tnc.onclick = function() {
  popup.style.display = "block";
}

// When user clicks on the cross it exits the box:
close.onclick = function() {
  popup.style.display = "none";
}

// if user clicks anywhere outside of the box it also closes it:
window.onclick = function(event) {
  if (event.target == modal) {
    popup.style.display = "none";
  }
}

</script>

</html>

<?php include 'footer.php'; ?>