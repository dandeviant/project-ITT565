<!DOCTYPE html>
<html>
	<head>
		<title>System Administrator</title>
		<style>

			html{
				scroll-behavior: smooth;
			}

			body {
			  margin: 0;
			  background-color: black;
			  color: white;
			  font-family: Calibri;
			  font-size: 20px;
			}

			/* VERTICAL NAVIGATION BAR CSS PROPERTIES*/


			ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  width: 200px;
			  background-color: #333;
			  position: fixed;
			  height: 100%;
			  overflow: auto;
			} 

			li a {
			  display: block;
			  color: #000;
			  padding: 16px 24px;
			  text-decoration: none;
			  transition: 0.5s;
			  font-family: Consolas;
			  font-size: 24px;
			  color: white;
			}

			li a.active {
			  background-color: #0D9DC4;
			  color: white;
			  transition: 0.5s;
			}

			li a.active:hover {
			  background-color: grey;
			  color: white;
			  transition: 0.5s;
			  color: black;
			}

			li a:hover:not(.active) {
			  background-color: #AC1B03;
			  color: white;
			}

			/* FORM CSS PROPERTIES*/

			input[type=text], select 
			{
				width: 60%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			input[type=submit]
			{
				width: 30%;
				background-color: #AC1B03;
				color: white;
				padding: 20px 30px;
				margin: 30px 0px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				transition: 0.5s;
				font-size: 20px;
			}

			input[type=submit]:hover
			{
				background-color: grey;
				color: white;
				transition: 0.5s;
			}

			.button
			{
				border-radius: 5px;
				background-color: #f2f2f2;
				padding: 20px;
			}

			form{
				margin-left:250px;
				padding:1px 16px;
			}

		</style>
	</head>

	<body>
	<ul>
		<li><a class="active" href="index.html">Home</a></li>
		<li><a href="#newstaff">New Staffs</a></li>
		<li><a href="#list">Registered Staffs</a></li>
	</ul>

	<section></section>
		<div id="newstaff" style="margin-left:250px;padding:1px 16px;/*height:1000px;">
		  	<h2>Staff Registration Form</h2>


		</div>

		<div>
			<form action="#">
				<label for="fullname">Full Name (as in ID card)</label><Br>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">
				<Br>
			    <label for="age">Age</label><Br>
				    <select id="age" name="age">
				    	<option value="">Select age</option>
						<script type="text/javascript">
							for(let i=18; i<50;i++){
								document.write("<option value"+i+">"+i+"</option>");
							}
						</script>
					</select>
				<Br>
				<label for="country">Citizenship</label><Br>
					<select id="country" name="country">
						<option value="">Select Citizenship</option>
						<option value="malaysia">Malaysia</option>
						<option value="australia">Australia</option>
						<option value="canada">Canada</option>
						<option value="usa">USA</option>
					</select>
				<Br>
				<input type="submit" value="Submit">
				<input type="submit" value="Clear" onclick="clear()" style="
				background-color: grey;
				">
			</form>
			<?php
				echo $eh;
			?>
		</div>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
	<div id="list"></div>
	<form action="#">
				<label for="fullname">Full Name (as in ID card)</label><Br>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">
				<Br>
			    <label for="age">Age</label><Br>
				    <select id="age" name="age">
				    	<option value="">Select age</option>
						<script type="text/javascript">
							for(let i=18; i<50;i++){
								document.write("<option value"+i+">"+i+"</option>");
							}
						</script>
					</select>
				<Br>
				<label for="country">Country of Origin</label><Br>
					<select id="country" name="country">
						<option value="">Select Country of Origin</option>
						<option value="australia">Australia</option>
						<option value="canada">Canada</option>
						<option value="usa">USA</option>
					</select>
				<Br>
				<input type="submit" value="Submit">
				<input type="submit" value="Clear" onclick="clear()" style="
				background-color: grey;
				">
			</form>
	</body>


	<script type="text/javascript">
		function close_window()
		{
			if (confirm("Close Window?")) {
		    close();
		}

		function clear(){
			document.getElementById("myForm").reset();
		}
	</script>
	
}
</html>


