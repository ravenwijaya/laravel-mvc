<html>
	<head>
		<title>form</title>
	</head>
	<body>
    <form action="/welcome" method="POST">
    @csrf
		<h1>Buat Account Baru!</h1>
		<h2>Sign Up Form</h2>
		<p1>First name:</p1>
		<br><br>
		<input type="text" name="depan" >
		<br><br>
		<p1>Last name:</p1>
		<br><br>
		<input type="text" name="blakang" >
		<br><br>
		
		<p1>Gender:</p1><br><br>
		<input type="radio"> Male
		<br>
		<input type="radio"> Female <br>
		<input type="radio"> Other <br>

		<br>
		<p1>Nationality:</p1>
		<br>
		<select >
			<option >Indonesian</option>
			<option>Malaysian</option>
			<option >Singaporean</option>
			<option >Australian</option>
		</select>
		<br><br>


		<p1>Language Spoken:</p1><br><br>
		<input type="checkbox"> Bahasa Indonesia<br>
		<input type="checkbox"> English<br>
		<input type="checkbox"> Other<br>
		<p1>Bio:</p1><br><br>
        
       
			<textarea rows="10" cols="50">
			</textarea>
			<br><br>
			<input type="submit"  value='Sign Up'>
		</form>
		

	</body>
	</html>