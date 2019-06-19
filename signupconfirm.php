<div class="content">
  <h3 align="center">Signup</h3>
    <?php
		include "config.php";
		// $date_from= $_POST['date_from'];
		// $date_to= $_POST['date_to'];
    if($_POST['password'] != $_POST['password1']){
        echo "Your passwords did not match.";
      ?> Please <a href="signup.php"> Signup </a> again.<br><?php

        exit();
    }
    $FirstName = filter_input(INPUT_POST, 'firstname');
    $LastName = filter_input(INPUT_POST, 'lastname');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    // $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";
    // if(mysqli_query($link, $sql)){
    // echo "Records inserted successfully.";
    // } else{
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    // }
    

    echo "INSERT into users values ('$FirstName','$LastName','$username','$password');";
	$result=mysqli_query($con, "INSERT into users values ('$FirstName','$LastName','$username','$password');");
    ?> Successfully signed up. Go <a href="index.php">here</a> to log in.
		<?php mysqli_close($con);?>		
</div>

   
 
