<style>
*{
	margin: 0;
	padding:0;
	font-family:'poppins', sans-serif;
	box-sizing: border-box;
}
	body
	{

		main-color: #A0522D;
		text-align: center;
		background-color: floralwhite;
		border: .1rem solid #bc856c;

	}
section{
	display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    
    background: url('bg.png')no-repeat;
    background-position: center;
    background-size: cover;
}
form{
	background: transparent;
	position: relative;
    width: 400px;
    height: 450px;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(10px);

}

	form-box
	{
	border-radius: 10px;
    backdrop-filter: blur(3px);
    display: flex;
    justify-content: center;
    align-items: center;

}
	}
	.su
	{
		border-radius:10px;	
		height: 35px;
		margin: 35px 0;
		background: black;
		color: floralwhite;
		position: relative;
		left: -5px;
		top: -20px;
 	}
input[type=text], input[type=password]{
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;

}
input[type=text]:focus {
  border: 2px solid #826041;
}
button{
	margin-top: 1rem;
    display: inline-block;
    padding: 0.9rem 3rem;
    background: #826041;
  color: floralwhite;
    
    text-align: center;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    border-radius: 20px;
    border-color: transparent;
    
}
button:hover{
  background: floralwhite;
  color: #826041;
  }

 h1{
 	font-size: 2em;
    color: #371e10;
    text-align: center;
 }
 label{
 	color: floralwhite;
 }
</style>

<center>
<section>
<form method="POST">
<br> 

<h1>REGISTRATION FORM</h1><br><br>
 <label> First Name</label>
		<input type="text" name="Fname" value="" placeholder="Your first name.."> <br><br>

	
<label>Username</label>

		<input type="text" name="Us" value="" placeholder="Your username... "> <br><br>
<label>Password</label>
		<input type="password" name="Ps" value="" placeholder="Your password... "> <br><br>
		<br><br><br>



	<button class="su" type="sub" name="sub">SUBMIT</button>

</form>
</section></center>

<?php
	include 'regCODE.php';
?>


