<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
        $conn = mysqli_connect('localhost','root','','vegan') or die("Connection failed:".mysqli_connect_error());
        
        $username= $_POST['username'];
        $password= $_POST['password'];
        
        $hashed_password = md5($password); 

        $sql = "SELECT * FROM `signin` WHERE `username` = '$username' AND `password` = '$password'";
        $query = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($query) == 1) {
            echo '<script>alert( "Login Successful!")</script>';
            echo '<script>window.location="IP2.html"</script>'; 

            exit();
        } else {
            echo '<script>alert("Invalid username or password. Please try again.")</script>';
            echo '<script>window.location="login.html"</script>'; 
        }
    }
?>
