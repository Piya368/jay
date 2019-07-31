<?php include('server.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>reg</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><br> <br> <br>
	<div class="header"> register </div>
      <div class="shadow" ><br> <br>
      	
        <form action="" method="post">
        	<table align="center" style="color: white;">
        		<tr>
        			<td> Name: </td>
        			<td> <input type="text" name="fname" placeholder="Your Name"> </td>
        			<td><input type="text" name="lname" placeholder="Your last name"></td>
        		</tr>
        		<tr>
        			<td> Address </td>
        			 <td> <input type="text" name="address" placeholder="Where do you live?"> </td> 
        		</tr>
        		<tr>
        			<td> Gender </td>
        			<td> <input type="radio" name="gender" value="male"> Male </td>
        			<td> <input type="radio" name="gender" value="female"> Female </td>
        			<td> <input type="radio" name="gender" value="others"> Other </td>
        		</tr>
        		<tr>
        			<td> Phone </td>
        			<td> <input type="tel" name="phone" placeholder=" 1234567890 "> </td>
        			<tr>
        				<td> Email </td>
        				<td> <input type="email" name="email" placeholder="xyz@example.com"> </td>
        			</tr>
        			<tr>
        				<td> Username </td>
        				<td> <input type="text" name="username" placeholder="Set a Username for you "> </td>
        			</tr>
        			<tr>
        				<td> Password </td>
        				<td> <input type="password" name="password"> </td>
        				<tr>
        					<td></td>
        					<td> <input type="submit" name="submit" value="Submit"> </td>
        				</tr>
        			</tr>
        		</tr>
        		
        	</table>
        </form>

      </div><br> <br>
     <center><div class="new"> hii</div></center>
</body>
</html>
