<script>
//scrolling function:
window.onscroll = function() {scroll()};
function scroll() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("taskbar").style.padding = "30px 25px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("taskbar").style.padding = "50px 50px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}


//open page function:
function openPage(pageName) {
  var i, taskbar, content;
  content = document.getElementsByClassName("content");
  for (i = 0; i < content.length; i++) {
    content[i].style.display = "none";
  }
  taskbar = document.getElementsByClassName("taskbar");
  for (i = 0; i < taskbar.length; i++) {
    taskbar[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}


//open and close taskbar:
function openside() {
  document.getElementById("sidebar").style.width = "275px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeside() {
  document.getElementById("sidebar").style.width = "0";
  document.body.style.backgroundColor = "white";
}


//opens home page when page loads:
document.getElementById("logo").click();


//dropdown function:
var dropdown = document.getElementsByClassName("dropButton");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}


//home slideshow:
var x = 0;
showSlide();

function showSlide() {
  var i;
  var slides = document.getElementsByClassName("poster");
  var dashs = document.getElementsByClassName("dash");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  x++;
  if (x > slides.length) {x = 1}    
  for (i = 0; i < dashs.length; i++) {
    dashs[i].className = dashs[i].className.replace(" active", "");
  }
  slides[x-1].style.display = "block";  
  dashs[x-1].className += " active";
  setTimeout(showSlide, 3000); 
}


//price function:
function changePrice(){
    document.getElementById("price").innerHTML = "£679";
}


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

<p style="text-align:center"><img src="logo.png" alt="iTech" style="float:center;width:128px;"></p>
<p style="padding:10px 0px 5px"> </p>

</body>
</html>