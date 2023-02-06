<?php

//database connection
$conn = mysqli_connect("localhost", "root", "", "kist_a", 3306); //this function returns an mysqli Object

//to see how the object is returned debug this 
/* echo "<pre>";
print_r($conn);
echo "</pre>";
exit; */

/* if ($conn) {
    echo "Database connected successfully.";
} else {
    echo mysqli_connect_error($conn); //this function prints db errors
} */

<html>
<head>
  <title>KHATRI Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="icon.png">
</head>
<body style="background-color:white ;"></body>
<div style= "position:absolute; left:-10px; top:-40px;">
<a href="index.html">
<img src="Khatri.png" height="280" />
</a>
<link rel="stylesheet" href="signup.css">
<div style= "position:absolute; left:700px; top:60px;">
    <table>
        <tr>
         <td>Fullname:</td>
         <td><input type="text" class="uname" required></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" class="uname" required></td>
           </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" class="uname" required></td>
        </tr> 
        <tr>
         <td>Password:</td>
         <td><input type="password" class="uname" required></td>
        </tr>
        <tr>
         <td>Gender:</td>
         <td>
          <input type="radio" name="gender" value="m" required>Male
          <input type="radio" name="gender" value="f" required>Female
         </td>
        </tr>
        <tr>
         <td>Phone no:</td>
         <td>
          <select name="phoneCode" required>
           <option selected hidden value="">Select Code</option>
           <option value="977">+977 Nepal</option>
           <option value="91">+91 India</option>
           <option value="975">+975 Bhutan</option>
           <option value="880">+880 Bangladesh</option>
           <option value="92">+92 Pakistan</option>
           <option value="94">+94 Srilanka</option>
           <option value="960">+960 Maldives</option>
          </select>
          <input type="phone" class="uname" required>
         </td>
        </tr>
        <tr>
         <td><input type="submit" value="Submit" class="submit3"></td>
        </tr>
       </table>
      </form>