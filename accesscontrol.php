<?php   
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    $userID = isset($_POST['userID']) ? $_POST['userID'] : $_SESSION['userID'];
    $password = isset($_POST['password']) ? ($_POST['password']) : $_SESSION['password'];
    if(!isset($userID)) {
?>
    
     <h1> Login Required </h1>
     <p>You must log in to access this area of the site. 
     <p><form method="post" action="<?=$_SERVER['../PHP_SELF']?>">
     User ID: <input type="text" name="userID" size="8" /><br />
     Password: <input type="password" name="password" SIZE="8" /><br />
     <input type="submit" value="Log in" />
     </form></p>
<?php
    exit;
    }
    $_SESSION['userID'] = $userID;
    $_SESSION['password'] = $password;
    include'config.php';

    $sql = "SELECT * FROM users WHERE username = '$userID' AND password = '$password';";
    $result = mysqli_query($con ,$sql);
    if (!$result){
    echo "a login error occured";
    }

if (mysqli_num_rows($result) == 0) 
    {
    echo $password;
    echo $sql;
    //ECHO $result;
    unset($_SESSION['userID']);
    unset($_SESSION['password']);
    header('location:errorpage.html');
?>
    
<?php
    exit;
}
?>
<p align="center">Welcome, <?=$userID?>!</p>





