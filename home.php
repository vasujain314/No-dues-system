<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #333; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */
    /* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
   However, delay the fade out process for 2.5 seconds */
   -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
   animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
.logoimg{
	height:150px;
	width=150px;
}
body{
	background-image:url(images/back.jpg);
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<script>
function func(){
	  
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</head>
<body onload="func()">
<br>
<div class="container" align="right">
<form action="index.html">
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Logout</button>
</form>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4">

<img class="logoimg" src="images/logo.png" align="right">

</div>
<div class="col-lg-8">
<br>
<h2 style="color:white;">Indian Institute Of Information Techology, Una.</h2>
<h3 style="color:white;">No dues System.</h3>
</div>
</div>
</div>
<br><br>
<div class="container">
<div class="row">

<div class="col-md-6">
<h2 style="color:white;">Submit due against someone.</h2>
<form name="contact-form" action="get_response.php" method="post" id="contact-form">
<div class="form-group">
<label style="color:white;" for="Name">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label style="color:white;" for="exampleInputEmail1">Roll number</label>
<input type="text" class="form-control" name="rollno" placeholder="roll number" required>
</div>
<div class="form-group">
<label style="color:white;" for="reason">FOR WHAT</label>
<input type="text" class="form-control" name="for" placeholder="for what" required>
</div>
<div class="form-group">
<label style="color:white;" for="Phone">Money</label>
<input type="text" class="form-control" name="rupees" placeholder="rupees" required>
</div>
<div class="form-group">
<label style="color:white;" for="Phone">contact</label>
<input type="text" class="form-control" name="contact" placeholder="contact" required>
</div>
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
</form>
</div>
<div class="col-md-1">
</div>
<div class="col-md-5">
<h2 style="color:white;">check if you are having dues.</h2>
<form name="contact-form" action="read.php" method="post" id="contact-form">
<div class="form-group">
<label style="color:white;" for="Name">Rollno.</label>
<input type="text" class="form-control" name="rollno" placeholder="Roll number" required>
</div>
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">check</button>

</div>
</form>
<div class="response_msg"></div>
</div>
</div>
</div>

<div style="color:white; background-color:#3c75d1; padding:20px; width :200px; float:right; margin-right:3px; margin-bottom:3px; border-radius:5px;">
<h5>Made by team: VasuDev</h5>
<p>IIITU17314</p>
<p>IIITU17317</p>
</div>
<br>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div id="snackbar">Submit a due against someone.</div>

</body>
</html>