
<html>
	<head>
		<title>Registration Form</title>
		<style>
			body{
		background-image: url(blur-clinic-health.jpg);
		background-repeat: no-repeat;
    	background-size: cover;
}
 h1{
 		color:blue;
 		font-size:60;
 	
}
.table{
		border-color: white;
}
input{
		text-align:center;
		background-color:teal; 
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border:none;
		border-radius: 20px;
		cursor: pointer;
		font-size: 20px;
		font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif ;
}

th,td{
	text-transform: uppercase;
	font-size: 20px;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif ; 
}
select{
	background-color:teal;
	font-size: 20px;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif ;
	color:white;
	border-radius: 10px;
}

		</style>
	</head>
<body>
	<center>
	<h1 align="center">REGISTRATION FORM </h1>
	<form method="post" action="register.php">
	<table class=table >
			<tr>
				<th>
				Name:</th><td> <input type="text" name="name"></td>
			</tr><br>	
			<tr>	
			    <th>Age:</th> <td>  <input type="number" name="age"></td>
		    </tr><br>
		  <tr>  
		       <th> Gender:</th>  <td><input type="radio" name="gender" value="M">M 
                <input type="radio" name="gender" value="F"> F
                </td>
         </tr><br>
         <tr>
        	<th>Contact no:</th><td>  <input type="number" name="contact" value="+91"><br><br></td>
        </tr><br>
        <tr>
        <th>Choose your Doctor:</th><td><select name="doctors">
        										<option value="0">
        											---Select--- 
        										</option>
        										<option value="Dr.Kailash Bhatia">
        											Dr.Kailash Bhatia 
        										</option>		
        										<option value="Dr.Ajay Tiwari">
        											Dr.Ajay Tiwari
        										</option>
        										<option value="Dr.Narendra Gokhale">
        											Dr.Narendra Gokhale
        										</option>
        										<option value="Dr.Girish Kumar">
        											Dr.Girish Kumar
        										</option>
        								</select>
        							</td>
        </tr>
       </table><br><br><br>					
         <input type="submit" value="Submit" align="center">
	</form>
	</center>
</body>	
</html>