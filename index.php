<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 50%;
    margin-left: 30%;
    margin-top: 2%;
    background-color: #ffffff;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
body{
    background-color: #e79329;
}
</style>
<div class="card" data-animate-effect="fadeIn">


<form action="showPage.php" method="post" style="border:1px solid #ccc" >
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="first_name" required>

    <label for="name"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="last_name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat">

    <label for="name"><b>User Name</b></label>
    <input type="text" placeholder="User Name" name="username" required>

    <label for="name"><b>Age</b></label>
    <input type="text" placeholder="age" name="age" required>

    <label for="name"><b>Email Address</b></label>
    <input type="text" placeholder="Email Address" name="address" required>

    <label for="name"><b>Phone Number</b></label>
    <input type="text" placeholder="Phoen Number" name="phone" required>
    
    
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn" value="Submit" name="submit">Sign Up</button>
    </div>
  </div>
</form>
</div>
