<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff; 
    text-align: center; 
    border-radius: 2px; 
    padding: 16px; 
    position: fixed; 
    z-index: 1; 
    left: 50%;
    bottom: 30px; 
}

#snackbar.show {
    visibility: visible; 
   -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
   animation: fadein 0.5s, fadeout 0.5s 2.5s;
}


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
<div class="container" >
<div class="row">

<div class="col-lg-12" align="right";>
<form action="index.html">
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Logout</button>
</form>
</div>
</div>
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
<div class="container" style="width:400px;">
<div class="row">
<h2 style="color:white;">Submit due against someone.</h2>
<form name="contact-form" action="submit.php" method="post" id="contact-form">
<div class="form-group">
<label style="color:white;" for="Name">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label style="color:white;" for="exampleInputEmail1">Roll number</label>
<input type="text" class="form-control" name="rollno" placeholder="roll number" required>
</div>
<div class="form-group">
<label style="color:white;" for="reason">For what</label>
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