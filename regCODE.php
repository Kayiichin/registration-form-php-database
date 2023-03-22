
<?php

include 'Database.php';

if (isset($_POST['sub']))
{

    $first=$_POST['Fname'];
    $user=$_POST['Us'];
    $pass=$_POST['Ps'];


    
    $sql="INSERT INTO users (Firstname, Username,Password) VALUES ('$first','$user','$pass')";

    mysqli_query($connection, $sql);

    mysqli_close($connection);

}
?>




