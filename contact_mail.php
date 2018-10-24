<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>

#loading-img{
display:none;
}

.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
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

</style>
<script>
function func(){
	  // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</head>
<body onload="func()">

<div class="container">
<div class="row">

<div class="col-md-8">
<form name="contact-form" action="get_response.php" method="post" id="contact-form">
<div class="form-group">
<label for="Name">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Roll number</label>
<input type="text" class="form-control" name="rollno" placeholder="roll number" required>
</div>
<div class="form-group">
<label for="Phone">Phone</label>
<input type="text" class="form-control" name="rupees" placeholder="rupees" required>
</div>
<div class="form-group">
<label for="Phone">contact</label>
<input type="text" class="form-control" name="contact" placeholder="contact" required>
</div>


<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
<img src="img/loading.gif" id="loading-img">
</form>

<div class="response_msg"></div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div id="snackbar">Submit a due against someone.</div>

</body>
</html>