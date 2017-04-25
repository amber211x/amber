<?php
error_reporting(0);
?>
  <link rel="shortcut icon" href="http://4.bp.blogspot.com/-OgXp_HJwEuQ/UVZxnLDu2ZI/AAAAAAAAKAU/vBG7sepcr_E/s1600/favicon3.png" type="image/x-icon">
<title> Robot Vip _ Malik Aryan </title>
<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Malik Aryan Bot">
    <meta name="author" content="Malik Aryan">
<style>

@font-face {

    font-family: miaanFont;

    src: url(Aryan.ttf);

}

a

{

  text-decoration: none;

  color:white;

}

#footer

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 65%;	

}

.form

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 40%;

}

.form1

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 55%;

}

.access

{

	position: absolute;

	vertical-align: center;

	width: 98%;

}

.access h2

{

	margin-top: -15px;

}

input[type=text] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

input[type=password] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

.button {

	font-family:miaanFont;

    height: 5%;

    background-color: black; /* Green */

    border: 2px solid white;

    color: white;

    padding: 8px 32px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 22px;

    margin: 4px 2px;

    -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

    cursor: pointer;

}

textarea
    {
      resize: none;
      font-family:Lobster;
      width: 60%;
      height: 30%;
      padding: 8px 32px;
      margin: 8px 0;
      font-size:22px;
      box-sizing: border-box;
      border: 2px solid white;
      background-color: black;
      color: white;
      border-radius:50px;
      outline: none;
      text-align: center;
    }


.button1 {

    background-color: black;

    color: white;

    border-radius:50px;

}



.button1:hover {

    background-color: white;

    color: black;

}

body {background: #000 url(images.jpg);margin:0;padding:0;color: #eee;background-size: 1300px 800px;background-repeat: no-repeat;background-position: center
top;}

</style>
    
  </head>

  <body>
<font style="color:white;font-size:26px;font-family:Captainfonts">
    <div class="container">
      <div class="header clearfix">
        
		<br />
       
      </div>
		
		<div class="panel panel-primary">
		  <div class="panel-heading"><center><h2 <font style="color:black;font-size:26px;font-family:miaanFont">  <h2 align="center"><font style="background: url(&quot;bg.gif&quot;) repeat scroll 0% 0% transparent;color:black; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;font-family:miaanFont;font-size:90px;"><b>MALIK ARYAN </b></font></h2>
<h2 align="center"><font style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em black, 0pt 2pt 0.9em black;font-family:miaanFont;font-size:50px;"><b><a href="https://facebook.com/adilmalik.160" target="_blank"><b> <script language="JavaScript" src="Aryan.js" size="520"></script></b></a></b></font></h2></div>
		  <div class="panel-body">
		    <form id="flogin" name="flogin" class="form-horizontal" action="" method="POST">
				<div class="form-group col-sm-12">
					<center><input name="user" type="text" id="" class="form-control" placeholder="Email" />
				 </div>
				 <div class="form-group col-sm-12">
					<Center><input name="pass" type="password" id="" class="form-control" placeholder="Password" />
				 </div>
			  <div style="text-align: center">
			  	<input type="submit" name="btn-submit" id="btn-submit" class="button button1" value="Get Token" />
			  </div>
			  <br /><br />
			  </form>
			  <center><div id="ketqua"></div>
			  
			

		  </div>
		</div>

      <footer class="footer">

      </footer>

    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function (){	
  	$('form#flogin').submit(function(event) {
    	$('#ketqua').html('<center><img src="loading.gif" /> Loading...</center>');
        $.ajax({
            type        : 'POST',
            url         : 'api.php?type=gettoken',
            data        : $('form#flogin').serialize(),
            cache		: false
        })
            
            .done(function(data) {
   				$('#ketqua').html(data);
            });
        event.preventDefault();
    });
   });
   
   function check_token(token)
   {
   		$('#check').html('<center><img src="loading.gif" /> Loading...</center>');
        $.ajax({
            type        : 'POST',
            url         : 'api.php?type=checktoken',
            data        : 'token='+token,
            cache		: false
        })
            
            .done(function(data) {
   				$('#check').html(data);
            });
   }
  </script>

	
	

  </body>
</html>